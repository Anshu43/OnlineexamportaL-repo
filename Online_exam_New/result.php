<?php
session_start();
?>

<html>
<head>
<title>Online Quiz  - Result </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("nav1.php");
include("database.php");
extract($_SESSION);
$query="select t.test_name,t.total_que,r.score from mst_test t, mst_result r where t.test_id=r.test_id and r.login='$_SESSION[lid]'";
$rs= mysqli_query($cn, $query) or die(mysqli_error($cn));
echo "<h1 class=head1> Result </h1>";
if(mysqli_num_rows($rs)<1)
{
	echo "<br><br><h1 class=head1> You have not given any quiz</h1>";
	exit;
}
echo "<table border=1 align=center><tr class=style2><td width=300>Test Name <td> Total<br> Question <td> Score";
while($row=mysqli_fetch_row($rs))
{
echo "<tr class=style8><td>$row[0] <td align=center> $row[1] <td align=center> $row[2]";
}
echo "</table>";
?>
</body>
</html>
