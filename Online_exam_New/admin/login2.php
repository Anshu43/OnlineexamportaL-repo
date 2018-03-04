<?php
session_start();
error_reporting(1);
?>

<html>
<head>
<title>Adminstrative AreaOnline Quiz </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style>
 #bg1{background-color: rgba(0,0,0,0.7)}
.style12{color: #FFFFFF}
</style>
</head>
<body>
<?php
include("nav1.php");
extract($_POST);
//if($_SERVER['REQUEST_METHOD']=='POST')

if(isset($submit))
{
	include("../database.php");
	$query="select * from mst_admin where loginid='$loginid' and pass='$pass' and sname='$sname'";
        $v = mysqli_query($cn, $query) or die(mysqli_error($cn));
        $_SESSION["lid"]=$loginid;
        $_SESSION["sname"]=$sname;
	if(mysqli_num_rows($v)<1)
	{
		echo "<BR><BR><BR><BR><div class=head1> Invalid User Name or Password<br>Click here to <a href=index.php>Login</a><div>";
		exit;
		
	}
	$_SESSION['alogin']="true";
	
}

else if(!isset($_SESSION[alogin]))
{
	echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div>";
		exit;
}
?>

<p class="head1">Welcome to Admistrative Area </p>
 
<div align="center" style="margin:auto;width:50%;height:400px;box-shadow:2px 1px 2px 2px #800000;text-align:left" id="bg1">
 
<div style="margin-left:20%;padding-top:5%">
    <p style="color:#ffffff"># <a href="subadd.php" style="color:#ffffff"> Add Subject</a></p>
    <p style="color:#ffffff"># <a href="testadd.php" style="color:#ffffff"> Add Test</a></p>
    <p style="color:#ffffff"># <a href="questionadd.php" style="color:#ffffff"> Add Question </a></p>
    <p style="color:#ffffff"># <a href="KANSH.php" style="color:#ffffff"> Add Another Admin </a></p>
    <p style="color:#ffffff"># <a href="signup.php" style="color:#ffffff"> Register a Student </a></p>
    <p align="center" class="head1">&nbsp;</p>
</div>
</div>
</body>
</html>
