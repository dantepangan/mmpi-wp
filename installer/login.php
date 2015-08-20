<?php
	
	session_start();
 
	
	require_once('conn.php');
 
	
	$errmsg_arruser = array();
	$errmsg_arrpass = array();
	
	$errflag = false;
 
	
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	
	$username = clean($_POST['user']);
	$password = clean($_POST['pass']);
 
	
	if($username == '') {
		$errmsg_arruser[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arrpass[] = 'Password missing';
		$errflag = true;
	}
 
	
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arruser;
		session_write_close();
		header("location: index.php");
		exit();
	}
	
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arrpass;
		session_write_close();
		header("location: index.php");
		exit();
	}
 
	
	$qry="SELECT * FROM systemuser WHERE Username='$username' AND Password='$password'";
	$result=mysql_query($qry);
 
	
	if($result) {
		if(mysql_num_rows($result) > 0) {
			
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_ID_NO'] = $member['IDno'];
			$_SESSION['SESS_USER_NAME'] = $member['Username'];
			$_SESSION['SESS_PASS_WORD'] = $member['Password'];
			$_SESSION['SESS_DESIG'] = $member['Designation'];
			
			session_write_close();
			header("location: home.php");
			exit();
		}else {
			
			$errmsg_arr[] = 'Username and Password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: index.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>