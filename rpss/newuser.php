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
<!--<br /><label for="txtcode"><font color="#FF0000">*</font> Mandatory Fields</label><br />-->
<h4 class="title">&nbsp;</h4>
<p> <strong><u>Please enter your personal details:</u></strong></p>
<p>&nbsp;</p>

<form action="newuser.php" method="POST">
<table width="612" height="114" border="0">
<tr>
	<td><label for="txtcode">Code No:<font color="#FF0000">*</font></label></td>
      <td><input type="text" name="txtcode" id="txtcode" required="required" /></td>
</tr>
  <tr>
   <!-- <td width="161">Name:</td>
    <td width="441"><input type="text" name="textfield" id="textfield" required="required" />
      </td>-->
      <td><label for="txtname">Name:<font color="#FF0000">*</font></label></td>
      <td><input type="text" name="txtname" id="txtname" required="required" onchange="vname()"/></td>
  </tr>
  <tr>
    <td><label for="txtaddresss">Address:<font color="#FF0000">*</font></label></td>
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
   	<td><label for="txtacc">Bank Account No:<font color="#FF0000">*</font></label></td>
    <td><input type="text" name="txtacc" onkeypress="return onlyNos(event,this);" /></td>
  </tr>
  <tr>
    <td><label for="txtoffice">Residence Ph No.:</label></td>
    <td><input type="text" name="txtresphone" id="txtoffice" onchange="officeNumber()"  /></td>
  </tr>
  <tr>
    <td>Mobile Ph No.:<font color="#FF0000">*</font></td>
    <td><input type="text" name="txtmob" id="txtphone" required="required" onchange="mobileNumber()" /></td>
  </tr>
  <tr>
    <td>Email ID:<font color="#FF0000">*</font></td>
    <td><input type="text" name="txtemail" id="txtemail" required="required" onchange="vemail()" /></td>
  </tr>
</table>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong><u>Please enter your plantation details:</u></strong></p>
<p>&nbsp;</p>
<table width="611" border="0">
  <tr>
    <td width="161">Area of holdings(hectare):<font color="#FF0000">*</font></td>
    <td width="440"><select name="selectthectare" id="selectthectare" required="required">
    <option selected="selected">Select</option>
      <option value="1-25">1-25</option>
      <option value="25-30">25-30</option>
      <option value="30-40">30-40</option>
      <option value="40-50">40-50</option>
      <option value="50">above 50</option>      
    </select></td>
  </tr>
  <tr>
    <td>Location of holdings:<font color="#FF0000">*</font></td>
    <td><input type="text" name="txthloc" id="txtloc" required="required" /></td>
  </tr>
  <tr>
    <td>Place:<font color="#FF0000">*</font></td>
    <td><input type="text" name="txthplace" id="txtplace" required="required"  /></td>
  </tr>
  <tr>
    <td>District:<font color="#FF0000">*</font></td>
    <td><input type="text" name="txthdis" id="txtdis" required="required" /></td>
  </tr>
  
  <tr>
    <td>Clone:<font color="#FF0000">*</font></td>
    <td><select name="selectclone" id="selectclone" required="required">
    <option selected="selected">Select</option>
      <option value="RRIM 500">RRIM 500 (1928-1931)</option>
      <option value="RRIM 600">RRIM 600 (1937-1941)</option>
      <option value="RRIM 700">RRIM 700 (1947-1958)</option>
      <option value="RRIM 800">RRIM 800 (1959-1965)</option>
      <option value="RRIM 900">RRIM 900 (1966-1973)</option>
      <option value="RRIM 2000">RRIM 2000 (1974-TILL NOW)</option>       
    </select></td>
  </tr>
  <tr>
    <td>Tapping Year:<font color="#FF0000">*</font></td>
    <td><select name="selecttappingyr" id="selecttappingyr" required="required">
    <option selected="selected">Select</option>
      <option value="1990">before 1990</option>
      <option value="1991">1991</option>
      <option value="1992">1992</option>
      <option value="1993">1993</option>
      <option value="1994">1994</option>
      <option value="1995">1995 </option>
      <option value="1996">1996</option>
      <option value="1997">1997</option>
      <option value="1998">1998</option>
      <option value="1999">1999</option>
      <option value="2000">2000</option>
      <option value="2001">2001</option>
      <option value="2002">2002</option>
      <option value="2003">2003</option>
      <option value="2004">2004</option>
      <option value="2005">2005</option>
      <option value="2006">2006</option>
      <option value="2007">2007</option>
      <option value="2008">2008</option>
      <option value="2009">2009</option>
      <option value="2010">2010</option>
      <option value="2011">2011</option>
      <option value="2012">2012</option>
      <option value="2013">2013</option>
      <option value="2014">2014</option>
      <option value="2015">After 2015</option>      
    </select></td>
  </tr>
  <tr>
    <td>Tapping Panel:<font color="#FF0000">*</font></td>
    <td><input type="text" name="txtpanel" id="txtname" required="required"  onChange="vname()"/></td>
  </tr>
  <tr>
    <td>Tapping System:<font color="#FF0000">*</font></td>
    <td><input type="text" name="txtsystem" id="txtname" required="required"  onChange="vname()"/></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="272" border="0">
  <tr>
    <td width="161">Rain Guarding:<font color="#FF0000">*</font></td>
 <td><input type="radio" name="rdrainguard1" id="rdrainguard1" value="1" required="required" />
      Yes</td>
    <td><input type="radio" name="rdrainguard1" id="rdrainguard1" value="0" required="required" />      
      No</td>
    </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><u><strong>Please enter your RPS username and password:</strong></u></p>
<p>&nbsp;</p>
<table width="610" border="0">
  <tr>
    <td width="162">Username:<font color="#FF0000">*</font></td>
    <td width="234"><input type="text" name="txtuser" id="txtname" required="required"  onChange="vname()"/></td>
  </tr>
  <tr>
    <td>Password:<font color="#FF0000">*</font></td>
    <td><input type="password" name="txtpwd" id="txtpwd" required="required" /></td>
  </tr>
  <tr>
    <td>Confirm password:<font color="#FF0000">*</font></td>
    <td><input type="password" name="txtcpwd" id="txtcpwd" required="required" onChange="checkpass()" /></td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="608" border="0">
  <tr>
    <td width="234">
      <input type="submit" name="btncreate" id="button" value="Create my account" class="btn btn-primary" />&nbsp;&nbsp;
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
		 $name=$_POST['txtname'];
		 $address=$_POST['txtaddresss'];
		 $place=$_POST['txtcplace'];
		 $dist=$_POST['txtcdistrict'];
		 $acc=$_POST['txtacc'];
		 $rph=$_POST['txtresphone'];
		 $mph=$_POST['txtmob'];
		 $email=$_POST['txtemail'];
		 $type=2;
		 $selectOption = $_POST['selectthectare'];
		 $hloc=$_POST['txthloc'];
		 $hplace=$_POST['txthplace'];
		 $hdist=$_POST['txthdis'];
		 $clone=$_POST['selectclone'];
		 $tyr=$_POST['selecttappingyr'];
		 $tpanel=$_POST['txtpanel'];
		 $tsystem=$_POST['txtsystem'];
		 $raing=$_POST['rdrainguard1']; 		
		$un=$_POST['txtuser'];
		$pwd=$_POST['txtpwd']; 
		$status=0;
		 
		$sql="insert into tbl_personaldetails(`code_no`,`name`,`address`,`place`,`district`,`acc_no`,`res_no`,`mob_no`,`email`,`type`) values($code,'$name','$address','$place','$dist',$acc,$rph,$mph,'$email',$type)";
		$result=mysql_query($sql);
		
		if($result>0)
		{
			$sql1="insert into tbl_plantation(code_no,area,location,place,district,clone,tapping_yr,tapping_panel,tapping_system,rain_guard) values($code,'$selectOption','$hloc','$hplace','$hdist','$clone','$tyr','$tpanel','$tsystem',$raing)";
			$result1=mysql_query($sql1);
			if($result1>0)
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
				echo "<script>alert('Insertion Failed to tbl_plantation!!')</script>";
		}
		else
			echo "<script>alert('Insertion Failed to tbl_personaldetails!!')</script>";
	 }
}
?>
