
<?php
$cname = $_POST['name'];
echo $cname . "<br/>";
$cemail = $_POST['email'];
echo $cemail . "<br/>";
$cmsg = $_POST['massage'];
echo $cmsg;
include('connection.php');
$sql = "insert into tbl_contact(cname,cemail,cmessage,cdate) values('" . $cname . "','" . $cemail . "','" . $cmsg . "',Now())";
mysqli_query($con, $sql);
header('location:contact.php?msg=1');
?>