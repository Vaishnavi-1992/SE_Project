<html>
<center>
<html>
<?php
include "db_connect.php";
	   $link = connect();
session_start();



?>

<head>

<title>View Course</title>

</head>

<style>
.img-circle
{
        border-radius: 50%;
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
<body link="white">
<div id="background">
    <img src="Images/bg2.jpg" class="stretch" alt="" />
</div>
<font color="white">    

<div id="header">
  <h2 id="h2">All Course</h2>
</div>

</body>
</html>

<?php
$query = mysqli_query($link,"select course_id,c_name,c_sem,c_cred from course  where c_teach ='".$_SESSION['user_id']."'");
$row_cnt = mysqli_num_rows($query);
		    if($row_cnt!=0)
		    {
echo "

<style>
table{

  color:white;
}
</style>


<table border='1'>
<tr>
<th>course_id</th>
<th>course name</th>
<th>course sem</th>
<th>course cred</th>
</tr>";
while($res = mysqli_fetch_array($query)){
	echo "<tr>";
  echo "<td>" . $res['course_id'] . "</td>";
  echo "<td>" . $res['c_name'] . "</td>";
  echo "<td>" . $res['c_sem'] . "</td>";
  echo "<td>" . $res['c_cred'] . "</td>";
  echo "</tr>";
	}
echo "</table>";
}else{echo "You are not teaching any course.";}
?>
</font>
</center>
