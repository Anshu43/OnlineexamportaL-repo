<?php
include("header.php");
?>
<?php
session_start();
?>
<html>
<head>
<title>Welcome to Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="./quiz.css" rel="stylesheet" type="text/css">
</head>
<style>
    
    .ub{
        font-size: 15px;
        font-style: italic;
        font-weight: bold;
        color: black;
        
    } 
     .ub1{
        font-size: 25px;
        font-style: italic;
        font-weight: bold;
        color: black;
        
    } 
     .ug{
        font-size: 20px;
        font-weight: bold;
        color: black;
        
    } 
</style>

<body>

<table width="100%" border="0">
 <tr><td height="20"></td></tr>
    <tr>
    <td width="50%" height="25">&nbsp;</td>
    <td width="1%" rowspan="10" bgcolor="#800000"><span class="style6"></span></td>
     <td width="50%"></td>
  </tr>
  <tr>
    <td height="296" valign="top"><div align="center">
        <h1 class="style8">INSTRUCTION:</h1>
    
        
<p align="left" class="style5"></p>
      <blockquote>
          <p align="left" class="style5"><span class="ug">Welcome to Online 
                  exam.You need to login for the take the online exam.<br>
                  Steps For Accessing Your Exam Online:<br>
                  1.Close all programs, including email<br>
                  2.Enter the LoginId and Password provided from The College<br>
                  3.Click Log in To Exam at the left of the screen.<br>
                  4.To begin the exam, click on the link to the appropriate exam listed under Online Assessments.
                  
                  <h1 class="style8">
                      During the exam:</br></h1>
                  <p  align="left" class="ug">
                      1.The student may not use his or her textbook, course notes, or receive help from a proctor or any other outside source.<br>
                      2.Students not stop the session and then return to it. This is especially important in the online environment where the system will, "time-out" and not allow the student to re-enter the exam site.<BR>
                  </p>   
                   
              <br></span></p>
      </blockquote>
    </div></td>
    <td valign="top">
        <table>
        <tr>
            <td height="60"></td>
        </tr>
        </table>
          <div  style="margin:auto;width:50%;height:250px;box-shadow:2px 1px 2px 2px #800000;text-align:left;">
              <form name="form1" method="post" action="login1.php">
                
           <table width="100" border="0" align="center">
            <tr> <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr> <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr> <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td width="600"><span class="ub1">Student login </span></td>
            </tr>  
             <tr> <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
          <td width="600"><span class="ub">Login ID </span></td>
          <td><input name="loginid" placeholder="Enter login id" type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td><span class="ub">Password</span></td>
          <td><input name="pass"  placeholder="Enter password" type="password" id="pass2"></td>
        </tr>
       <tr> <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit" id="submit" value="Login">		  </td>
        </tr>
       
      </table>
      
    </form>
</td>
  </tr>
</table>
<?php
//include("footer.php");
?>
</body>

</html>
