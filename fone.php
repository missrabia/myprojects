<?php //for add fone
if(isset($_POST['sub2']))
{
include ('connect.php');
$p1=$_POST['p1'];
$email=$_POST['email'];
//$p3=$_POST['p3'];
if(mysql_query("insert into cell(email,phone)values('$email','$p1')"))
{
include ('phone.php');
exit();
}
//,('$email','$p2'),('$email','$p3')");
//header( 'Location:welcom.php');
}
?>