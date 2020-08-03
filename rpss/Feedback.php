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
<table width="623" height="48" border="0">
  <tr>
 	<td class="title"><span>Feedback</span></td>    
  </tr>
</table>
<p>&nbsp;</p>
<h4 class="title">&nbsp;</h4>
<p> <strong><u>Please enter your feedback:</u></strong></p>
<p>&nbsp;</p>
<form action="" method="post" onsubmit="return validate_form(this);">
<table width="400" align="center">
<tr>
	<td width="100"><label for="txtname">Name:</label></td>
    <td><input type="text" name="txtname" id="txtname" class="form-control" required="required" placeholder="Name"  onChange="vname()"/></td>
</tr>
<tr>
	<td><label for="txtemail">Email ID:</label></td>
    <td><input type="text" name="txtemail" id="txtemail" class="form-control" required="required" placeholder="Email Id"  onChange="vemail()"/></td>
</tr>
<tr>
	<td><label for="txtfeedback">Feedback:</label></td>
    <td><textarea name="txtfeedback" id="txtfeedback" cols="45" rows="5" required="required" placeholder="Feedback"  class="form-control1" ></textarea></td>
</tr>
</table><br />
<table align="center">
  <tr>
    <td>
      <input type="submit" name="btnsubmit" id="button" value="Submit" class="btn btn-primary" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      <input type="reset" value="Cancel" class="btn btn-primary" />
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
<p>&copy; Copyright 2010. Designed by <a target="_blank" href="http://www.htmltemplates.net">RPS System</a><br>
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
	 if($_POST['btnsubmit']=="Submit")
	 {
		 $name=$_POST['txtname'];
		 $email=$_POST['txtemail'];
		 $feedback=$_POST['txtfeedback'];
		 $sql="insert into tbl_feedback(name,email,feedback) values('$name','$email','$feedback')";
		 $result=mysql_query($sql);
		 if($result>0)
		 {
			 echo "<script>alert('Feedback Send!! Thank You..')</script>";
				header("location:index.php");
		 }
		 else
				echo "<script>alert('Failed to Send Feedback!!')</script>";
	 }
}
?>