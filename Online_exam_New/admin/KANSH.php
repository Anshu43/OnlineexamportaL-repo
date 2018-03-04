<?php
session_start()
?>
<html>
<head>
<title>New admin signup </title>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
 
  return true;
  }
  
</script>
<link href="quiz.css" rel="stylesheet" type="text/css">
<style>#bg1{background-color: rgba(0,0,0,.7)}</style>
</head>

<body>
<?php
include("nav1.php");
?><table>
    
         <tr><td height="100"></td></tr>
    
</table>
    <table width="100%" border="0" align="center">
        <tr>
            
             <td width="468" height="57"><h1 align="center"><span class="style8">New Admin Signup</span></h1></td>
        </tr>
    </table>
 <div style="margin:auto;width:50%;height:300px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left" id="bg1">
 <table width="100%" border="0">
   <tr>
   </tr>
   <tr>
       <td><form name="form1" method="post" action="user_registration1.php" onSubmit="return check();">
               <table width="301" border="0" align="center">
                   <tr><td height="60"></td></tr>
         <tr>
           <td><div align="left" class="style1" style="color: white">Login Id </div></td>
           <td><input type="text" placeholder=" Enter login id" name="lid"></td>
         </tr>
         <tr>
           <td class="style1">Password</td>
           <td><input type="password"  placeholder=" Enter password" name="pass" ></td>
         </tr>
         <tr>
           <td class="style1">Confirm Password </td>
           <td><input name="cpass" placeholder=" Enter password again" type="password" id="cpass"></td>
         </tr>
          <tr>
                 <td class="style1">School name</td>
                 <td><input name="sname" placeholder=" Enter school name" type="text"></td>
           </tr>
           <tr>
           <td>&nbsp;</td>
          
         </tr>
           <tr>
           <td>&nbsp;</td>
           <td><input type="submit" name="Submit" value="Sign up">
           </td>
         </tr>
       </table>
     </form></td>
   </tr>
 </table>
 </div>
 <p>&nbsp; </p>
</body>
</html>
