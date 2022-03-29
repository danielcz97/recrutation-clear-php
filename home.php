<?php
session_start();
//return to login if not logged in
if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
	header('location:index.php');
}

include_once('User.php');
$user = new User();

//fetch user data
$sql = "SELECT * FROM users WHERE id = '".$_SESSION['user']."'";
$row = $user->details($sql);
if($_POST['id'])
{
    $user->update_details($_POST['id'], $_POST['name'], $_POST['password']);
}

?>
<script type="text/javascript" src="ajax.js"></script>

 <form name="change" method="post" action="home.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="name" value="<?php echo $row['name']; ?>">
            <input type="password" name="password" value="<?php echo $row['password']; ?>">
            <button type="submit">Save</button>
 </form>

<input class="getUser" type="button" value="Get User">

<div class="result"></div>