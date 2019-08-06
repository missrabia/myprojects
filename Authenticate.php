<?php session_start();

include('connect.php');
$UN=$_POST['UName'];
$Pas=$_POST['Password'];
//validation coding
/*if (empty($UN)) {
			$error = true;
			$nameError = "Please enter your full name.";
		} else if (strlen($name) < 3) {
			$error = true;
			$nameError = "Name must have atleat 3 characters.";
		} else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
			$error = true;
			$nameError = "Name must contain alphabets and space.";
		}
		
		if(empty($pas))
		{
			$error = true;
			$passError = "Please enter your password.";
		}*/
//login coding
$auth=NULL;
$rs=mysql_query("select * from user where Name='$UN' and Password='$Pas'");
while
($ary=mysql_fetch_array($rs))
{
$auth=$ary[0];
}

if($auth==NULL)
{
echo "<font color=red>Wrong username or Password</font>";
include"index.php";
//header( 'Location: index.php' );
}
else
{
  echo"Welcome";
  $_SESSION['User']=$UN;
header( 'Location:welcom.php');
}
?>
