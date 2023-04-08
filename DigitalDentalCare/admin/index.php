<!DOCTYPE html>
<html>

<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <!--<link rel="stylesheet" type="text/css" href="css/style.css">-->


</head>

<body style="background: url(../bg-img/2.jpg);">
  <div class="modal-dialog text-center">
    <div class="col-sm-9 main-section">
      <div class="modal-content" style="background:rgba(157,215,243,0.6);">

        <div class="col-12 user-img">
          <br /><img src="core-img/logo.png"><!--style="border-radius:50%;box-shadow: 0px 0px 50px 5px red;">-->
        </div>


        <div class="col-12 form-input">
          <form action="admincode.php" method="post">
            <div class="form-group">
              <br /><input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <button type="submit" class="btn btn-success">Login</button>
          </form>
        </div>

        <div class="col-12 forgot">
          <!--<a href="#">Forgot Password?</a>&nbsp;&nbsp;-->
          <a href="../dento.php">Back to Home</a>
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