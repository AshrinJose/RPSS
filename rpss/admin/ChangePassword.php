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
<h1 class="title">Welcome  <span><?php echo $user;?></span></h1>

<table width="623" height="30" border="0">
  <tr>
 	<td class="title"><span>Change Password</span></td>    
  </tr>
</table></div>
<div class="row2">
<form action="" method="post" onsubmit="return validate_form(this);">
<table align="center">
<tr>
	<td ><label for="txtuser">Username:</label></td>
    <td><input type="text" name="txtuser" id="txtuser" class="form-control" required="required"/></td>
</tr>
 <tr>
    <td>Old Password:</td>
    <td><input type="text" name="txtopwd" id="txtopwd" class="form-control" required="required" /></td>
  </tr>
  <tr>
    <td>New Password:</td>
    <td><input type="text" name="txtnpwd" id="txtnpwd" class="form-control" required="required" /></td>
  </tr>
  <tr>
    <td>Confirm password:</td>
    <td><input type="text" name="txtcpwd" id="txtcpwd" class="form-control" required="required" /></td>
    <td>&nbsp;</td>
  </tr>

</table><br />
<table align="center">
  <tr>
    <td>
      <input type="submit" name="btnsubmit" id="button" value="Change Password" class="btn btn-primary" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      <input type="submit" name="btncancel" id="button3" value="Cancel" class="btn btn-primary" />
    </td>
  </tr>
</table>
</form>
 
</div>
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


<?php
if(!isset($_SESSION))
{
	session_start();
}
if($_POST)
{
	require_once("db.php");
	 if($_POST['btnsubmit']=="Change Password")
	 {
		 $user=$_POST['txtuser'];
		 $old=$_POST['txtopwd'];
		 $new=$_POST['txtpwd'];
		 $cpass=$_POST['txtcpwd'];
		 $sql="select * from tbl_login where username='$user'";
		 $result=mysql_query($sql);
		 if($result>0)
		 {
			  if($new==$cpass)
        		{
      				$insert=mysql_query("update tbl_login set password='$new' where username='$user'"); 
					echo "<script>alert('Password Changed..');</script>";
					echo '<META HTTP-EQUIV="Refresh" Content="0; URL=login.php">';
        		}
		 }
		 else
		 	echo "<script>alert('Error');</script>";
	 }
	
}
?>