<?php include_once('../config/config.php') ;
	
	
    if(isset($_SESSION['login'])){
		
    unset($_SESSION['username']);
    unset($_SESSION['login']);
    unset($_SESSION['loggedin_time']);
    session_destroy();
	//$_SESSION['showAlert']="You are sucesfully Logout";
    header('Location: ../index.php'); 
    exit;
    }
    else{
	
    $_SESSION['error']="Oops Something is Wrong";
	header('Location: ../index.php'); 	
    }
	
























?>