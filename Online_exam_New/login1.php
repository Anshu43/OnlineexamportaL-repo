<?php
session_start();
error_reporting(1);
?>

<html>
<head>
<title> Area Online Exam </title>
<link href="./quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("nav1.php");
include("database.php");
extract($_POST);
if(isset($submit))
{
	include("database.php");
        $query="select * from mst_user where login='$loginid' and pass='$pass'";
        $v= mysqli_query($cn, $query) or die(mysqli_error($cn));
        $_SESSION["lid"]=$loginid;
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
<h1 class='style8' align=center> Online Exam portal</h1>
<div  style="margin:auto;width:50%;height:250px;box-shadow:2px 1px 2px 2px #800000;text-align:left;"><table width="28%"  border="0" align="center">
<tr>
    <td width="7%" height="65" valign="bottom"><img src="images/anu.png" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Choose subject </a></td>
</tr>
<td height="20"></td>
<tr>
<td  align="center" height="58" valign="bottom"><a href="result.php" class="style4"><img src="images/anu2.png" width="100" height="65" align="absmiddle"</a></td>
</tr>
</table></div>
</body>
</html>
