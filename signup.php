<?php
	include 'header.php';
	
	if (isset($_REQUEST['signup'])){
	if ($_REQUEST['signup']=='empty'){
		echo '<p style="color:red">Please fill in all the blank</p>';
	}
	else if($_REQUEST['signup']=='invalid'){
		echo '<p style="color:red">Please check your name</p>';
	}
	else if($_REQUEST['signup']=='email'){
		echo '<p style="color:red">Invalid email, please check email</p>';
	}
	else if($_REQUEST['signup']=='usertaken'){
		echo '<p style="color:red">User taken, please try with another username</p>';
	}
	else if($_REQUEST['signup']=='emailtaken'){
		echo '<p style="color:red">Email taken, please try with another email</p>';
	}
	else if($_REQUEST['signup']=='created'){
		echo '<p style="color:black">Account Succesfully Created!</p>';
	}
	
	}
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Signup</h2>
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="Password">
			<input type="text" name="first" placeholder="Firstname">
			<input type="text" name="last" placeholder="Lastname">
			<input type="text" name="email" placeholder="E-mail">

			<button type="submit" name="submit">Sign up</button>
		</form>
	</div>
</section>

<?php
	include 'footer.php';
?>