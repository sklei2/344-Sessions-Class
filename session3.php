<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

// Read the sessions
if ($_SESSION["username"] != "" && $_SESSION["name"] != "") {

	echo "<h1>Hello ";
    echo $_SESSION["username"];
    echo " (Known as ";
    echo $_SESSION["name"];
    echo ") <h2> ";
}else{
?>

	You are not a valid user


	<?php
}


?>




</body>
</html>