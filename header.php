<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>yj</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php">YJ PHONE SHOP</a></li>
			</ul>
			<div class="nav-login">
				<?php
					if (isset($_SESSION['u_id'])) {
						echo '<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button>
						Log in as '.$_SESSION["u_uid"].'
						</form>'
						;
					} else {
						echo '<form action="includes/login.inc.php" method="POST">
							<input type="text" name="uid" placeholder="Username/e-mail">
							<input type="password" name="pwd" placeholder="password">
							<button type="submit" name="submit">Login</button>
							<a href="signup.php">Sign up</a>
						</form>';
						
					}
					
				?>
			</div>
		</div>
	</nav>
</header>