<?php include_once('../config/config.php') ;
	


if(isset($_POST['email'])){
	
	$email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
	$hash = md5($password);
	$sql="SELECT * from `users` WHERE `email`='$email' and `password`='$hash'";
	$res =mysqli_query($conn,$sql);

	$row=mysqli_fetch_array($res);
	
	if($row>0){
		
		$_SESSION['id']=$row['id'];
		$_SESSION['user_name']=$row['user_name'];
		$_SESSION['email']=$row['email'];;
		$_SESSION['Mobile']=$row['Mobile'];;
		$_SESSION['login']=TRUE;
		$_SESSION['loggedin_time'] = time();  
		$_SESSION['showAlert']="You are sucesfully login";
		header("location:../dashboard.php");		
		}
		else {
		
		$_SESSION['error']="Incorrect User name and Passwords";
		header("Location: ../index.php");
		}
}























?>