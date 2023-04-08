  <!-- Start Navigation -->

  <nav class="navbar navbar-expand-sm navbar-dark pl-5">
    <a href="dashboard.php" class="navbar-brand"><img class="img-responsive" src="img/logo.png" alt="logo not found"></a>

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="dashboard.php" class="nav-link">DASHBOARD</a></li>
        <li class="nav-item"><a href="contactmgmt.php" class="nav-link">CONTACT </a></li>
        <li class="nav-item"><a href="appointmentmgmt.php" class="nav-link">APPOINTMENT</a></li>
        <!--<li class="nav-item"><a href="#" class="nav-link">ADD SERVICES</a></li>-->
        <li class="nav-item"><a href="feedbackmgmt.php" class="nav-link">FEEDBACK</a></li>
      </ul>
    </div>

    <!--    admin dropdown menu-->
    <div class="btn-group open">
      <a class="btn btn-primary" href="#"><i class="fa fa-cog fa-spin fa-1x fa-fw" aria-hidden="true"></i> ADMIN</a>
      <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"></a>
      <span title="Toggle dropdown menu"></span>
      <ul class="dropdown-menu">
        <li><a href="logout.php">Logout</a></li>
        <li><a href="changepassword.php">Change password</a></li>

        <li class="divider"></li>
        <!--<li><a href="#"> Make admin</a></li>-->
      </ul>
    </div>
  </nav> <!-- End Navigation -->

  <!-- Start Header Jumbotron-->
  <div class="col-sm-12 back-image" style="background-image: url(img/admin.png);background-attachment:fixed;">
    <div class="row">
      <div class="col-sm-12" style="min-height:500px;background:rgba(0,0,0,.7);">
        <center style="margin-top:15%;">
          <h1 class="text-uppercase text-danger font-weight-bold">Welcome to Admin Zone</h1>

          <h3 style="color:white;" data-animation="fadeInUp" data-delay="100ms">We Believe Everyone Should Have Easy Access </h3>
        </center>
      </div>
    </div>
    <!-- End Header Jumbotron -->