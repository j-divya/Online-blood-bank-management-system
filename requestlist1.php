<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
<style>
h3
{
	color:white;
}
h4
{
	color:white;
}
body {
  
  
  color:yellow;
}
</style>
</head>
<body background="bb2.jpg">
<br><br><br>
<h1><center>BLOOD BANK AND BLOOD DONOR-ADMIN PANEL</center></h1><br><br>

<nav>
<ul>
<li><a href="admin.php"><pre>          HOME         </pre>
<li><a href="donor1.php"><pre>     ADD DONOR       </pre>
<li><a href="requestlist1.php"><pre>     REQUEST LIST     </pre>
<li><a href="donorlist1.php"><pre>       DONOR LIST        </pre>
<li><a href="deletelist.php"><pre>         DELETED ACCOUNT LIST        </pre>

<li><a href="aboutadmin.php"><pre>       MANAGE ABOUT US      </pre>
<li><a href="contactadmin.php"><pre>       MANAGE   CONTACT      </pre></a>
</ul>
</nav><br><br>
</center>
<center>
<h1 style="text-align:center" ><font color="lightgrey">REQUEST LIST</font></h1>
<CENTER>

<table  border="2">
<th>HOSPITAL NAME</th>
<th>HOSPIAL ID</th>
<th>PATEIENT NAME</th>
<th>BLOOD GROUP</th>
<th>GENDER</th>
<th>AGE</th>
<th>REQUIRED TILL DATE</th>
<th>PHONE NUMBER</th>
<th>ADDRESS</th>
<th>CITY</th>
<th>STATE</th>
<th>PINCODE</th>
<?php

	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"bloodbank");
	mysqli_query($link,"delete  from  request where date1<SYSDATE()");
	$res=mysqli_query($link,"select * from  request");
	while($row=mysqli_fetch_array($res))
	{
		echo '<tr>';
		echo '<td>'.$row['hosname'].'</td>';
		echo '<td>'.$row['hosid'].'</td>';
		echo '<td>'.$row['patname'].'</td>';
		echo '<td>'.$row['bloodgroup'].'</td>';
		echo '<td>'.$row['gender'].'</td>';
		echo '<td>'.$row['age'].'</td>';
			echo '<td>'.$row['date1'].'</td>';
		echo '<td>'.$row['phoneno'].'</td>';
		echo '<td>'.$row['address'].'</td>';
		echo '<td>'.$row['city'].'</td>';
		echo '<td>'.$row['state'].'</td>';
		echo '<td>'.$row['pincode'].'</td>';
		echo '</tr>';
	}

?>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</center>
<footer><center>
<P>COPYRIGHTS 2017..ALL RIGHT RESERVED</p>

</footer>
</body>
</html>