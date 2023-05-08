<?php

session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']) OR !isset($_REQUEST['pag'])){
	
header("location:../index.php?x=2");
} else {
header("location:index2.php");
}
?>