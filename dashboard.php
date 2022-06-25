<?php include_once('./include/head.php');

 if(!isset($_SESSION['login'])){
	 $_SESSION['error']="Please Login First";
	 header("Location: ./index.php");
 }
 ?>
<style>
  .body{
  background-color:green;}
</style>
 
 <header class="py-3 mb-3 border-bottom">
    <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;">
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-dark text-decoration-none dropdown-toggle" id="dropdownNavLink" data-bs-toggle="dropdown" aria-expanded="true">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        </a>
        
      </div>

      <div class="d-flex align-items-center">
        <form class="w-100 me-3">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="flex-shrink-0 dropdown">
		
          <a href="./controller/logout_controller.php" >
           Logout
          </a>
          
        </div>
      </div>
    </div>
  </header>
  
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	
	<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Dashbaord</h2>
        <!-- <div class="text-center mb-5 text-dark">Made with bootstrap</div> -->
        <div class="card my-5">

          <form  id="form_submit"  class="card-body cardbody-color p-lg-5">

            <!-- <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div> -->
			<div class="mb-3 messageshow">
              
            </div>
           
            <div class="mb-3">
              <textarea id="post_user" class="form-control" name="post_user" rows="4" ></textarea>
            </div>
           
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Publish</button></div>
			  <div class="mb-3">
              <textarea id="post_data" class="form-control" value="" rows="4"  style="display:none" readonly></textarea>
            </div>
          
          </form>
		
        </div>

      </div>
    </div>
  </div>
  
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <?php include_once('./include/footer.php') ?>
  
  <script type="text/javascript">
    
  $(document).ready(function() {	
  $('#form_submit').submit(function(event){
	event.preventDefault();	
	var post_user=$('#post_user').val();

	//var targetUrl="./controller/post_controller.php";
	 $.ajax({
    url:"./controller/post_controller.php",
    type:"POST",
    data:{post_user:post_user},
	//dataType: 'json',
    success:function(response)
    {	var response=JSON.parse(response);
		
		
		if(response.message !== null && response.message !== undefined){
		$(".messageshow").html(response.message);
		$("#post_user").val('');
		$("#post_data").val(response.post);
		$("#post_data").show();
		
		}
	else{
	$(".messageshow").html(response);
		
	}
	
    }
   });
})

 });
  </script>