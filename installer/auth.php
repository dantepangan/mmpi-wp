<?php
	//Start session
	session_start();
	
	if(!isset($_SESSION['SESS_ID_NO']) || (trim($_SESSION['SESS_ID_NO']) == '')) {
		header("location: index.php");
		exit();
	}
?>