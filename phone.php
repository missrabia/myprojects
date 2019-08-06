<?php
//for add contact
if(isset($_POST['sub1']))
{
include ('connect.php');
$name=$_POST['name'];
$email=$_POST['email'];
$fbid=$_POST['fbid'];
$address=$_POST['address'];
mysql_query("insert into contact(Name,Email,FBid,Address)values('$name','$email','$fbid','$address')");
//mysql_query("insert into cell(email,phone)values('$email','')");
//header( 'Location:phone.php');
}
?>
<html>
<head>
<title>Phone</title>
</head>
<body bgcolor="AF00E2" style="color:#FFFFFF">
<form action="fone.php" method="post">
<h2 align="center">Add Phone NO.....<img src="phone.jpg" style="border-radius:50px/50px"></h2>
<table width="200" align="center" border="2px" bgcolor="FF1D00">
<tr>
    <th scope="row">Email</th>
    <td>
	<input type="text" name="email" readonly value="<?php echo $email;?>">
	</td>
  </tr>
  <tr>
    <th scope="row">Phone1:</th>
    <td><input type="text" name="p1" required></td>
  </tr>
<!--
  <tr>
    <th scope="row">Phone2:</th>
    <td><input type="text" name="p2" required></td>
  </tr>
  <tr>
    <th scope="row">Phone3:</th>
    <td><input type="text" name="p3" required></td>
  </tr>
  <tr>-->
    <th scope="row">&nbsp;</th>
    <td><input type="submit" value="Finish" name="sub2" style="background:white; width:100px; cursor:pointer"></td>
  </tr>
</table>
</form>
</body>
</html>
