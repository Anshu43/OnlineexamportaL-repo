
<?php
session_start();
error_reporting(1);
?>
    <?php
include("nav1.php");
?>


<html>
<head>
    <script type="text/javascript">
</script>
<style>
    * {
    box-sizing: border-box;
}
.in{
   color: blue;
}
body {
    margin: 0;
}
.header {
     background-color: rgba(0,0,0,0.0);
    padding: 10px;
    text-align: center;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
     
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
.footer {
    background-color: rgba(0,0,0,0.0);
    padding: 10px;
    text-align: center;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        width: 100%;
    }
}
    #bg1{
        background-color: rgba(0,0,0,0.75);
        font-style: italic;
        
    }

.button {
  display: inline-block;
  border-radius: 2px;
  background-color: #008000;
  border: none;
  color: #000000;
  text-align: center;
  font-size: 28px;
  padding: 15px;
  width: 300px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

div
{
   background-color: rgba(0,0,0,0.0);
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<title>Exam Portal</title>
<link href="../quiz.css" rel="stylesheet" type="text/css">
</head>


<body>
    <?php
extract($_POST);

if(isset($submit))
{
	include("../database.php");
	$query="select * from mst_admin where loginid='$loginid' and pass='$pass' and sname='$sname'";
        $v = mysqli_query($cn, $query) or die(mysqli_error($cn));
	if(mysqli_num_rows($v)<1)
	{
		echo "<BR><BR><BR><BR><div class=head1> Incorrect Details to Login<br>Click here to <a href=index.php>Login</a><div>";
		exit;
		
	}
        $_SESSION["lid"]=$loginid;
        $_SESSION["sname"]=$sname;
	$_SESSION['alogin']="true";
	
}
else if(!isset($_SESSION[alogin]))
{
	echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div>";
		exit;
}
?>
    <h1><marquee behavior="scroll" direction="left">
             Welcome to Admistrative Area
        </marquee></h1>
         
    <h1 class="header">
         <center>
             <button class="button" style="vertical-align:middle"><a href="signup.php"><span>Register a student</span></a></button>
             <button class="button" style="vertical-align:middle"><a href="KANSH.php"><span>Add another Admin</span></a></button>
    </center>
    </h1>
<div class="row" >
  <div class="column">
       <table>
        <tr><td height=50></td></tr>
    </table>
      <table  width="300" height="200" border="2" align="center" id='bg1'>
    <tr>
        <th class="in">Add Subject</th>
     <td class="style1"><center>
       <button class="button" style="vertical-align:middle"><a href="subadd.php"><span>Add Subject </span></a></button>
    </center></td>
      
    </tr>
</table>
  </div>
    <div class="column" >
        <table>
        <tr><td height=50></td></tr>
    </table>
    <table  width="300" height="200" border="2" align="center" id='bg1'>
    <tr>
        <th class="in">Add test</th> 
     <td class="style1">
    <center>
       <button class="button" style="vertical-align:middle"><a href="testadd.php"><span>Add test</span></a></button>
    </center></td>
      
    </tr>
</table>
    </div>
    <div class="column">
        <table>
        <tr><td height=50></td></tr>
    </table>
         <table  width="300" height="200" border="2" align="center" id='bg1'>
    <tr>
        <th class="in">Add Question</th> 
     <td class="style1">
    <center>
        <button class="button" style="vertical-align:middle"><a href="questionadd.php"><span>Add Question</span></a></button>
    </center></td>
      
    </tr>
</table>
    </div>
     </div>
<h1 class="footer">
    <center>
        <button class="button" style="vertical-align:middle"><a href="linb.php"><span>Question Library</span></a></button>
    </center>
</h1>

  


</body>

