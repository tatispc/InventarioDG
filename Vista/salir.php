/* salida del usuario
<?php
	session_start();
	session_unset();
	session_destroy();
	/*se envía al index con una variable x=3, que le indica que ha cerrado la sesión*/
	header('location:../index.php?x=3');
?>





