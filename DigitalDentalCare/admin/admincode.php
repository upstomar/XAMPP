
<?php
session_start();
$email = $_POST['email'];
echo $email;
$password = $_POST['password'];
echo $password;
include('../connection.php');

$sql = "select * from tbl_admin where email='" . $email . "' and password='" . $password . "'";
$res = mysqli_query($con, $sql);
if ($row = mysqli_fetch_array($res)) {
    $_SESSION['admin'] = $email;
    header("location:dashboard.php");
} else {
    header("location:index.php");
}
?>
