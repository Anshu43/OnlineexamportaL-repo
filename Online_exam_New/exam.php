<?php
session_start();
error_reporting(1);
include("database.php");
include("nav1.php");

extract($_POST);
extract($_GET);
extract($_SESSION);
/*$rs=mysql_query("select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
if($_SESSION[qn]>mysql_num_rows($rs))
{
unset($_SESSION[qn]);
exit;
}*/
if(isset($subid) && isset($testid))
{
$_SESSION[sid]=$subid;
$_SESSION[tid]=$testid;
header("location:exam.php");
}
if(!isset($_SESSION[sid]) || !isset($_SESSION[tid]))
{
	header("location: index.php");
}
?>

<html>
<head>
<title>Online Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body >
    
    <div id="countdown"></div>
<div id="notifier"></div>
 
<script type="text/javascript">
 
(function () {
  function display( notifier, str ) {
    document.getElementById(notifier).innerHTML = str;
                     
  }
  function customSubmit(someValue){  alert("saurabhloading");
        	 document.questionForm.minute.value = min;   
        	 document.questionForm.second.value = sec; 
        	 document.questionForm.submit();  
        	 }  
 
  function toMinuteAndSecond( x ) {
    return Math.floor(x/60) + ":" + (x=x%60 < 10 ? 0 : x);
  }
 
  function setTimer( remain, actions ) {
    var action;
    (function countdown() {
       display("countdown", toMinuteAndSecond(remain));
       if (action = actions[remain]) {
         action();
       }
       if (remain > 0) {
         remain -= 1;
         setTimeout(arguments.callee, 1000);
       }
    })(); // End countdown
  }
 
  setTimer(20, {
    10: function () { display("notifier", "Just 10 seconds to go"); },
     5: function () { display("notifier", "5 seconds left");        },
     0: function () { document.getElementById("countdown").value =0 ;
var count =document.getElementById("countdown").value; 

//document.getElementById("ans").checked = true;
      //  alert("count="+count);
        //display("notifier", "Time is up baby"); 
        location.href = "exam.php";
    //location.href = "quiz.php?count="+count; 
        },
  });
})();
 
</script>
    
    
<?php



$query="select * from mst_question";

$v="select * from mst_question where test_id=$tid"; 
$rs= mysqli_query($cn, $v) or die(mysqli_error($cn));

if(!isset($_SESSION[qn]))
{
	$_SESSION[qn]=0;
	$u="delete from mst_useranswer where sess_id='" . session_id() ."'";
        $y= mysqli_query($cn, $u) or die(mysqli_error($cn));
	$_SESSION[trueans]=0;
	
}
else
{	$_SESSION[iscorrect]=0;
    
		if($submit=='Next Question' && isset($ans))
		{
				mysqli_data_seek($rs,$_SESSION[qn]);
				$row= mysqli_fetch_row($rs);	
				$kanu_query="insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')";
                                $kanu_submit= mysqli_query($cn, $kanu_query)or die(mysqli_error($cn));
				if($ans==$row[7]) // checking 
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
                                                        $_SESSION[iscorrect]=1;
				}
				$_SESSION[qn]=$_SESSION[qn]+1;
		}
		else if($submit=='Get Result' && isset($ans))
		{
				mysqli_data_seek($rs,$_SESSION[qn]);
				$row= mysqli_fetch_row($rs);	
				$anshu_query="insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')";
                                $ansh_submit= mysqli_query($cn, $anshu_query)or die(mysqli_error($cn));

				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				echo "<h1 class=head1> Result</h1>";
				$_SESSION[qn]=$_SESSION[qn]+1;
				echo "<Table align=center><tr class=tot><td>Total Question<td> $_SESSION[qn]";
				echo "<tr class=tans><td>True Answer<td>".$_SESSION[trueans];
				$w=$_SESSION[qn]-$_SESSION[trueans];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				echo "</table>";
				$ansh_query="insert into mst_result(login,test_id,score) values('$_SESSION[lid]',$tid,$_SESSION[trueans])";
                                 $ansh_submit= mysqli_query($cn, $ansh_query)or die(mysqli_error($cn));
				echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
				unset($_SESSION[qn]);
				unset($_SESSION[sid]);
				unset($_SESSION[tid]);
				unset($_SESSION[trueans]);
				exit;
		}
                //echo "saurabh";
               // echo($_GET["count"]);
                
                
                    else if($countdown==0)
                         {
                         
				mysqli_data_seek($rs,$_SESSION[qn]);
				$row= mysqli_fetch_row($rs);	
				$kanu_query="insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]',3)";
                                $kanu_submit= mysqli_query($cn, $kanu_query)or die(mysqli_error($cn));
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				$_SESSION[qn]=$_SESSION[qn]+1;
                         }   
              else  if($submit=='Next Question'&&(!isset($ans)))
		{
				mysqli_data_seek($rs,$_SESSION[qn]);
				$row= mysqli_fetch_row($rs);	
				$kanu_query="insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]',3)";
                                $kanu_submit= mysqli_query($cn, $kanu_query)or die(mysqli_error($cn));
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				$_SESSION[qn]=$_SESSION[qn]+1;
		}
                else if($_SESSION[qn]<mysqli_num_rows($rs)-1)
                    {
				mysqli_data_seek($rs,$_SESSION[qn]);
				$row= mysqli_fetch_row($rs);	
				$anshu_query="insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')";
                                $ansh_submit= mysqli_query($cn, $anshu_query)or die(mysqli_error($cn));

				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				echo "<h1 class=head1> Result</h1>";
				$_SESSION[qn]=$_SESSION[qn]+1;
				echo "<Table align=center><tr class=tot><td>Total Question<td> $_SESSION[qn]";
				echo "<tr class=tans><td>True Answer<td>".$_SESSION[trueans];
				$w=$_SESSION[qn]-$_SESSION[trueans];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				echo "</table>";
				$ansh_query="insert into mst_result(login,test_id,score) values('$tid',$tid,$_SESSION[trueans])";
                                 $ansh_submit= mysqli_query($cn, $ansh_query)or die(mysqli_error($cn));
				echo "<h1 align=center><a href=index.php> Review Question</a> </h1>";
				unset($_SESSION[qn]);
				unset($_SESSION[sid]);
				unset($_SESSION[tid]);
				unset($_SESSION[trueans]);
				exit;
		}
}
$query="select * from mst_question where test_id=$tid";
$rs= mysqli_query($cn, $query)or die(mysqli_error($cn));

if($_SESSION[qn]>mysqli_num_rows($rs)-1)
{
unset($_SESSION[qn]);
echo "<h1 class=head1>Some Error  Occured</h1>";
session_destroy();
echo "Please <a href=index.php> Start Again</a>";

exit;
}
mysqli_data_seek($rs,$_SESSION[qn]);
$row= mysqli_fetch_row($rs);
echo "<form name=myfm method=post action=exam.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION[qn]+1;
echo "<tR><td><span class=style2>Que ".  $n .": $row[2]</style>";
echo "<tr><td class=style8><input type=radio name=ans value=1 CHECKED>$row[3]";
echo "<tr><td class=style8> <input type=radio name=ans value=2>$row[4]";
echo "<tr><td class=style8><input type=radio name=ans value=3>$row[5]";
echo "<tr><td class=style8><input type=radio name=ans value=4>$row[6]";

if($_SESSION[qn]<mysqli_num_rows($rs)-1)
echo "<tr><td><input type=submit name=submit value='Next Question' onclick=customSubmit()></form>";
else
echo "<tr><td><input type=submit name=submit value='Get Result'></form>";
echo "</table></table>";

?>
</body>
</html>