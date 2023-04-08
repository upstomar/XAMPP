<!DOCTYPE html>
<html>

<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <!--<link rel="stylesheet" type="text/css" href="css/style.css">-->


</head>

<body style="background: url(../bg-img/2.jpg);">
  <?php
  session_start();
  $email = $_SESSION['admin'];
  include('secure.php');
  ?>
  <div class="modal-dialog text-center">
    <div class="col-sm-9 main-section">
      <div class="modal-content" style="background:rgba(157,215,243,0.6);">

        <div class="col-12 user-img">
          <br /><img src="core-img/logo.png"><!--style="border-radius:50%;box-shadow: 0px 0px 50px 5px red;">-->
        </div>


        <div class="col-12 form-input">
          <form action="changepasswordcode.php" method="post">

            <div class="form-group">
              <br /><input type="password" name="op" class="form-control" placeholder="Old Password">
            </div>
            <div class="form-group">
              <input type="password" name="np" class="form-control" placeholder="New Password">
            </div>
            <div class="form-group">
              <input type="password" name="cp" class="form-control" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-success">SAVE</button>
            <button type="reset" class="btn btn-success">CANCEL</button>
          </form>
        </div>

        <div class="col-12 forgot">
          <a href="dashboard.php">Back to Dashboard</a>
        </div>

      </div>
    </div>
  </div>
  <!--jqyary script-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>