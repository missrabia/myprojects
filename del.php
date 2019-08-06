<?php
include "connect.php";
//if($Email!=NULL)
$email=$_REQUEST['Email'];
mysql_query("Delete from contact where Email='$email'");
mysql_query("Delete from cell where email='$email'");
header("location:welcom.php");

?>