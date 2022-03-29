<?php
//start session
session_start();

include_once('User.php');
$user = new User();
if( $_SERVER['REQUEST_METHOD'] == 'POST'){
$user->register_user($_POST['login'], $_POST['email'], $_POST['password'], $_POST['name'], $_POST['surname'], $_POST['birthday'], $_POST['pesel']);
}
?>
<form method="post" name="register" action="register.php">
	<label>Email</label>
	<input type="email" name="email">

	<label>Login</label>
	<input type="login" name="login">

	<label>Password</label>
	<input type="password" name="password">

	<label>Name</label>
	<input type="text" name="name">

	<label>Surname</label>
	<input type="text" name="surname">

	<label>Birthday</label>
	<input type="date" name="birthday">

	<label>Pesel</label>
	<input type="number" name="pesel">

	<button type="submit">Zarejestruj</button>
</form>
