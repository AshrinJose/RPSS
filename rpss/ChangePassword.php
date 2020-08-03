<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script src="js/validation.js"></script>
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
    <td><input type="text" name="txtuser" id="txtuser" class="form-control" placeholder="Username" required="required"/></td>
</tr>
  <tr>
    <td>New Password:</td>
    <td><input type="password" name="txtpwd" id="txtnpwd" class="form-control" placeholder="New Password" required="required" /></td>
  </tr>
  <tr>
    <td>Confirm password:</td>
    <td><input type="password" name="txtcpwd" id="txtcpwd" class="form-control" placeholder="Confirm Password" required="required" onChange="checkpass()" /></td>
    <td>&nbsp;</td>
  </tr>

</table><br />
<table align="center">
  <tr>
    <td>
      <input type="submit" name="btnsubmit" id="button" value="Change Password" class="btn btn-primary" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      <input type="reset" name="btncancel" id="button3" value="Cancel" class="btn btn-primary" />
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
<p><strong>E-mail :</strong> &nbsp;&nbsp;&nbsp;rpssystem@gmail.com
</p>
<p><strong>Phone :</strong> &nbsp;&nbsp;&nbsp;04822-260011<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
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