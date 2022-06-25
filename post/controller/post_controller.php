<?php include_once('../config/config.php') ;
    if(empty($_SESSION)){
		session_start();
	}
	if(!isset($_SESSION['login'])){
	 $_SESSION['error']="Please Login First";
	 header("Location: ../index.php");
 }

if(!empty($_POST['post_user'])){
	
	 $user_id=$_SESSION['id'];
	
	
	$post_user = mysqli_real_escape_string($conn, $_POST['post_user']);
    
	$sql = "INSERT INTO `post` ( `post_text`,`user_id`) VALUES ('$post_user','$user_id')";
  
            $result = mysqli_query($conn, $sql);
			
				
            if ($result) {
				$output['message'] = 'Post added successfully!';
				
				$sql="SELECT * from `post` WHERE `user_id`='$user_id' order by id desc limit 1";
				$res =mysqli_query($conn,$sql);
				$row=mysqli_fetch_array($res);
				if($row>0){	
				$output['post'] = $row['post_text'];	
				}
			
		
				
				echo json_encode($output);
			}
				
    
}























?>