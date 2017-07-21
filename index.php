<?php
	include 'header.php';
	include 'includes/dbh.inc.php';
	if(isset($_POST['item_name'])){
		$item_name = $_POST['item_name'];
		$sql = "SELECT * FROM item WHERE itemname LIKE '%$item_name%'";
	}else{
		$sql = "SELECT * FROM item ";
	}
	$result = mysqli_query($conn, $sql);
	if (isset($_REQUEST['login'])){
	if ($_REQUEST['login']=='logempty'){
		echo '<p style="color:red">Please fill in the Login form</p>';
	}
	else if($_REQUEST['login']=='wronguser'){
		echo '<p style="color:red">Invalid user</p>';
	}
	else if($_REQUEST['login']=='errorpassword'){
		echo '<p style="color:red">Incorrect Password</p>';
	}
	}
?>
<br>
<form method="POST" action="index.php" style="background-color:white;float:right;">
<input type="text" value="" name="item_name">
<input type="submit" value="search">
</form>
<?php
while($row = mysqli_fetch_assoc($result)){ ?>
<section class="main-container">
	<div class="main-wrapper">
		
<img src="<?php echo $row['image'];  ?>" style="height:250px;width:200px;"/>

<h3><?php echo $row['itemname'];  ?></h3>
<br>
<h3>RM</h3>
<h3><?php echo $row["itemprice"];  ?></h3>
<p>
<?php echo $row['description'];  ?>
</p>
<br>

		<?php
	}
			
		?>
	</div>
</section>

<?php
	include_once 'footer.php';
?>