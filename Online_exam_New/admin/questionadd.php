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
if (!isset($_SESSION[alogin]))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
echo "<BR><h3 class=head1>Add Question </h3>";
if($_POST[submit]=='Save' || strlen($_POST['testid'])>0 )
{
extract($_POST);
$user_query="insert into mst_question(test_id,que_desc,ans1,ans2,ans3,ans4,true_ans) values ('$testid','$addque','$ans1','$ans2','$ans3','$ans4','$anstrue')";
$user_registration_submit = mysqli_query($con, $user_query) or die(mysqli_error($con));
echo "<p align=center>Question Added Successfully.</p>";
unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.addque.value;
if (mt.length<1) {
alert("Please Enter Question");
document.form1.addque.focus();
return false;
}
a1=document.form1.ans1.value;
if(a1.length<1) {
alert("Please Enter Answer1");
document.form1.ans1.focus();
return false;
}
a2=document.form1.ans2.value;
if(a1.length<1) {
alert("Please Enter Answer2");
document.form1.ans2.focus();
return false;
}
a3=document.form1.ans3.value;
if(a3.length<1) {
alert("Please Enter Answer3");
document.form1.ans3.focus();
return false;
}
a4=document.form1.ans4.value;
if(a4.length<1) {
alert("Please Enter Answer4");
document.form1.ans4.focus();
return false;
}
at=document.form1.anstrue.value;
if(at.length<1) {
alert("Please Enter True Answer");
document.form1.anstrue.focus();
return false;
}
return true;
}
</script>

<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left" id="bg1">
<form name="form1" method="post" onSubmit="return check();">
  <table width="80%"  border="0" align="center">
        <tr><td height="50"></td></tr>
    <tr>
      <td width="24%" height="32"><div align="left" style="color: white"><strong>Select Test Name </strong></div></td>
      <td width="1%" height="5">  
      <td width="75%" height="32"><select name="testid" id="testid">
<?php


$rs="Select * from mst_test order by test_name";
$u = mysqli_query($con, $rs) or die(mysqli_error($con));
	  while($row=mysqli_fetch_array($u))
{
if($row[0]==$testid)
{
echo "<option value='$row[0]' selected>$row[2]</option>";
}
else
{
echo "<option value='$row[0]'>$row[2]</option>";
}
}
?>
      </select>
        
    <tr>
        <td height="26"><div align="left" style="color: white"><strong> Enter Question </strong></div></td>
        <td>&nbsp;</td>
	    <td><textarea name="addque" placeholder=" Enter question" cols="60" rows="2" id="addque"></textarea></td>
    </tr>
    <tr>
      <td height="26"><div align="left" style="color: white"><strong>Enter Answer1 </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="ans1"  placeholder=" Enter option 1" type="text" id="ans1" size="40" maxlength="40"></td>
    </tr>
    <tr>
        <td height="26"><div align="left" style="color: white"><strong>Enter Answer2 </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="ans2"  placeholder=" Enter option 2" type="text" id="ans2" size="40" maxlength="40"></td>
    </tr>
    <tr>
        <td height="26"><div align="left" style="color: white"><strong>Enter Answer3 </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="ans3"  placeholder=" Enter option 3" `type="text" id="ans3" size="40" maxlength="40"></td>
    </tr>
    <tr>
        <td height="26"><div align="left" style="color: white"><strong>Enter Answer4</strong></div></td>
      <td>&nbsp;</td>
      <td><input name="ans4"  placeholder=" Enter option 4" type="text" id="ans4" size="40" maxlength="40"></td>
    </tr>
    <tr>
        <td height="26"><div align="left" style="color: white"><strong>Enter True Answer </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="anstrue"  placeholder=" Enter correct option no." type="text" id="anstrue" size="40" maxlength="40"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Add question" ></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</div>