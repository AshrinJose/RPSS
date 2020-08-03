<?php
session_start();
if($_SESSION)
{
	$user=$_SESSION['user'];
	$type=$_SESSION['type'];	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>RPS System</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="page-out">
<div class="page-in">
<div class="page">
<div class="main">
<div class="header">
<div class="header-top">
<h1>Rubber  <span>Processing</span>Society</h1>
</div>
<div class="header-bottom">
<h2>&nbsp;</h2>
</div>
<div id="wrap">
		  <ul class="navbar">
			 <li style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px;"><a href="AdminHome.php"><span>Home</span></a></li>
			   <li><a href="#"><span>Add</span></a>
              <ul>
				   <li><a href="AddNewMember.php">Member</a></li>
				   <li><a href="AddNewCompany.php">Company</a></li>
                   <li><a href="Newemployee.php">Employee</a></li>
				   <li><a href="NewAdmin.php">New Admin</a></li>
                   <li><a href="#">Events</a></li>
                    <li><a href="#">Services</a></li>
           	</ul> 
            </li>
            <li><a href="#"><span>Update</span></a>
              <ul>
				   <li><a href="AdminDetails.php">Admin Details</a></li>
				   <li><a href="#">Employee Details</a></li>
                   <li><a href="TodayPrice.php">Today's Price</a></li>				   
                   <li><a href="Stock.php">Update Stock Details</a></li>
           	</ul> 
            </li>
             <li><a href="#"><span>Delete</span></a>
              <ul>
				   <li><a href="#">Delete Member</a></li>
				   <li><a href="#">Delete Company</a></li>
                   <li><a href="#">Delete Employee</a></li>
				   <li><a href="#">Delete Admin</a></li>
           	</ul> 
            </li>
              <li><a href="#"><span>View</span></a>
              <ul>
				   <li><a href="userlist.php">View Member Details</a></li>
				   <li><a href="companylist.php">View Company Details</a></li>
                   <li><a href="employeelist.php">View Employee Details</a></li>
				   <li><a href="#">View Admin Details</a></li>
                   <li><a href="#">View Product Details</a></li>
           	</ul> 
            </li>
  <li><a href="logout.php"><span>Logout</span></a></li>
</ul>
</ul>
</div>
</div>
<div class="content">
<div class="content-left">
<div class="row1">
</br>
<h1 class="title">Add New <span>Members</span></h1>
</div>


<?php
	require_once("db.php");
	if(isset($_GET['page']))
	{
		$page=$_GET['page'];
	}
	else
	{
		$page=1;
	}
	$start_from=($page-1)*1;
	$sql="select * from tbl_personaldetails,tbl_plantation,tbl_login where tbl_login.status=0 and tbl_personaldetails.type=2 and tbl_personaldetails.code_no=tbl_login.code_no and tbl_personaldetails.code_no=tbl_plantation.code_no limit $start_from,1";
	$result=mysql_query($sql);
	
?>    
<form action="AddNewMember.php" method="POST">
<table align="center" bordercolor="#82ab01" border="0">
	<tr><td colspan="2"><font color="#82ab01"><b>Personal Details:</b></font></td></tr>
    
    <?php
    	while($row=mysql_fetch_assoc($result))
		{
			
	?>
    <tr>
    	<td>Code No:</td>
        <td><? echo $row['code_no']; ?></td>
    </tr>
    <tr>
    	<td>Name:</td>
        <td><? echo $row['name']; ?></td>
    </tr>
    <tr>
    	<td>Address:</td>
        <td><? echo $row['address']; ?></td>
    </tr>
    <tr>
    	<td>Place:</td>
        <td><? echo $row['place'] ?></td>
    </tr>
    <tr>
    	<td>District:</td>
        <td><? echo $row['district']; ?></td>
    </tr>
    <tr>
    	<td>Bank Account No:</td>
        <td><? echo $row['acc_no']; ?></td>
    </tr>
    <tr>
    	<td>Residence No:</td>
        <td><? echo $row['res_no']; ?></td>
    </tr>
    <tr>
    	<td>Mobile No:</td>
        <td><? echo $row['mob_no']; ?></td>
    </tr>
    <tr>
    	<td>Email ID:</td>
        <td><? echo $row['email']; ?></td>
    </tr>
    <tr>
    	<td>Type:</td>
        <td><? echo $row['type']; ?></td>
    </tr>
    <tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr></tr>
    <tr><td colspan="2"><font color="#82ab01"><b>Plantation Details:</b></font></td></tr>
    <tr>
    	<td>Area of Holding:</td>
        <td><? echo $row['area']; ?></td>
    </tr>
    <tr>
    	<td>Location of Holding:</td>
        <td><? echo $row['location']; ?></td>
    </tr>
    <tr>
    	<td>Place of Holding:</td>
        <td><? echo $row['place']; ?></td>
    </tr>
    <tr>
    	<td>District of Holding:</td>
        <td><? echo $row['district']; ?></td>
    </tr>
    <tr>
    	<td>Clone:</td>
        <td><? echo $row['clone']; ?></td>
    </tr>
    <tr>
    	<td>Tapping Year:</td>
        <td><? echo $row['tapping_yr']; ?></td>
    </tr>
    <tr>
    	<td>Tapping Panel:</td>
        <td><? echo $row['tapping_panel']; ?></td>
    </tr>
    <tr>
    	<td>Tapping System:</td>
        <td><? echo $row['tapping_system']; ?></td>
    </tr>
    <tr>
    	<td>Rain Guarding:</td>
        <td><? echo $row['rain_guard']; ?></td>
    </tr>
     <tr>
    	<td>Status:</td>
        <td><? echo $row['status']; ?></td>
    </tr>
    <?php
		}
	?>
</table>
<?php
	$sql="select count(status) from tbl_login where tbl_login.type=2 and tbl_login.status=0";
	$result=mysql_query($sql);
	$row=mysql_fetch_row($result);
	$total_records=$row[0];
	$total_pages=ceil($total_records/1);
	echo "<table align='center'>";
	
	echo "<tr><td><input type='submit' value='ADD' name='btnsubmit' class='btn btn-primary'></td></tr>";
	echo "<tr><td>";
	for($i=1;$i<=$total_pages;$i++)
	{
		echo "<a href='AddNewMember.php?page=".$i."'>".$i."</a>";
	}
	echo "</td></tr>";
	echo "</table>";
?>	
</form>
 
<?php
if($_POST)
{
require("db.php");
if($_POST['btnsubmit']=='ADD')
{
$c=mysql_query("select * from tbl_login where tbl_login.status=0 and tbl_login.type=2");
if($c>0)
{
$d=mysql_fetch_array($c);
$username=$d['username'];
$password=$d['password'];

$sql=mysql_query("update tbl_login set tbl_login.status=1 where tbl_login.username='$username' and tbl_login.type=2");
echo $sql;
if($sql>0)
{
	echo "<script>alert('Member Added..');</script>";
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=AddNewMember.php">';
}
else 
	echo mysql_error();
}
}
else
	echo mysql_error();
}
?>
</div>
<div class="content-right">
<div class="mainmenu">
<h2 class="sidebar1">Useful Links</h2>
<ul>
  <li><a href="Billing.php" target="_blank">Billing</a></li>
  <li><a href="Emp_Salary.php" target="_blank">Enter Salary</a></li>
  <li><a href="BankStmt.php" target="_blank">Bank statement</a></li>
</ul>
</div>
</div>
</div>
<div class="footer">
<p>&copy; Copyright 2015. Designed by <a target="_blank" href="http://www.htmltemplates.net">RPS System</a><br>
</p>
<ul>  
</ul>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
