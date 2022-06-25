<?php include_once('./include/head.php')  ?>
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Signup Form</h2>
        
        <div class="card my-5">

          <form action="./controller/signup_controller.php" method="post"  class="card-body cardbody-color p-lg-5" >
		  
            <div class="mb-3">
              <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                placeholder="Please Enter Your Name" name="name" required >
            </div>
			<div class="mb-3">
              <input type="email" class="form-control" id="Username" name="user_email" aria-describedby="emailHelp"
                placeholder="Enter Email" required>
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
            </div>
			  
            <div class="mb-3">
              <input type="number" class="form-control" id="mobile" placeholder="Mobile" name="mobile" required>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
          
          </form>
        </div>

      </div>
    </div>
  </div>
  <?php include_once('./include/footer.php') ?>