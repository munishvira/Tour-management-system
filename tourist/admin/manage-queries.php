<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{
header('location:index.php');
}
else{
include('includes/links.php');
	?>
<!DOCTYPE HTML>
<html>
<head>
<title>AT | Admin manage Users</title>
</head>
<body>
   <div class="page-container">
<div class="left-content">
	   <div class="mother-grid-inner">
				<?php
        include('includes/header.php');

        ?>
				     <div class="clearfix"> </div>
				</div>
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Manage Users</li>
            </ol>
<div class="agile-grids">
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2>Manage Users</h2>
					    <table id="table" border="1" width="100%">
						  <tr align="center">
						  <th>#</th>
							<th>firstname</th>
							<th>lastname</th>
							<th>message</th>
						  </tr>
<?php $sql = "SELECT * from query";
$query = mysqli_query($con,$sql);
$cnt=1;
if(mysqli_num_rows($query) > 0)
{
foreach($query as $result)
{				?>
						  <tr align="center">
							<td><?php echo htmlentities($cnt);?></td>
							<td><?php echo htmlentities($result['fname']);?></td>
							<td><?php echo htmlentities($result['lname']);?></td>
							<td><?php echo htmlentities($result['message']);?></td>
						  </tr>
						 <?php $cnt=$cnt+1;} }?>
					  </table>
					</div>
			</div>
			<div class="inner-block">

			</div>
			</div>
			</div>
			<?php include('includes/sidebarmenu.php');?>
					<div class="clearfix"></div>
				</div>
			</body>
			</html>
			<?php } ?>
			<?php include('includes/footer.php');?>
