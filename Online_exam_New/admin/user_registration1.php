<html>
<head>
<title>User Signup</title>
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
include("header.php");
$con = mysqli_connect("localhost", "root", "", "quiz_new") or die(mysqli_error($con));
extract($_POST);
$rs="select * from mst_admin where loginid='$lid'";
$u = mysqli_query($con, $rs) or die(mysqli_error($con));
if (mysqli_num_rows($u)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists Click here to <a href=KANSH.php>Signup</a></div>";
	exit;
}
$user_registration_query = "insert into mst_admin(loginid,pass,sname) values('$lid','$pass','$sname')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

echo '<br><br><br><i style="color:black;font-size:50px;text-align:center">Added Successfully</i><BR><BR><BR>';
echo '<i style="color:black;font-size:50px;text-align:center">Click here to <a href=anshul.php style="color:#000000">Admin home</a> </i>';
//echo "<BR><div class=head1>Click here to <a href=login2.php>Admin home</a></div>"
?>
</body>
</html>


