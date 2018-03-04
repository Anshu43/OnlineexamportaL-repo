
<html>
<head>
    <link href="../quiz.css" rel="stylesheet" type="text/css">
<style>
    .bg{
        font-size: 30px;
        font-style: italic;
        font-weight: bold;
        align-content: center;
        color: blue;
    } 
     .ub{
       display: block;
    color: white;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    padding: 14px 60px;
    text-decoration: none;
    } 
body {margin:0;}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: rgba(0,0,0,0.5);
    position: fixed;
    top: 0;
    width: 100%;
    height: 7%;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color:#800000;
}
.ub:hover:not(.active){
    background-color:#800000;
}

.active {
    background-color: #4CAF50;
}
.active1 {
    background-color: #4CAF50;
    height: 100%;
}

  html{
        background: url('../image/akshay.png')no-repeat center center fixed;
        -webkit-background-size: cover;
        background-size: cover;
    }
</style>
</head>
<body>
<ul>
   
    <li class="ub"><center><?php echo "Login Id:". $_SESSION["lid"]?></center></li>
 <li class="ub"><center><?php echo "School name:". $_SESSION["sname"]?></center></li>
     <li><a> ONLINE EXAM PORTAL</a></li> 
     <li style="float:right"><a class="active1" href="signout.php"> Logout</a></li> 
   <li style="float:right"><a class="active1" href="anshul.php">Admin Home</a></li>
</ul>

<table>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
</table>

  <table width="100%">
  <tr>
    <td height="60">
	
	</td>
  </tr>
</table>
</body>
</html>