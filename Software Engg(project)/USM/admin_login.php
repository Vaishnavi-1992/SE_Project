<html>
<html>
<?php
include "db_connect.php";
	   $link = connect();
session_start();
?>

<html>
<head>
<title>Admin</title>

</head>
<style>
a:visited {
    color: black;
}
.img-circle
{
        border-radius: 30%;
}
#background {
    width: 100%; 
    height: 100%; 
    position: fixed; 
    left: 0px; 
    top: 0px; 
    z-index: -1;
}

.stretch {
    width:100%;
    height:100%;
}
</style>
<body link="black">
<div id="background">
    <img src="Images/bkg4.jpg" class="stretch" alt="" />
</div>
<font color="black">
<center>
<div id="header">
  <div><h2><a href="home.php"><b><u>Go Back</u></b></a></h2></div>
  <div><h2 id="h2">Admin login</h2></div>
</div>
<form name="adminlogin" id="lform" method="POST" action="">
<div id="formdiv">
     <a href="admin_login.php" title="Admin Login"><img class="img-circle" src="Images/admin-icon.png" width="250" height="200"/></a><br/>	
     <div id="inputbox">
     <label for="a_key"><strong><h3>Key</h3></strong></label>
     <input type="password" class="box" name="password" value="Password" onclick="this.value='';" required/>
     </div>
	 <div id = "inputbox">
	 <br>
	 <input type="submit" name="submit" class="button" value ="Login">
	</div>
   </form>
   </div>

</center>
</body>
</html>
<center>
<?php

 if(isset($_POST['submit']))
 { $key = $_POST['password'];

	//echo $key;
    if($key != "12345")
    {
	$msg = "Invalid Key";
    }
   else
   {
	   $_SESSION['login_lev'] = '3';
	   $msg = "Successful Login"; 
	header('refresh:1;url=admin.php');
	   
   }
   if(isset($msg))
   {
   	   
   	   echo '<div id="msgdiv"><h3>'.$msg.'</h3></div>';
   }
 }

?>
</center>
