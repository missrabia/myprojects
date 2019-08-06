<?php session_start();
$UN=$_SESSION['User'];
if($UN==NULL)
{
header("location:index.php");
}
?>
<html>
<head>
<title>Welcome</title>
</head>
<body bgcolor="#FFFF00">
<p style="margin-top:30px;">
<center>
<img src="welcome.gif" /><?php echo $UN; ?>
</p>
<table width="90%" border="2" bgcolor="#9900CC" >
  <tr>
    <td bgcolor="#FF0000"><a href="add.php" style="color:#FFFFFF">Add</a></td>
    <td bgcolor="#006600"><a href="view.php" style="color:#FFFFFF">View</a></td>
    <td bgcolor="#9900CC"><a href="delete.php" style="color:#FFFFFF">Delete</a></td>
    <td bgcolor="#0000FF"><a href="Update.php" style="color:#FFFFFF">Update</a></td>
    <td bgcolor="#FF3300"><a href="view.php" style="color:#FFFFFF">Search</a></td>
	<td bgcolor="#0099CC"><a href="logout.php" style="color:#FFFFFF">Logout</a></td>
  </tr>
</table>
</center>

</body>
</html>