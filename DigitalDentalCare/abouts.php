<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <!-- Custom CSS -->
  <link href="style/style.css" rel="stylesheet">




  <title link rel="icon" href="core-img/favicon.ico">DENTO</title>
</head>

<body>

  <!--  header include  -->
  <?php
  include('header.php');
  ?>



  <!--    abouts  start-->

  <div class="container mt-5" style="box-shadow: 0px 0px 10px 3px red;">
    <div class="row  h1" style="min-height:200px;background:rgba(0,0,0,0.7);line-height:170px;">
      <div class="row mt-5 bg-info">
      </div>
      <div class="col-12 col-md-6 mt-5 mb-5">
        <div class="thumbnail">
          <img src="bg-img/15.jpg" class="img-thumbnail  mx-auto d-block" alt="image not found" style="width:60%; border-radius:20px;background:rgba(0,0,0,0.8);">
        </div>
      </div>
      <div class="col-sm-6 text-center h1 mt-5 mb-5 text-white">
        About Us
        <p class="h5 text-white"><br>We provides a wide variety of dental services and procedures to address all of our patients' dental health needs. By combining quality patient care with up-to-date technology, we are able to treat patients of all ages in a comfortable and relaxing setting.</p>


        <div class="container">
          <h3 class="mt-3">Experience Dentist</h3>

          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:80%">80%</div>
          </div>

          <h3 class="mt-3">Modern Equipment</h3>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:75%">75%</div>
          </div>
          <h3 class="mt-3">Friendly Staff</h3>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:85%">85%</div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End Header Jumbotron -->

  <!-- start   docters part-->

  <div class="row mt-5">

    <div class="col-lg-3 col-sm-6 text-center">
      <div class=" p-2 mt-3">
        <i class="fa fa-user-md fa-3x text-primary"></i>
        <h3 class="heading mt-3">Qualified Doctors</h3>        
      </div>
    </div>
    <div class="col-lg-3 col-sm-6  text-center">
      <div class=" p-2 mt-3">
        <i class="fa fa-ambulance fa-3x  text-primary "></i>
        <h3 class="heading mt-3">Emergency Care</h3>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6  text-center">
      <div class=" p-2 mt-3">
        <i class="fa fa-stethoscope fa-3x text-primary"></i>
        <h3 class="heading mt-3">Outdoor Checkup</h3>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6  text-center">
      <div class=" p-2 mt-3">
        <i class="fa fa-h-square fa-3x text-primary"></i>
        <h3 class="heading mt-3">24/7 Services</h3>
      </div>
    </div>
  </div>

  <!--    footer include-->
  <?php
  include('footer.php');
  ?>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <!-- offline jquary file link-->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>

</body>

</html>