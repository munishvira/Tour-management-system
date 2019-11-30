<?php
include 'config.php';
if(isset($_POST['signin'])){
$email=$_POST['email'];
$password=$_POST['password'];
$sql ="SELECT email,password FROM user WHERE email='$email' and password='$password'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) == 1){
$_SESSION['login']=$_POST['email'];
}
else{
echo "<script>alert('Invalid Details');</script>";
}
}
?>

<div class="modal fade" id="modalRegisterForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
      	<h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
  		</div>
  		<form name="signin" method="post">
      	<div class="modal-body mx-3">
        	<div class="md-form mb-3">
            <input type="email" id="orangeForm-email2" class="form-control validate" name="email" required="">
            <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
          </div>
          <div class="md-form mb-3">
            <input type="password" id="orangeForm-pass2" class="form-control validate" name="password" required="">
            <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
          </div>
      	</div>
      	<div class="modal-footer d-flex justify-content-center">
        	<input type="submit" name="signin" id="submit2" class="btn btn-dark" value="Sign in">
    		</div>
  		</form>
  	</div>
  </div>
</div>
