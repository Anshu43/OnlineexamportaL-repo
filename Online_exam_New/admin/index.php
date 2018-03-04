<?php
session_start()
?>


<html>
<head>
<title>Administrative Login</title>
<link href="../quiz.css" rel="stylesheet" type="text/css">   
</head>


<body>
<?php

include("header.php");
?><table>
        <tr>
            <td height="60"></td>
        </tr>
        </table>
    <div  style="margin:auto;width:50%;height:400px;box-shadow:2px 1px 2px 2px #800000;text-align:left" id="bg1">
<center><p class="head2"><h1>Administrator Login</h1> </p></center>

    
<form name="form1" method="post" action="anshul.php">
<table  width="400" border="1" align="center">
  <tr>
    <td width="180">
    <table width="250" border="0" align="center">
         <tr>
      <td width="100" class="style1"><span class="glyphicons glyphicons-user"></span>Login ID </td>
      <td width="149"><input name="loginid" type="text" id="loginid" required="true"></td>
        </tr>
        <tr>
            <td height="10"></td>
        </tr>
        <tr>
          <td class="style1">Password</td>
          <td><input name="pass" type="password" id="pass" required="true"></td>
        </tr>
    <tr>
    <td class="style1">School name</td>
    <td><input name="sname" type="sname" id="sname" required="true"></td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td><input name="submit" type="submit" id="submit" value="Submit"></td>
  </tr>
</table></td>
  </tr>
</table>

</form>
   
</div>
</body>
    <?php
include("footer.php");
?>
</html>
