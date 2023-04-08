
<?php
$aname = $_POST['name'];
echo $aname . "<br/>";
$anumber = $_POST['number'];
echo $anumber . "<br/>";
$email = $_POST['email'];
echo $email . "<br/>";
$aaddress = $_POST['address'];
echo $aaddress . "<br/>";
$ascheldule = $_POST['scheldule'];
echo $ascheldule . "<br/>";
$aproblam = $_POST['problam'];
echo $aproblam . "<br/>";
$amsg = $_POST['message'];
echo $amsg;
include('connection.php');
$sql = "insert into tbl_appointment(aname,anumber,aemail,aaddress,ascheldule,aproblam,amessage,adate) values('" . $aname . "','" . $anumber . "','" . $email . "','" . $aaddress . "','" . $ascheldule . "','" . $aproblam . "','" . $amsg . "',curdate())";
mysqli_query($con, $sql);
header('location:dento.php?msg=1');
?>