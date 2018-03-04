<?php
session_start();
?>
<?php
include("nav1.php");
include("database.php");
?>

<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<div  style="margin:auto;width:50%;height:500px;box-shadow:2px 1px 2px 2px #800000;text-align:left;">
<?php
echo "<h2 class=head1> Select Subject For Exam </h2>";
$rs="select * from mst_subject";
$v= mysqli_query($cn, $rs)or die(mysqli_error($cn));
echo "<table align=center>";
while($row=mysqli_fetch_row($v))
{
	echo "<tr><td align=center ><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
}
echo "</table>";

?>
   </div>
</body>
</html>
