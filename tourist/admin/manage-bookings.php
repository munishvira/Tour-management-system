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
<title>AT | Admin manage Bookings</title>
</head>
<body>
   <div class="page-container">
<div class="left-content">
	   <div class="mother-grid-inner">
				<?php include('includes/header.php');?>
				     <div class="clearfix"> </div>
				</div>
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Manage Bookings</li>
            </ol>
						<label>Destination:</label>
						<input type="text" id="destination" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"><br>
						<label>Date:</label>
						<input type="text" id="date" onkeyup="myFunction2()" placeholder="Search for date.." title="Type in a date"><br>
<div class="agile-grids">
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2>Manage Bookings</h2>
					    <table id="myTable" class="table" border="1" width="100%">
						  <tr align="center">
						  <th>Booikng id</th>
							<th>Name</th>
							<th>Mobile No.</th>
							<th>Email Id</th>
							<th>Destination</th>
							<th>From /To </th>
							<th>Booking date </th>
						  </tr>
<?php $sql = "SELECT package.pid as bookid,package.tid as tid,user.name as fname,user.phone as mnumber,user.email as email,tourdetails.place as pckname,tourdetails.from_date as fdate,tourdetails.to_date as tdate,package.book_date as upddate from user join package on package.usermail=user.email join tourdetails on
tourdetails.tid=package.tid";
$query = mysqli_query($con,$sql);
$cnt=1;
if(mysqli_num_rows($query)){
foreach($query as $result)
{	?>					<tr align="center">
							<td>#BK-<?php echo htmlentities($result['bookid']);?></td>
							<td><?php echo htmlentities($result['fname']);?></td>
							<td><?php echo htmlentities($result['mnumber']);?></td>
							<td><?php echo htmlentities($result['email']);?></td>
							<td><a href="update-package.php?tid=<?php echo htmlentities($result['tid']);?>"><?php echo htmlentities($result['pckname']);?></a></td>
							<td><?php echo htmlentities($result['fdate']);?> To <?php echo htmlentities($result['tdate']);?></td>
							<td><?php echo htmlentities($result['upddate']);?></td>
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
	<script>
	function myFunction() {
	  var input, filter, table, tr, td, i, txtValue;
	  input = document.getElementById("destination");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("myTable");
	  tr = table.getElementsByTagName("tr");
	  for (i = 0; i < tr.length; i++) {
	    td = tr[i].getElementsByTagName("td")[4];
	    if (td) {
	      txtValue = td.textContent || td.innerText;
	      if (txtValue.toUpperCase().indexOf(filter) > -1) {
	        tr[i].style.display = "";
	      } else {
	        tr[i].style.display = "none";
	      }
	    }
	  }
	}
	function myFunction2() {
	  var input, filter, table, tr, td, i, txtValue;
	  input = document.getElementById("date");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("myTable");
	  tr = table.getElementsByTagName("tr");
	  for (i = 0; i < tr.length; i++) {
	    td = tr[i].getElementsByTagName("td")[6];
	    if (td) {
	      txtValue = td.textContent || td.innerText;
	      if (txtValue.toUpperCase().indexOf(filter) > -1) {
	        tr[i].style.display = "";
	      } else {
	        tr[i].style.display = "none";
	      }
	    }
	  }
	}
	</script>
</div>
<div class="clearfix"></div>
</body>
</html>
<?php } ?>
<?php include('includes/footer.php');?>
