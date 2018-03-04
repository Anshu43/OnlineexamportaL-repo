<?php
session_start();
error_reporting(1);
if (!isset($_SESSION['alogin']))
{
	echo "<br><h2>You are not Logged On Please Login to Access this Page</h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<style>#bg1{background-color: rgba(0,0,0,.7)}</style>
<?php
require("../database.php");

include("nav1.php");
 

echo "<br><h2><div  class=head1>Add Test</div></h2>";
if($_POST[submit]=='Save' || strlen($_POST['subid'])>0 )
{
extract($_POST);
$user_registration_query ="insert into mst_test(sub_id,test_name,total_que) values ('$subid','$testname','$totque')";
$user_registration_submit = mysqli_query($cn, $user_registration_query) or die(mysqli_error($cn));
echo "<p align=center>Test <b>\"$testname\"</b> Added Successfully.</p>";
unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.testname.value;
if (mt.length<1) {
alert("Please Enter Test Name");
document.form1.testname.focus();
return false;
}
tt=document.form1.totque.value;
if(tt.length<1) {
alert("Please Enter Total Question");
document.form1.totque.value;
return false;
}
return true;
}
</script>
<div  style="margin:auto;width:55%;height:350px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left" id="bg1">
<form name="form1" method="post" onSubmit="return check();">
  <table width="58%"  border="0" align="center">
      <tr><td height="100"></td></tr>
    <tr>
      <td width="49%" height="32"><div align="left" style="color: white"><strong>Enter Subject ID </strong></div></td>
      <td width="3%" height="5">  
      <td width="48%" height="32"><select name="subid">
<?php
$rs="Select * from mst_subject order by  sub_name";
$v= mysqli_query($cn, $rs) or die(mysqli_error($cn));
	  while($row=mysqli_fetch_array($v))
{
if($row[0]==$subid)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
?>
      </select>
        
    <tr>
        <td height="26"><div align="left" style="color: white"><strong> Enter Test Name </strong></div></td>
        <td>&nbsp;</td>
	  <td><input name="testname" placeholder="TEST NAME" type="text" id="testname"></td>
    </tr>
    <tr>
      <td height="26"><div align="left" style="color: white"><strong>Enter Total Question </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="totque"placeholder="TOTAL QUESTION" type="text" id="totque"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Add" ></td>
    </tr>
  </table>
</form>
</div>
<p>&nbsp; </p>
