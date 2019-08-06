<?php

?>
<html>
<head>
<title>Add contact</title>
</head>
<body bgcolor="72F921">
<h2 align="center">Add Contact.....<img src="contact.jpg" style="border-radius:50px/50px"/></h2>
<form action="phone.php" method="post">
<table width="200" align="center" border="2px" bgcolor="#FF0000" style="color:#FFFFFF;">
  <tr>
    <th scope="row">Name</th>
    <td><input type="text" name="name" required></td>
  </tr>
  <tr>
    <th scope="row">Email</th>
    <td><input type="email" name="email" required></td>
	
  </tr>
  <tr>
    <th scope="row">FB Id</th>
    <td><input type="text" name="fbid" required></td>
  </tr>
  <tr>
    <th scope="row">Address</th>
    <td><textarea name="address"></textarea></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td><input type="submit" value="Next" name="sub1" style="background:white; width:100px; cursor:pointer"></td>
  </tr>
</table>
</form>
</body>
</html>