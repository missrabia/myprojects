<?php
if(isset($_POST['sub']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$fbid=$_POST['fbid'];
$address=$_POST['address'];

mysql_query("insert into contact(Name,Email,FBid,Address)values('$name','$email','$fbid','$address')");
}
?>
