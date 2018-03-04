<?php
session_start()
?>
<html>
<head>
<title>New user signup </title>
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
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
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
//include("header.php");
include("nav1.php");
?>
     <table>
        <tr>
            <td height="60"></td>
        </tr>
        </table>
    <table align="center">
        <tr>
             <td width="468" height="57"><h1 align="center"><span class="style8">New User Signup</span></h1></td>

        </tr>
        </table>
    <div style="margin:auto;width:50%;height:400px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left" id="bg1">
        
    
    <table  width="100%" border="0">
   <tr> <td height="60"></td>
    </tr>
   <tr>
       <td><form name="form1" method="post" action="user_registration.php" onSubmit="return check();">
               <table  width="301" border="0" align="center">
         <tr>
             <td><div align="left" class="style1">Login Id </div></td>
           <td><input type="text" placeholder=" Enter login id" name="lid"></td>
         </tr>
         <tr>
           <td class="style1">Password</td>
           <td><input type="password" placeholder=" Enter password" name="pass"></td>
         </tr>
         <tr>
           <td class="style1">Confirm Password </td>
           <td><input name="cpass" placeholder=" Enter password again" type="password" id="cpass"></td>
         </tr>
         <tr>
           <td class="style1">Name</td>
           <td><input name="name" placeholder=" Enter name" type="text" id="name"></td>
         </tr>
         <tr>
           <td valign="top" class="style1">School Name</td>
           <td><textarea name="address" placeholder=" Enter school name" id="address"></textarea></td>
         </tr>
         <tr>
           <td valign="top" class="style1">City</td>
           <td><input name="city" placeholder=" Enter city" type="text" id="city"></td>
         </tr>
         <tr>
           <td valign="top" class="style1">Phone</td>
           <td><input name="phone" placeholder=" Enter phone no." type="text" id="phone"></td>
         </tr>
         <tr>
           <td valign="top" class="style1">E-mail</td>
           <td><input name="email" placeholder=" Enter E-mail id" type="text" id="email"></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td><input type="submit" name="Submit" value="Signup">
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
