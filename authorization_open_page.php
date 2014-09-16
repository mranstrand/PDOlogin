<?php
if(isset($_SESSION["username"])){
	echo "Du är inloggad som " . $_SESSION["username"] . "<br /><a href='logout.php'>Logga ut</a><br /><br />";
}else{
	echo "Du är inte inloggad. <br /><a href='loginform.php'>Logga in</a><br /><a href='registrationform.php'>Registrera dig</a><br /><br />";
}
?>