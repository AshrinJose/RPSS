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
<script src="js/validation.js"></script>
<script language="Javascript" type="text/javascript">
         function onlyNos(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                }
                return true;
            }
            catch (err) {
                alert(err.Description);
            }
        }
		function officeNumber()
		{
 			 var ph=(document.getElementById('txtoffice'));	
			 var phoneno = /^\d{11}$/;  
 			 if(ph.value.match(phoneno))   
  				{  
 				    return true;
 				 }
  
 			 else  
 				 {   
  				   alert("Please enter valid number.");
 				    ph.focus();
  				   return false;
 				 } 
		}
		function mobileNumber()
		{
 			 var ph=(document.getElementById('txtphone'));	
			 var phoneno = /^\d{10}$/;  
 			 if(ph.value.match(phoneno))   
  				{  
 				    return true;
 				 }
  
 			 else  
 				 {   
  				   alert("Please enter valid mobile number.");
 				    ph.focus();
  				   return false;
 				 } 
		}
    </script>
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
<h1 class="title">Welcome  <span><?php echo $user;?></span></h1>
<p>&nbsp;</p>
<table width="615" height="38" border="0">
  <tr>
    <td class="title"><span>Admin Form</span></td>
  </tr>
</table>
<h4 class="title">&nbsp;</h4>
<p> <strong><u>Enter admin details:</u></strong></p>
<p>&nbsp;</p>
<form action="" method="post" onsubmit="return validate_form(this);">
<table width="612" height="114" border="0">
<tr>
	<td><label for="txtcode">Code No:<font color="#FF0000">*</font></label></td>
      <td><input type="text" name="txtcode" id="txtcode" onchange="vname()" required="required" /></td>
</tr>
  <tr>
    <td><label for="txtcname">Admin Name:<font color="#FF0000">*</font></label></td>
    <td><input type="text" name="txtcname" id="txtcname" required /></td>
  </tr>
   <tr>
    <td><label for="txtcaddress">Address:<font color="#FF0000">*</font></label></td>
    <td><textarea name="txtaddresss" id="txtaddresss" cols="45" rows="5" required="required"></textarea></td>
  </tr>
  <tr>
  	<td><label for="txtcplace">Place:<font color="#FF0000">*</font></label></td>
  	<td><input type="text" name="txtcplace" id="txtcplace" required/></td>
  </tr>
   <tr>
   	<td><label for="txtcdistrict">District:<font color="#FF0000">*</font></label></td>
    <td><input type="text" name="txtcdistrict" id="txtcdistrict" required/></td>
  </tr>
   <tr>
    <td><label for="txtresphone">Residence Ph No.:</label></td>
    <td><input type="text" name="txtresphone" id="txtresphone" onchange="officeNumber()" /></td>
  </tr>
    <tr>
    	<td><label for="txtcmob">Mobile No:<font color="#FF0000">*</font></label></td>
     	<td><input type= text name="txtcmob" id="txtcmob" onchange="mobileNumber()" required/></td>
  </tr>
  <tr>
  	<td><label for="txtcemail">Email ID:<font color="#FF0000">*</font></label></td>
    <td><input type="email" name="txtcemail" id="txtcemail" onchange="vemail()" required/></td>
  </tr>  
  </table>
  <p>&nbsp;</p>
<p>&nbsp;</p>

<p>&nbsp;</p>
<table border="0">
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
      <input type="submit" name="btncreate" id="button" value="Edit Details" class="btn btn-primary" />&nbsp;&nbsp;
      <input type="submit" name="btncancel" id="button3" value="Cancel" class="btn btn-primary" />
    </td>
  </tr>
</table>
</form>
<p>&nbsp;</p>
</div>

</div>
<div class="content-right">
<div class="mainmenu">
<h2 class="sidebar1">Make</h2>
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


<?php
if($_SESSION)
{
	$user=$_SESSION['user'];
}
if($_POST)
{
	require_once("db.php");
	 if($_POST['btncreate']=="Edit Details")
	 {
		 $code=$_POST['txtcode'];
		 $name=$_POST['txtcname'];
		 $address=$_POST['txtaddresss'];
		 $place=$_POST['txtcplace'];
		 $dist=$_POST['txtcdistrict'];
		 
		 $rph=$_POST['txtresphone'];
		 $mph=$_POST['txtcmob'];
		 $email=$_POST['txtcemail'];
		 $sql="select * from tbl_personaldetails tbl_personaldetails.name='$user'";
		 $result=mysql_query($sql);
		 if($result>0)
		 {
      				$insert=mysql_query("update tbl_personaldetails set code_no=$code,name='$name',address='$address',place='$place',district='$dis't,acc_no=0,res_no=$rph,mob_no=$mph,email='$email' where tbl_personaldetails.name='$user'"); 
					if($insert>0)
					{
					echo "<script>alert('Details Changed..');</script>";
					echo '<META HTTP-EQUIV="Refresh" Content="0; URL=AdminHome.php">';
					}
					else
						echo "<script>alert('Error in $insert');</script>";
		 }
		 else
		 	echo "<script>alert('Error');</script>";
	 }
	
}
?>