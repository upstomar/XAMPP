<?php
    session_start();
    $sessionId = $_SESSION['id'] ?? '';
    $sessionRole = $_SESSION['role'] ?? '';
    echo "$sessionId $sessionRole";
    if ( !$sessionId && !$sessionRole ) {
        header( "location:login.php" );
        die();
    }

    ob_start();

    include_once "config.php";
    $connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
    if ( !$connection ) {
        echo mysqli_error( $connection );
        throw new Exception( "Database cannot Connect" );
    }

    $id = $_REQUEST['id'] ?? 'dashboard';
    $action = $_REQUEST['action'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1024">
    <title>MediPharm</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/Logo.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Custom Js -->
    <script src="./assets/js/app.js"></script>

    
</head>

<body>
    <!--------------------------------- Secondary Navber -------------------------------->
    <section class="topber">
        <div class="topber__title">
            <span class="topber__title--text">
                <?php
                    if ( 'dashboard' == $id ) {
                        echo "DashBoard";
                    } elseif ( 'addDrug' == $id ) {
                        echo "Add Drug";
                    } elseif ( 'allDrug' == $id ) {
                        echo "Drugs";
                    } elseif ( 'addCustomer' == $id ) {
                        echo "Add Customer";
                    } elseif ( 'allCustomer' == $id ) {
                        echo "Customers";
                    } 
                      elseif ( 'userProfile' == $id ) {
                        echo "Your Profile";
                    } elseif ( 'editDrug' == $action ) {
                        echo "Edit Drug";
                    } elseif ( 'editCustomer' == $action ) {
                        echo "Edit Customer";
                    } 
                ?>

            </span>
        </div>

        <div class="topber__profile">
            <?php
                $query = "SELECT fname,lname,role,avatar FROM {$sessionRole}s WHERE id='$sessionId'";
                $result = mysqli_query( $connection, $query );

                if ( $data = mysqli_fetch_assoc( $result ) ) {
                    $fname = $data['fname'];
                    $lname = $data['lname'];
                    $role = $data['role'];
                    $avatar = $data['avatar'];
                ?>
                <img src="assets/img/Logo.jpg" height="25" width="25" class="rounded-circle" alt="profile">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php
                        echo "$fname $lname (" . ucwords( $role ) . " )";
                        }
                    ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="index.php">Dashboard</a>
                        <a class="dropdown-item" href="index.php?id=userProfile">Profile</a>
                        <a class="dropdown-item" href="logout.php">Log Out</a>
                    </div>
                </div>
        </div>
    </section>
    <!--------------------------------- Secondary Navber -------------------------------->


    <!--------------------------------- Sideber -------------------------------->
    <section id="sideber" class="sideber">
        <ul class="sideber__ber">
            <h3 class="sideber__panel"><i id="left" class="fas fa-laugh-wink"></i> MediPharm</h3>
            <li id="left" class="sideber__item<?php if ( 'dashboard' == $id ) {
                                                  echo " active";
                                              }?>">
                <a href="index.php?id=dashboard"><i id="left" class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <?php if ( 'admin' == $sessionRole ) {?>
                <!-- Only For Admin -->
                <li id="left" class="sideber__item sideber__item--modify<?php if ( 'addDrug' == $id ) {
                                                                            echo " active";
                                                                        }?>">
                    <a href="index.php?id=addDrug"><i id="left" class="fas fa-pills"></i></i>Add Drug</a>
                </li><?php }?>
            <li id="left" class="sideber__item<?php if ( 'allDrug' == $id ) {
    echo " active";
}?>">
                <a href="index.php?id=allDrug"><i id="left" class="fas fa-pills"></i>All Drug</a>
            </li>
            <?php if ( 'admin' == $sessionRole || 'drug' == $sessionRole ) {?>
                <!-- For Admin, drug -->
                <li id="left" class="sideber__item sideber__item--modify<?php if ( 'addCustomer' == $id ) {
                                                                            echo " active";
                                                                        }?>">
                    <a href="index.php?id=addCustomer"><i id="left" class="fas fa-user-plus"></i>Add Customer</a>
                </li><?php }?>
            <li id="left" class="sideber__item<?php if ( 'allCustomer' == $id ) {
    echo " active";
}?>">
                <a href="index.php?id=allCustomer"><i id="left" class="fas fa-user"></i>All Customer</a>
            </li>
            <?php if ( 'admin' == $sessionRole || 'drug' == $sessionRole || 'customer' == $sessionRole ) ?>
                
        <footer class="text-center"><span>MediPharm LLP</span><br>&copy; <?php echo date('Y'); ?> All Rights Reserved</footer>
    </section>
    <!--------------------------------- #Sideber -------------------------------->


    <!--------------------------------- Main section -------------------------------->
    <section class="main">
        <div class="container">

            <!-- ---------------------- DashBoard ------------------------ -->
            <?php if ( 'dashboard' == $id ) {?>
                <div class="dashboard p-5">
                    <div class="total">
                        <div class="row">
                            
                            <div class="col-3">
                                <div class="total__box text-center">
                                    <h1>
                                        <?php
                                            $query = "SELECT COUNT(*) totalDrug FROM drugs;";
                                                $result = mysqli_query( $connection, $query );
                                                $totalDrug = mysqli_fetch_assoc( $result );
                                                echo $totalDrug['totalDrug'];
                                            ?>
                                    </h1>
                                    <h2>Drug</h2>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="total__box text-center">
                                    <h1>
                                        <?php
                                            $query = "SELECT COUNT(*) totalCustomer FROM customers;";
                                                $result = mysqli_query( $connection, $query );
                                                $totalCustomer = mysqli_fetch_assoc( $result );
                                                echo $totalCustomer['totalCustomer'];
                                            ?>

                                    </h1>
                                    <h2>Customer</h2>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            <?php }?>
            <!-- ---------------------- DashBoard ------------------------ -->

            <!-- ---------------------- Drug ------------------------ -->
            <div class="drug">
                <?php if ( 'allDrug' == $id ) {?>
                    <div class="allDrug">
                        <div class="main__table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Unit Size</th>
                                        <th scope="col">MRP</th>
                                        <th scope="col">Category</th>
                                        <?php if ( 'admin' == $sessionRole ) {?>
                                            <!-- Only For Admin -->
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        <?php }?>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                        $getDrugs = "SELECT * FROM drugs";
                                            $result = mysqli_query( $connection, $getDrugs );

                                        while ( $drug = mysqli_fetch_assoc( $result ) ) {?>

                                        <tr>
                                            <td><?php printf( "%s", $drug['Name_of_the_Medicine'] );?></td>
                                            <td><?php printf( "%s", $drug['Unit_Size'] );?></td>
                                            <td><?php printf( "%s", $drug['MRP'] );?></td>
                                            <td><?php printf( "%s", $drug['Therapeutic_Category'] );?></td>
                                            <?php if ( 'admin' == $sessionRole ) {?>
                                                <!-- Only For Admin -->
                                                <td><?php printf( "<a href='index.php?action=editDrug&id=%s'><i class='fas fa-edit'></i></a>", $drug['Sr_No'] )?></td>
                                                <td><?php printf( "<a class='delete' href='index.php?action=deleteDrug&id=%s'><i class='fas fa-trash'></i></a>", $drug['Sr_No'] )?></td>
                                            <?php }?>
                                        </tr>

                                    <?php }?>

                                </tbody>
                            </table>


                        </div>
                    </div>
                <?php }?>

                <?php if ( 'addDrug' == $id ) {?>
                    <div class="addDrug">
                        <div class="main__form">
                            <div class="main__form--title text-center">Add New Drug</div>
                            <form action="add.php" method="POST">
                                <div class="form-row">
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-key"></i>
                                            <input type="number" name="Drug_Code" placeholder="Drug Code" required>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-pills"></i>
                                            <input type="text" name="Name_of_the_Medicine" placeholder="Name" required>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-pills"></i>
                                            <input type="text" name="Unit_Size" placeholder="Unit Size" required>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-rupee-sign"></i>
                                            <input type="number" name="MRP" placeholder="MRP" required>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-pills"></i>
                                            <input id="pwdinput" type="text" name="Therapeutic_Category" placeholder="Category" required>
                                            
                                        </label>
                                    </div>
                                    <input type="hidden" name="action" value="addDrug">
                                    <div class="col col-12">
                                        <input type="submit" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                <?php }?>

                <?php if ( 'editDrug' == $action ) {
                        $drugId = $_REQUEST['id'];
                        $selectDrugs = "SELECT * FROM drugs WHERE Sr_No='{$drugId}'";
                        $result = mysqli_query( $connection, $selectDrugs );

                    $drug = mysqli_fetch_assoc( $result );?>
                    <div class="addDrug">
                        <div class="main__form">
                            <div class="main__form--title text-center">Update Drug</div>
                            <form action="add.php" method="POST">
                                <div class="form-row">
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-key"></i>
                                            <input type="number" name="Drug_Code" placeholder="Drug Code" value="<?php echo $drug['Drug_Code']; ?>" required>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-pills"></i>
                                            <input type="text" name="Name_of_the_Medicine" placeholder="Name" value="<?php echo $drug['Name_of_the_Medicine']; ?>" required>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-pills"></i>
                                            <input type="number" name="Unit_Size" placeholder="Unit Size" value="<?php echo $drug['Unit_Size']; ?>" required>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-rupee-sign"></i>
                                            <input type="number" name="MRP" placeholder="MRP" value="<?php echo $drug['MRP']; ?>" required>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-pills"></i>
                                            <input id="pwdinput" type="text" name="Therapeutic_Category" placeholder="Category" value="<?php echo $drug['Therapeutic_Category']; ?>" required>
                                            
                                        </label>
                                    </div>

                                    <input type="hidden" name="action" value="updateDrug">
                                    <input type="hidden" name="id" value="<?php echo $drugId; ?>">
                                    <div class="col col-12">
                                        <input type="submit" value="Update">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php }?>

                <?php if ( 'deleteDrug' == $action ) {
                        $drugId = $_REQUEST['id'];
                        $deleteDrug = "DELETE FROM drugs WHERE Sr_No ='{$drugId}'";
                        $result = mysqli_query( $connection, $deleteDrug );
                        header( "location:index.php?id=allDrug" );
                }?>
            </div>
            <!-- ---------------------- drug ------------------------ -->

            <!-- ---------------------- customer ------------------------ -->
            <div class="customer">
                <?php if ( 'allCustomer' == $id ) {?>
                    <div class="allCustomer">
                        <div class="main__table">
                            <table class="table">
                                <thead>
                                    <tr>
                                    	
                                        <th scope="col">Name</th>
                                        <th scope="col">Drug</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Address</th>
                                        <?php if ( 'admin' == $sessionRole || 'drug' == $sessionRole ) {?>
                                            <!-- For Admin, drug -->
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        <?php }?>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                        $getCustomer = "SELECT * FROM customers";
                                            $result = mysqli_query( $connection, $getCustomer );

                                        while ( $customer = mysqli_fetch_assoc( $result ) ) {?>

                                        <tr>
                                        	
                                            <td><?php printf( "%s %s", $customer['fname'], $customer['lname'] );?></td>
                                            <td><?php printf( "%s", $customer['drug'] );?></td>
                                            <td><?php printf( "%s", $customer['quantity'] );?></td>
                                            <td><?php printf( "%s", $customer['email'] );?></td>
                                            <td><?php printf( "%s", $customer['phone'] );?></td>
                                            <td><?php printf( "%s", $customer['address'] );?></td>
                                            <?php if ( 'admin' == $sessionRole || 'drug' == $sessionRole ) {?>
                                                <!-- For Admin, drug -->
                                                <td><?php printf( "<a href='index.php?action=editCustomer&id=%s'><i class='fas fa-edit'></i></a>", $customer['Sr_No'] )?></td>
                                                <td><?php printf( "<a class='delete' href='index.php?action=deleteCustomer&id=%s'><i class='fas fa-trash'></i></a>", $customer['Sr_No'] )?></td>
                                            <?php }?>
                                        </tr>

                                    <?php }?>

                                </tbody>
                            </table>


                        </div>
                    </div>
                <?php }?>

                <?php if ( 'addCustomer' == $id ) {?>
                    <div class="addCustomer">
                        <div class="main__form">
                            <div class="main__form--title text-center">Add New Customer</div>
                            <form action="add.php" method="POST">
                                <div class="form-row">
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-user-circle"></i>
                                            <input type="text" name="fname" placeholder="First name" required>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-user-circle"></i>
                                            <input type="text" name="lname" placeholder="Last Name" required>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-pills"></i>
                                            <input type="text" name="drug" placeholder="Drug" required>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-pills"></i>
                                            <input type="text" name="quantity" placeholder="Quantity" required>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-envelope"></i>
                                            <input type="email" name="email" placeholder="Email" required>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-phone-alt"></i>
                                            <input type="number" name="phone" placeholder="Phone" required>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-home"></i>
                                            <input id="pwdinput" type="text" name="address" placeholder="Address" required>
                                            
                                        </label>
                                    </div>
                                    <input type="hidden" name="action" value="addCustomer">
                                    <div class="col col-12">
                                        <input type="submit" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                <?php }?>

                <?php if ( 'editCustomer' == $action ) {
                        $customerID = $_REQUEST['id'];
                        $selectCustomer = "SELECT * FROM customers WHERE Sr_No='{$customerID}'";
                        $result = mysqli_query( $connection, $selectCustomer );

                    $customer = mysqli_fetch_assoc( $result );?>
                    <div class="addDrug">
                        <div class="main__form">
                            <div class="main__form--title text-center">Update Customer</div>
                            <form action="add.php" method="POST">
                                <div class="form-row">
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-user-circle"></i>
                                            <input type="text" name="fname" placeholder="First name" value="<?php echo $customer['fname']; ?>" required>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-user-circle"></i>
                                            <input type="text" name="lname" placeholder="Last Name" value="<?php echo $customer['lname']; ?>" required>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-pills"></i>
                                            <input type="text" name="drug" placeholder="Drug" value="<?php echo $customer['drug']; ?>" required>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-pills"></i>
                                            <input type="text" name="quantity" placeholder="Quantity" value="<?php echo $customer['quantity']; ?>" required>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-envelope"></i>
                                            <input type="email" name="email" placeholder="Email" value="<?php echo $customer['email']; ?>" required>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-phone-alt"></i>
                                            <input type="number" name="phone" placeholder="Phone" value="<?php echo $customer['phone']; ?>" required>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-home"></i>
                                            <input type="text" name="address" placeholder="Address" value="<?php echo $customer['address']; ?>" required>
                                        </label>
                                    </div>
                                    <input type="hidden" name="action" value="updateCustomer">
                                    <input type="hidden" name="id" value="<?php echo $customerID; ?>">
                                    <div class="col col-12">
                                        <input type="submit" value="Update">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php }?>

                <?php if ( 'deleteCustomer' == $action ) {
                        $customerID = $_REQUEST['id'];
                        $deleteCustomer = "DELETE FROM customers WHERE Sr_No ='{$customerID}'";
                        $result = mysqli_query( $connection, $deleteCustomer );
                        header( "location:index.php?id=allCustomer" );
                }?>
            </div>
            <!-- ---------------------- customer ------------------------ -->

            

            <!-- ---------------------- User Profile ------------------------ -->
            <?php if ( 'userProfile' == $id ) {
                    $query = "SELECT * FROM {$sessionRole}s WHERE id='$sessionId'";
                    $result = mysqli_query( $connection, $query );
                    $data = mysqli_fetch_assoc( $result )
                ?>
                <div class="userProfile">
                    <div class="main__form myProfile">
                        <form action="index.php">
                            <div class="main__form--title myProfile__title text-center">My Profile</div>
                            <div class="form-row text-center">
                                <div class="col col-12 text-center pb-3">
                                    <img src="assets/img/<?php echo $data['avatar']; ?>" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="col col-12">
                                    <h4><b>Full Name : </b><?php printf( "%s %s", $data['fname'], $data['lname'] );?></h4>
                                </div>
                                <div class="col col-12">
                                    <h4><b>Email : </b><?php printf( "%s", $data['email'] );?></h4>
                                </div>
                                <div class="col col-12">
                                    <h4><b>Phone : </b><?php printf( "%s", $data['phone'] );?></h4>
                                </div>
                                <input type="hidden" name="id" value="userProfileEdit">
                                <div class="col col-12">
                                    <input class="updateMyProfile" type="submit" value="Update Profile">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php }?>

            <?php if ( 'userProfileEdit' == $id ) {
                    $query = "SELECT * FROM {$sessionRole}s WHERE id='$sessionId'";
                    $result = mysqli_query( $connection, $query );
                    $data = mysqli_fetch_assoc( $result )
                ?>


                <div class="userProfileEdit">
                    <div class="main__form">
                        <div class="main__form--title text-center">Update My Profile</div>
                        <form enctype="multipart/form-data" action="add.php" method="POST">
                            <div class="form-row">
                                <div class="col col-12 text-center pb-3">
                                    <img id="pimg" src="assets/img/<?php echo $data['avatar']; ?>" class="img-fluid rounded-circle" alt="">
                                    <i class="fas fa-pen pimgedit"></i>
                                    <input onchange="document.getElementById('pimg').src = window.URL.createObjectURL(this.files[0])" id="pimgi" style="display: none;" type="file" name="avatar">
                                </div>
                                <div class="col col-12">
                                <?php if ( isset( $_REQUEST['avatarError'] ) ) {
                                            echo "<p style='color:red;' class='text-center'>Please make sure this file is jpg, png or jpeg</p>";
                                    }?>
                                </div>
                                <div class="col col-12">
                                    <label class="input">
                                        <i id="left" class="fas fa-user-circle"></i>
                                        <input type="text" name="fname" placeholder="First name" value="<?php echo $data['fname']; ?>" required>
                                    </label>
                                </div>
                                <div class="col col-12">
                                    <label class="input">
                                        <i id="left" class="fas fa-user-circle"></i>
                                        <input type="text" name="lname" placeholder="Last Name" value="<?php echo $data['lname']; ?>" required>
                                    </label>
                                </div>
                                <div class="col col-12">
                                    <label class="input">
                                        <i id="left" class="fas fa-envelope"></i>
                                        <input type="email" name="email" placeholder="Email" value="<?php echo $data['email']; ?>" required>
                                    </label>
                                </div>
                                <div class="col col-12">
                                    <label class="input">
                                        <i id="left" class="fas fa-phone-alt"></i>
                                        <input type="number" name="phone" placeholder="Phone" value="<?php echo $data['phone']; ?>" required>
                                    </label>
                                </div>
                                <div class="col col-12">
                                    <label class="input">
                                        <i id="left" class="fas fa-key"></i>
                                        <input id="pwdinput" type="password" name="oldPassword" placeholder="Old Password" required>
                                        <i id="pwd" class="fas fa-eye right"></i>
                                    </label>
                                </div>
                                <div class="col col-12">
                                    <label class="input">
                                        <i id="left" class="fas fa-key"></i>
                                        <input id="pwdinput" type="password" name="newPassword" placeholder="New Password" required>
                                        <p>Type Old Password if you don't want to change</p>
                                        <i id="pwd" class="fas fa-eye right"></i>
                                    </label>
                                </div>
                                <input type="hidden" name="action" value="updateProfile">
                                <div class="col col-12">
                                    <input type="submit" value="Update">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php }?>
            <!-- ---------------------- User Profile ------------------------ -->

        </div>

    </section>

    <!--------------------------------- #Main section -------------------------------->

</body>
</html>
