<?php
session_start();
error_reporting(1);
?>
    <?php
include("nav1.php");
?>
<html>
<style>
.flex-container {
  display: flex;
  background-color: DodgerBlue;
   flex-direction: column;
}

.flex-container div {
  background-color: #f1f1f1;
  margin: 5px;
  padding:20px;
  font-size: 30px;
}
</style>
<body>
<center><h1>Question Library</h1></center>
<div class="flex-container">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz_new";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT que_id,test_id,que_desc from mst_question ";
$result= mysqli_query($conn, $sql) or die(mysqli_error($conn));
$ub="SELECT test_name from mst_test where test_id='$test_id'";
$ln= mysqli_query($conn, $ub) or die(mysqli_error($conn));
if($ln->num_rows>0)
{
while($row = $ln->fetch_assoc()){
echo " Test name".$row["test_name"];
                     
}
}
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
       echo "<div><br> Question No: ". $row["que_id"].  ":-" . $row["que_desc"] . "<br></div>";
       
        
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</div> 
</body>
</html>