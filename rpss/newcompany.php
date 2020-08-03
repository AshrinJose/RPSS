<?php
session_start();
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
  <link href="css/style.css" rel="stylesheet" type="text/css">
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
			 <li style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px;"><a href="index.php"><span>Home</span></a></li>
			  <li><a href="login.php"><span>Login</span></a></li>
              <li><a href="#"><span>Register</span></a>
             <ul>
				   <li><a href="newuser.php">Member Registration</a></li>
				   <li><a href="newcompany.php">Company Registration</a></li>
           	</ul>         
			 </li> 
  <li><a href="todaysprice.php"><span>TodaysPrice</span></a></li>
  <li><a href="NewsEvents.php"><span>News Events</span></a></li>
  <li><a href="Feedback.php"><span>Feedback</span></a></li>
</ul>
</ul>
</div>
</div>
<div class="content">
<div class="content-left">
<div class="row1">
<table width="623" height="48" border="0">
  <tr>
 	<td class="title"><span>Welcome to Rubber Processing Society</span></td>    
  </tr>
</table>
<p>&nbsp;</p>
<table width="615" height="38" border="0">
  <tr>
    <td>Register Here</td>
  </tr>
</table>
<h4 class="title">&nbsp;</h4>
<p> <strong><u>Please enter your company details:</u></strong></p>
<p>&nbsp;</p>
<form action="newcompany.php" method="POST">
<table width="612" height="114" border="0">
<tr>
	<td><label for="txtcode">Code No:<font color="#FF0000">*</font></label></td>
      <td><input type="text" name="txtcode" id="txtcode" required="required" /></td>
</tr>
  <tr>
    <td><label for="txtname">Company Name:<font color="#FF0000">*</font></label></td>
    <td><input type="text" name="txtcname" id="txtname" onchange="vname()" required /></td>
  </tr>
   <tr>
    <td><label for="txtaddress">Address:<font color="#FF0000">*</font></label></td>
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
   	<td>Bank Account No:<font color="#FF0000">*</font></td>
    <td><input type="text" name="txtacc" onkeypress="return onlyNos(event,this);" /></td>
  </tr>
  <tr>
    <td><label for="txtphone">Office Ph No.:</label></td>
    <td><input type="text" name="txtresphone" id="txtoffice" onchange="officeNumber()" /></td>
  </tr>
    <tr>
    	<td><label for="txtphone">Mobile No:<font color="#FF0000">*</font></label></td>
     	<td><input type="text" name="txtcmob" id="txtphone" required="required" onchange="mobileNumber()" /></td>
  </tr>
  <tr>
  	<td><label for="txtcemail">Email ID:<font color="#FF0000">*</font></label></td>
    <td><input type="email" name="txtcemail" id="txtemail" required onchange="vemail()"/></td>
  </tr>  
  </table>
  <p>&nbsp;</p>
<p>&nbsp;</p>
<p><u><strong>Please enter your RPS username and password:</strong></u><strong>.</strong></p>
<p>&nbsp;</p>
<table width="610" border="0">
  <tr>
  	<td width="200"><label for="txtuser">Username:<font color="#FF0000">*</font></label></td>
    <td width="600"><input type="text" name="txtuser" id="txtuser" required onChange="vname()"/></td>
  </tr>
  <tr>
  	<td><label for="txtpwd">Password:<font color="#FF0000">*</font></label></td>
    <td><input type="password" name="txtpwd" id="txtpwd" required/></td>
  </tr>
  <tr>
  	<td><label for="txtcpwd">Confirm password:<font color="#FF0000">*</font></label></td>
    <td><input type="password" name="txtcpwd" id="txtcpwd" required="required" onChange="checkpass()"/></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="0">
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
      <input type="submit" name="btncreate" id="button" value="Create my account" class="btn btn-primary" />&nbsp;&nbsp;
      <input type="reset"  value="Cancel" class="btn btn-primary" />
    </td>
  </tr>
</table>
</form>
<p>&nbsp;</p>
</div>

</div>
<div class="content-right">
<div class="mainmenu">
<h2 class="sidebar1">Useful Links</h2>
<ul>
  <li><a href="Services.php" target="_blank">Services</a></li>
  <li><a href="Events.php" target="_blank">Events</a></li>
  <li><a href="Schemes.php" target="_blank">Schemes</a></li>
</ul>
</div>
<div class="contact">
<h2 class="sidebar2">Contact</h2>
<div class="contact-detail">
<p class="green"><strong>RPS System ,Ramapuram</strong></p>
<p><strong>Adress :</strong>&nbsp; RPS <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ramapuram<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerala<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;India
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p><strong>E-mail :</strong> &nbsp;&nbsp;rpssystem@gmail.com
</p>
<p><strong>Phone :</strong> &nbsp;&nbsp;04822-260011<br>
</p>
</div>
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
if($_POST)
{
	 require_once("db.php");	 
	 if($_POST['btncreate']=="Create my account")
	 {
		 $code=$_POST['txtcode'];
		 $name=$_POST['txtcname'];
		 $address=$_POST['txtaddresss'];
		 $place=$_POST['txtcplace'];
		 $dist=$_POST['txtcdistrict'];
		 $acc=$_POST['txtacc'];
		 $rph=$_POST['txtresphone'];
		 $mph=$_POST['txtcmob'];
		 $email=$_POST['txtcemail'];
		 $type=3;	
		$un=$_POST['txtuser'];
		$pwd=$_POST['txtpwd']; 
		$status=0;
		 
		$sql="insert into tbl_personaldetails(`code_no`,`name`,`address`,`place`,`district`,`acc_no`,`res_no`,`mob_no`,`email`,`type`) values($code,'$name','$address','$place','$dist',$acc,$rph,$mph,'$email',$type)";
		$result=mysql_query($sql);
		if($result>0)
		{
			$sql2="insert into tbl_login(username,code_no,type,password,status) values('$un',$code,$type,'$pwd',$status)";
			$result2=mysql_query($sql2);
			if($result2>0)
			{
				echo "<script>alert('Sucessfully inserted!! Please wait till confirmation')</script>";
				header("location:index.php");
			}
			else
				echo "<script>alert('Insertion Failed to tbl_login!!')</script>";
		}
		else
			echo "<script>alert('Insertion Failed to tbl_personaldetails!!')</script>";
	 }
}
?>