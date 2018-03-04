<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "quiz_new") or die(mysqli_error($con));
include("nav1.php");
error_reporting(1);
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<style>#bg1{background-color: rgba(0,0,0,.7)}</style>
<?php

extract($_POST);

echo "<BR>";
if (!isset($_SESSION['alogin']))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
echo "<BR><h3 class=head1>Subject Add </h3>";

echo "<table width=100%>";
echo "<tr><td align=center></table>";
if($submit=='submit' || strlen($subname)>0 )
{
$rs="select * from mst_subject where sub_name='$subname'";
$u = mysqli_query($con, $rs) or die(mysqli_error($con));
if (mysqli_num_rows($u)>0)
{
	echo "<br><br><br><div class=head1>Subject is Already Exists</div>";
	exit;
}
$user_query="insert into mst_subject(sub_name) values ('$subname')";
$user_registration_submit = mysqli_query($con, $user_query) or die(mysqli_error($con));
echo "<p align=center>Subject  <b> \"$subname \"</b> Added Successfully.</p>";
$submit="";
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.subname.value;
if (mt.length<1) {
alert("Please Enter Subject Name");
document.form1.subname.focus();
return false;
}
return true;
}
</script>

<div  style="margin:auto;width:55%;height:300px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left" id="bg1">
<title>Add Subject</title>
<form name="form1" method="post" onSubmit="return check();">
  <table width="41%"  border="0" align="center">
      <tr><td height="100"></td></tr>
      <tr></tr><tr></tr><tr></tr>
      <tr>
      <td width="45%" height="32"><div align="center" style="color: white"><strong>Enter Subject Name </strong></div></td>
      <td width="2%" height="5">  
      <td width="53%" height="32">
        <input name="subname" placeholder="SUBJECT NAME" type="text" id="subname">
    <tr>
        <td height="26"> </td>
        <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Add" ></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</div>