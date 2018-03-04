
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
$rs="select * from mst_user where login='$lid'";
$u = mysqli_query($con, $rs) or die(mysqli_error($con));
if (mysqli_num_rows($u)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already ExistsClick here to <a href=signup.php>Register Again</a></div>";
	exit;
}
$user_registration_query = "insert into mst_user(login,pass,username,address,city,phone,email) values('$lid','$pass','$name','$address','$city','$phone','$email')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
//echo "User successfully inserted";
//echo "Go to Login Page ";
echo '<br><br><br><i style="color:black;font-size:50px;text-align:center">User Added Successfully</i><BR><BR><BR>';
echo '<i style="color:black;font-size:50px;text-align:center">Click here to <a href=anshul.php style="color:red">Admin home</a> </i><BR><BR><BR>';
echo '<i style="color:black;font-size:50px;text-align:center">Click here to <a href=akshay.php style="color:red">logout</a> </i><BR><BR><BR>';

?>
</body>
</html>
