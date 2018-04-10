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
	<h2>Hello <?= $_SESSION["username"] ?> </h2>
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