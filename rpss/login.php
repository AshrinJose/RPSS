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
  <link href="css/style2.css" rel="stylesheet" type="text/css">  
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
</div>
</div>
<div class="content">
<div class="content-left">
<div class="row1">
</br>
<h1 class="title"><span>Login</span></h1>
</div>
<div class="row2">
<div id="errorBox"></div>
<form action='login.php' method='POST'>
 <table width="300" border="0" align="center" cellspacing="10">
  <tr>
    <td>Username:</td>&nbsp;&nbsp;&nbsp;&nbsp;
    <td><input type="text" name="username" id="txtname" width="50" required  placeholder="username"  class="form-control"
     onChange="vname()" /></td>
  </tr> 
  <tr>
    <td>Password:</td>&nbsp;&nbsp;&nbsp;
    <td><input type="password"  name="password" required placeholder="password"  class="form-control" /></td>
  </tr>
  <tr>
    <td></td>
    <td><input type='submit' name='btnsubmit' value="Login" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" class="btn btn-primary"></td>
  </tr>
 </table>
</form>
<table align="center">
<tr><td>
<a href="ForgotPassword.php" class="forgot-password">Forgot password?</a></p><br /></td>
</tr>
</table>
 <br />
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
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if($_POST)
{
	 require_once("db.php");	 
	 if($_POST['btnsubmit']=="Login")
	 {
		$un=$_POST['username'];
		$pwd=$_POST['password'];  
		$sql= mysql_query("select * from tbl_login where username='$un' and password='$pwd'");
		$numrows = mysql_num_rows($sql);
			if ($numrows!=0)
			{
				while ($row = mysql_fetch_assoc($sql))
				{
				$dbusername=$row['username'];
				$dbtype=$row['type'];
				$dbpassword=$row['password'];
				$dbstatus=$row['status'];
			}
			
			if($dbstatus==1)
			{
				if($un==$dbusername && $pwd==$dbpassword)
				{
					$_SESSION['user']=$un;
					if($dbtype==1)
					{
						$_SESSION['type']="Admin";
						header("location:admin/AdminHome.php");						
					}
					else if($dbtype==2)
					{
						$_SESSION['type']="Member";
						header("location:member/MemberHome.php");
					}
					else 
					{
						$_SESSION['type']="Company";
						header("location:company/CompanyHome.php");
					}
				}
				else					                   
					
					echo "<script type='text/javascript'>alert('Not a Registered Member!!..')</script>";
					        
			}
			else                   
				
				echo "<script type='text/javascript'>alert('Login Failed..."." "."Your account is not activated!!..')</script>";
		}
		else
		 		
				echo "<script type='text/javascript'>alert('Login Failed....Not a Registered Member')</script>";
	}
}
			
?>
