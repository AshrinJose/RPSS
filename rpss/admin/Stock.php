<?php
session_start();
if($_SESSION)
{
	require_once("db.php");
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
<table width="623" height="48" border="0">
  <tr>
 	<td class="title"><span>Update Stock Details</span></td>    
  </tr>
</table>
</div>
<form action="addpr.php" method="post">
<table width="400" height="150" border="0" align="center">  
      <tr>
      <td><strong>Date :</strong></td>
      <td><label>
        <input type="text" name="txtdate" class="form-control" required />
      </label></td>
    </tr>
    <tr>
      <td><strong>Commodity :</strong></td>
      <td><label>
        <input type="text" name="txtcname" class="form-control" required />
      </label></td>
    </tr>
    <tr>
      <td><strong>No.of Barrels :</strong></td>
      <td><label>
        <input type="text" name="txtbarrels" class="form-control"  required/>
      </label></td>
    </tr>
    <tr>
    <!--check table order while coding-->
      <td><strong>No.of Sheets :</strong></td>
      <td><label>
        <input type="text" name="txtsheet" class="form-control"  required/>
      </label></td>
    </tr>
    <tr>
      <td><strong>Wet.weight :</strong></td>
      <td><p>
        <input type="text" name="txtwet" class="form-control" required/>
      </p>
        </td>
    </tr>
    <tr>
      <td><strong>DRC Percentage :</strong></td>
      <td><p>
        <input type="text" name="txtdrc" class="form-control" required/>
      </p>
        </td>
    </tr>
    </table><br />
<table align="center">
    <tr>
      <td>
       	 <input type="submit" name="btnsave" id="button" value="Save" class="btn btn-primary" />
     	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
     	 <input type="submit" name="btncancel" id="button3" value="Cancel" class="btn btn-primary" /></td>
       </tr>    
  </table>
  </form>
</div>
<div class="content-right">
<div class="mainmenu">
<h2 class="sidebar1">Useful Links</h2>
<ul>
  <li><a href="Billing.php" target="_blank">Billing</a></li>
  <li><a href="Emp_Salary.php" target="_blank">Enter Salary</a></li>
  <li><a href="BankStmt.php" target="_blank">bank statement</a></li>
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
