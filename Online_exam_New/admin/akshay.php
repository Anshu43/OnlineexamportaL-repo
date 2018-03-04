<?php
include("header.php");
?>


<html>
<head>
<style>
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
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
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
    <table>
        <tr><td height=50></td></tr>
    </table>

<table  width="600" height="500" border="2" align="center" id='bg1'>
    <tr>
     <td class="style1"><center>
             <h1>WELCOME</h1>
               <h1>TO</h1>
       <h1>ONLINE</h1>
       <h1>EXAMINATION</h1>
       <h1>PORTAL</h1>
       <button class="button" style="vertical-align:middle"><a href="index.php" style="color:#000000"><span>ADMIN </span></a></button>
       <button class="button" style="vertical-align:middle"><a href="../index.php" style="color:#000000"><span>STUDENT </span></a></button>
    </center></td>
      
    </tr>
</table>
    <?php
include("footer.php");
?>
    
</body>

</html>
