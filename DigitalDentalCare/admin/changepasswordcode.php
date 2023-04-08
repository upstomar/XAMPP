<?php
session_start();
$email = $_SESSION['admin'];
$op = $_POST['op'];
$np = $_POST['np'];
$cp = $_POST['cp'];
echo $op, $np, $cp, $email;
include('../connection.php');
$sql = "select * from tbl_admin where email='" . $email . "'";
$res = mysqli_query($con, $sql);
if ($row = mysqli_fetch_array($res)) {
    //echo $row['password'];
    if ($op != $np) {
        if ($np == $cp) {
            $update = "update tbl_admin set password='" . $np . "' where email='" . $email . "'";
            mysqli_query($con, $update);
            header('location:index.php');
        } else {
            echo "<script>alert('New password and confirm password do not match');</script>";
        }
    } else {
        echo "<script>alert('Old password matches new password');</script>";
    }
}
