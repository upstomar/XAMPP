
<?php
$fname = $_POST['name'];
echo $fname . "<br/>";
$femail = $_POST['email'];
echo $femail . "<br/>";
$fmsg = $_POST['massage'];
echo $fmsg;
include('connection.php');
$sql = "insert into tbl_feedback(fname,femail,fmessage,fdate) values('" . $fname . "','" . $femail . "','" . $fmsg . "',Now())";
mysqli_query($con, $sql);
header('location:feedback.php?msg=1');
?>