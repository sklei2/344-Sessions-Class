<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

// Read the sessions
if ($_SESSION["username"] != "") {
?>
	<h2>Hello <?php echo $_SESSION["username"]; ?></h2>
	<?php if($_SESSION['name'] != "") { ?>
		(also known as <?php echo $_SESSION['name']?>)

	<?php } ?>
	<a href="session3.php"> Yet another page </a>
<?php
}else{
?>

	You are not a valid user


	<?php
}


?>




</body>
</html>