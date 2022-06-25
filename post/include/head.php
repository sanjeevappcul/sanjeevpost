 <!doctype html> 
 <?php  
    session_start();
	
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
 .btn-color{
  background-color: #0e1c36;
  color: #fff;
  
}


a{
  text-decoration: none;
}
 </style> 
 </head>
 <body>
 <?php
 if(isset($_SESSION['showAlert']) && !empty($_SESSION['showAlert'])) {
   ?>
         <div class="alert alert-success 
            alert-dismissible fade show" role="alert">
    
            <strong>Success!</strong> <?php if(isset($_SESSION['showAlert'])){ echo $_SESSION['showAlert'];} ?>
            <button type="button" class="close"
                data-dismiss="alert" aria-label="Close"> 
                <span aria-hidden="true">×</span> 
            </button> 
        </div>
		
		
 <?php unset($_SESSION['showAlert']); } ?>
   
 <?php if(isset($_SESSION['error']) && !empty($_SESSION['error'])) {
			
			?>
       <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong><?php echo $_SESSION['error'];;?>
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> 
	 
	 
  <?php unset($_SESSION['error']);  
  }
   
   
 ?>
