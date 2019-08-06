<?php session_start();
$UN=$_SESSION['User'];
if($UN==NULL)
{
header("location:index.php");
}
include "connect.php";


?>
<html>
<head>
<title>Welcome</title>
</head>
<body bgcolor="#FFFF00">
<p style="margin-top:30px;">
<center>
<img src="welcome.gif" /><?php echo $UN; ?>
</p></center>
<table align="center" width="75%" border="1" bgcolor="#FF0066" style="color:white; text-align:center">
<tr bgcolor="#0066CC">
<th>Name</th>
<th>Email</th>
<th>FB_id</th>
<th>Address</th>
<th>Phone</th>
</tr>
<form action="view.php" method="post">
<input type="text" name="search">
<input type="submit" value="Search" name="submit">
</form>
<br>
<br>
<?php
if(isset($_POST['submit']))
{
$srch=$_POST['search'];
}
if(!empty($srch))
{
if($srch!=NULL)
  {
  
$query=mysql_query("select contact.Name,contact.Email,contact.FBid,contact.Address,cell.phone from contact inner join cell on contact.Email=cell.Email where Name='$srch'");
while($ary=mysql_fetch_array($query))
{
echo "<tr><td>";
echo $ary[0];
echo "</td><td>";
echo $ary[1];
echo "</td><td>";
echo $ary[2];
echo "</td><td>";
echo $ary[3];
echo "</td><td>";
echo $ary[4];
echo "</td></tr>";

}

   }
}
else
{
$query=mysql_query("select distinct contact.Name,contact.Email,contact.FBid,contact.Address,cell.phone from contact inner join cell on contact.Email=cell.Email ");
while($ary=mysql_fetch_array($query))
{
echo "<tr><td>";
echo $ary[0];
echo "</td><td>";
echo $ary[1];
echo "</td><td>";
echo $ary[2];
echo "</td><td>";
echo $ary[3];
echo "</td><td>";
echo $ary[4];
echo "</td></tr>";

}

}

?>
</table>
</body>
</html>