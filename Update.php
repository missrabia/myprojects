<?php
include("connect.php");
if(isset($_POST['update'])){
$Email=$_POST['Email'];
$Name=$_POST['name'];
$fbid=$_POST['fbid'];
$address=$_POST['address'];

mysql_query("UPDATE contact SET Name='$Name',FBid='$fbid',Address='$address' where Email='$Email'");
}
?>
<html>
<head>
<title>Update</title>
</head>
<body bgcolor="FF0099" style="color:#FFFFFF">
<table align="center" border="1px" bgcolor="1AA609" style="margin-top:100px; color:#FFFFFF;">
<form action="Update.php" method="post">
<h1 align="center">Phone Book | Update contact....<img src="user.jpg" style="border-radius:50px/50px"></h1>
<tr>
<td>
Email:</td><td><input type="email" name="Email">
</td>
</tr>
<tr>
<td>
Name:</td><td><input type="name" name="name">
</td>
</tr>
<tr>
<td>
FB_Id:</td><td><input type="text" name="fbid">
</td>
</tr>
<tr>
<td>
Address:</td><td><input type="text" name="address">
</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="submit" name="update" value="Update" style="background:white; width:100px; cursor:pointer"></td>
</tr>
</form>
</table>
</body>
</html>
