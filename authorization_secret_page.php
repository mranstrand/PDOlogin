<?php
if(isset($_SESSION["username"])){
	echo "Du är inloggad som " . $_SESSION["username"] . "<br /><a href='logout.php'>Logga ut</a><br /><br />";
}else{
	header("Location: index.php");
}
?>