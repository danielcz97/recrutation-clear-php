<?php
include_once('Database.php');
$db = new Database();
$db->create_table();
//start session
session_start();

//redirect if logged in
if(isset($_SESSION['user'])){
	header('location:home.php');
}
?>

					<form method="POST" action="login.php">
							<div>
								<input  placeholder="Username" type="text" name="username" autofocus required>
							</div>
							<div>
								<input class="form-control" placeholder="Password" type="password" name="password" required>
							</div>
							<button type="submit" name="login"> Login</button>
					</form>

			<?php
			if(isset($_SESSION['message'])){
				?>
				<div class="alert alert-info text-center">
					<?php echo $_SESSION['message']; ?>
				</div>
				<?php

				unset($_SESSION['message']);
			}
			?>
