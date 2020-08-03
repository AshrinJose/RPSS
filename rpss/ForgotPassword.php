<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<h1 class="title"><span>Change Password</span></h1>
</div>
<h4 class="title">&nbsp;</h4>
<form action="ForgotPassword.php" method="POST">
 <table align="center" border="0" >
 <tr>
 	<td width="100"><label for="txtuser">Username:</label></td>
    <td><input type="text" name="txtuser" id="txtuser" class="form-control" placeholder="Username" required="required"/></td>
 </tr>
 <tr>
 	<td ><label for="txtemail">Email ID:</label></td>
    <td><input type="text" name="txtemail" id="txtemail" class="form-control" placeholder="Email Id" required="required"/></td>
 </tr>
 <tr>
 	  <td><label for="txtcode">Code No:</label></td>
      <td><input type="text" name="txtcode" id="txtcode" class="form-control" placeholder="Code No" required="required" /></td>
      </tr>
 </table><br />
<table align="center">
 <tr>
    <td>
      <input type="submit" name="btnsubmit" id="button" value="Get New Password" class="btn btn-primary" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      <input type="reset"  value="Cancel" class="btn btn-primary" />
    </td>
  </tr>
 </table>
</form>
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
	 if($_POST['btnsubmit']=="Get New Password")
	 {
		$un=$_POST['txtuser'];
		$mail=$_POST['txtemail'];  
		$code_no=$_POST['txtcode'];
		$sql= "select tbl_personaldetails.code_no,email,username from tbl_personaldetails,tbl_login where tbl_personaldetails.code_no=tbl_login.code_no";
		$result=mysql_query($sql);
		if (false === $result)
		 {
    		echo mysql_error();
		}
		if($result>0)
		{
		while($row=mysql_fetch_array($result))
		{
			$user=$row["username"];
			$code=$row['code_no'];
			$email=$row["email"];
			if($code==$code_no && $email==$mail && $user==$un)
				header("location:ChangePassword.php");
		}
		}
		//else
			//echo "<script>alert('Please enter correct details');</script>";
	 }
}
?>