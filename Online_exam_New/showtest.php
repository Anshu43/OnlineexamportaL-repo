<?php
session_start();
?>
<?php
include("nav1.php");
include("database.php");
?>

<html>
<head>
<title>Online Quiz - Test List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<div  style="margin:auto;width:50%;height:500px;box-shadow:2px 1px 2px 2px #800000;text-align:left;">
<?php
extract($_GET);
$rs1="select * from mst_subject where sub_id=$subid";
$v= mysqli_query($cn, $rs1)or die(mysqli_error($cn));
$row1=mysqli_fetch_array($v);
echo "<h1 align=center><font color=blue> $row1[1]</font></h1>";
$rs="select * from mst_test where sub_id=$subid";
$u= mysqli_query($cn, $rs)or die(mysqli_error($cn));
if(mysqli_num_rows($u)<1)
{
	echo "<br><br><h2 class=head1> No Exam For this Subject </h2>";
	exit;
}
echo "<h2 class=head1> Select Quiz Name to Give Quiz </h2>";
echo "<table align=center>";

while($row=mysqli_fetch_row($u))
{
	echo "<tr><td align=center ><a href=exam.php?testid=$row[0]&subid=$subid><font size=4>$row[2]</font></a>";
}
echo "</table>";
?>
</div>
</body>
</html>
