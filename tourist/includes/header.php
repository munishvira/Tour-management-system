<?php
include 'links.php';
include 'config.php';
include 'signup.php';
include 'signin.php';
include 'admin/index.php'
?>
<?php
session_start();
if($_SESSION['login'])
 {?>
<div class="top-header">
  <div class="container">
    <ul class="tp-hd-lft">
      <li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
      <li class="prnt"><a href="tour-history.php">My Tour History</a></li>
    </ul>
    <ul class="tp-hd-rgt">
      <li class="tol">Welcome :</li>
      <li class="sig">
      <?php echo htmlentities($_SESSION['login']);?>
      </li>
      <li class="sigi"><a href="logout.php">/ Logout</a></li>
    </ul>
    <div class="clearfix"></div>
  </div>
</div>
<?php } else {?>
<div class="top-header">
  <div class="container">
    <ul class="tp-hd-lft">
      <li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
      <li class="hm"><a href="#" data-toggle="modal" data-target="#modalRegisterForm3">Admin Login</a></li>
    </ul>
    <ul class="tp-hd-rgt">
      <li class="tol">Number : 022-24567812</li>
      <li class="sig"><a href="#" data-toggle="modal" data-target="#modalRegisterForm">Sign Up</a></li>
      <li class="sigi"><a href="#" data-toggle="modal" data-target="#modalRegisterForm2">/ Sign In</a></li>
    </ul>
    <div class="clearfix"></div>
  </div>
</div>
<?php }?>
<div class="header">
  <div class="container">
    <div class="logo">
      <a href="index.php" id="head">Ambika <span>Travels</span></a>
    </div>
    <div class="lock">
      <li><i class="fa fa-lock"></i></li>
      <li>
        <div class="securetxt">SAFE &amp; SECURE </div>
      </li>
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<nav class="navbar navbar-expand-sm bg-success navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="aboutus.php">About</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="package-list.php">Tour Packages</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="privacy.php">Privacy Policy</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="terms.php">Terms of Use</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="contact-us.php">Contact us</a>
    </li>
  </ul>
</nav>
