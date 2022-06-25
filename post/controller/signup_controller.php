<?php include_once('../config/config.php') ;
if(isset($_POST['user_email'])){
	$name = mysqli_real_escape_string($conn, $_POST['name']);
    $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
	$hash = md5($password);
	$sql = "Select * from users where email='$user_email'";

    $res = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($res); 
	if($num == 0) {
	$sql = "INSERT INTO `users` ( `user_name`, `email`, `Mobile`,`password`) VALUES ('$name','$user_email','$mobile','$hash')";
  
            $result = mysqli_query($conn, $sql);
            if ($result) {
				
				$_SESSION['showAlert']="You are sucesfully Registered";
				header("Location: ../index.php");
            }
	}
	else{
		
		$_SESSION['error']="This Email id is Already Registered";
		header("Location: ../index.php");
	}
}























?>