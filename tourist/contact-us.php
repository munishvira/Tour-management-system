<?php
session_start();
error_reporting(0);
include 'includes/links.php';
include 'includes/config.php';
if(isset($_POST['submit4']))
{
  $fname=$_POST['firstname'];
  $lname=$_POST['lastname'];
  $msg=$_POST['subject'];
  $sql="insert into query(fname,lname,message) values('$fname','$lname','$msg')";
  if(mysqli_query($con,$sql)){
    echo "<script>alert('successfully');</script>";
  }
}
?><?php include 'includes/header.php' ?>

<h3>Contact Form</h3>
<div class="container">
  <form method="POST">

    <label for="fname">First Name</label><br>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>

    <label for="lname">Last Name</label><br>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>

    <label for="subject">Subject</label><br>
    <textarea id="subject" name="subject" placeholder="Write something.." rows="4" cols="50"></textarea><br>

    <input type="submit" name="submit4" value="Submit">

  </form>
</div>
<?php
include 'includes/footer.php';
?>
