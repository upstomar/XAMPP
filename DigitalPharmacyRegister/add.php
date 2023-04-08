<?php
session_start();
include_once "config.php";
$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
if ( !$connection ) {
    echo mysqli_error( $connection );
    throw new Exception( "Database cannot Connect" );
} else {
    $action = $_REQUEST['action'] ?? '';

    if ( 'addDrug' == $action ) {
        $Drug_Code = $_REQUEST['Drug_Code'] ?? '';
        $Name_of_the_Medicine = $_REQUEST['Name_of_the_Medicine'] ?? '';
        $Unit_Size = $_REQUEST['Unit_Size'] ?? '';
        $MRP = $_REQUEST['MRP'] ?? '';
        $Therapeutic_Category = $_REQUEST['Therapeutic_Category'] ?? '';

        

        if ( $Drug_Code && $Name_of_the_Medicine && $Unit_Size && $MRP && $Therapeutic_Category ) {
            $query = "INSERT INTO drugs(Drug_Code,Name_of_the_Medicine,Unit_Size,MRP,Therapeutic_Category) VALUES ('{$Drug_Code}','$Name_of_the_Medicine','$Unit_Size','$MRP','$Therapeutic_Category')";
            mysqli_query( $connection, $query );
            header( "location:index.php?id=allDrug" );
        }

    } elseif ( 'updateDrug' == $action ) {
        $Sr_No = $_REQUEST['id'] ?? '';
        $Drug_Code = $_REQUEST['Drug_Code'] ?? '';
        $Name_of_the_Medicine = $_REQUEST['Name_of_the_Medicine'] ?? '';
        $Unit_Size = $_REQUEST['Unit_Size'] ?? '';
        $MRP = $_REQUEST['MRP'] ?? '';
        $Therapeutic_Category = $_REQUEST['Therapeutic_Category'] ?? '';


        if ( $Drug_Code && $Name_of_the_Medicine && $Unit_Size && $MRP && $Therapeutic_Category) {
            $query = "UPDATE drugs SET Drug_Code='{$Drug_Code}', Name_of_the_Medicine='{$Name_of_the_Medicine}', Unit_Size='$Unit_Size', MRP='$MRP', Therapeutic_Category = '$Therapeutic_Category' WHERE Sr_No='{$Sr_No}'";
            mysqli_query( $connection, $query );
            header( "location:index.php?id=allDrug" );
        }
    } elseif ( 'addCustomer' == $action ) {
        $fname = $_REQUEST['fname'] ?? '';
        $lname = $_REQUEST['lname'] ?? '';
        $drug = $_REQUEST['drug'] ?? '';
        $quantity = $_REQUEST['quantity'] ?? '';
        $email = $_REQUEST['email'] ?? '';
        $phone = $_REQUEST['phone'] ?? '';
        $address = $_REQUEST['address'] ?? '';

        if ( $fname && $lname && $drug && $quantity && $email && $phone && $address ) {
            $query = "INSERT INTO customers(fname,lname,drug,quantity,email,phone,address) VALUES ('{$fname}','$lname','$drug','$quantity','$email','$phone','$address')";
            mysqli_query( $connection, $query );
            header( "location:index.php?id=allCustomer" );
        }
    } elseif ( 'updateCustomer' == $action ) {
        $Sr_No = $_REQUEST['id'] ?? '';
        $fname = $_REQUEST['fname'] ?? '';
        $lname = $_REQUEST['lname'] ?? '';
        $drug = $_REQUEST['drug'] ?? '';
        $quantity = $_REQUEST['quantity'] ?? '';
        $email = $_REQUEST['email'] ?? '';
        $phone = $_REQUEST['phone'] ?? '';
        $address = $_REQUEST['address'] ?? '';

        if ( $fname && $lname && $drug && $quantity && $email && $phone && $address) {
            $query = "UPDATE customers SET fname='{$fname}', lname='{$lname}', drug='$drug', quantity='$quantity', email='$email', phone='$phone', address = '$address' WHERE Sr_No='{$Sr_No}'";
            mysqli_query( $connection, $query );
            header( "location:index.php?id=allCustomer" );
        }
    }

   
    elseif ( 'updateProfile' == $action ) {

        $fname = $_REQUEST['fname'] ?? '';
        $lname = $_REQUEST['lname'] ?? '';
        $email = $_REQUEST['email'] ?? '';
        $phone = $_REQUEST['phone'] ?? '';
        $oldPassword = $_REQUEST['oldPassword'] ?? '';
        $newPassword = $_REQUEST['newPassword'] ?? '';
        $sessionId = $_SESSION['id'] ?? '';
        $sessionRole = $_SESSION['role'] ?? '';
        $avatar = $_FILES['avatar']['name'] ?? "";

        if ( $fname && $lname && $email && $phone && $oldPassword && $newPassword ) {
            $query = "SELECT password,avatar FROM {$sessionRole}s WHERE id='$sessionId'";
            $result = mysqli_query( $connection, $query );

            if ( $data = mysqli_fetch_assoc( $result ) ) {
                $_password = $data['password'];
                $_avatar = $data['avatar'];
                $avatarName = '';
                if ( $_FILES['avatar']['name'] !== "" ) {
                    $allowType = array(
                        'image/png',
                        'image/jpg',
                        'image/jpeg'
                    );
                    if ( in_array( $_FILES['avatar']['type'], $allowType ) !== false ) {
                        $avatarName = $_FILES['avatar']['name'];
                        $avatarTmpName = $_FILES['avatar']['tmp_name'];
                        move_uploaded_file( $avatarTmpName, "assets/img/$avatar" );
                    } else {
                        header( "location:index.php?id=userProfileEdit&avatarError" );
                        return;
                    }
                } else {
                    $avatarName = $_avatar;
                }
                if ( password_verify( $oldPassword, $_password ) ) {
                    $hashPassword = password_hash( $newPassword, PASSWORD_BCRYPT );
                    $updateQuery = "UPDATE {$sessionRole}s SET fname='{$fname}', lname='{$lname}', email='{$email}', phone='{$phone}', password='{$hashPassword}', avatar='{$avatarName}' WHERE id='{$sessionId}'";
                    mysqli_query( $connection, $updateQuery );

                    header( "location:index.php?id=userProfile" );
                }

            }

        } else {
            echo mysqli_error( $connection );
        }

    }
}