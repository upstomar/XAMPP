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
  <style>
    .rating {
      unicode-bidi: bidi-override;
      direction: rtl;
    }

    .rating>span {
      display: inline-block;
      position: relative;
      width: 1.1em;
    }

    .rating>span:hover:before,
    .rating>span:hover~span:before {
      content: "\2605";
      position: absolute;
    }
  </style>
</head>

<body>

  <!--  header include  -->
  <?php
  include('header.php');
  ?>


  <div class="container text-white contact-form mt-5" style="background:rgba(0,0,0, .4);
padding: 20px;box-shadow: 0px 0px 10px 3px red;">
    <h1>FEEDBACK</h1>
    <hr class="bg-white">

    <div class="row">
      <div class="col-md-6">
        <form action="feedbackcode.php" method="post">
          <div class="form-group">

            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
          </div>

          <div class="form-group">

            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
          </div>

          <div class="form-group">

            <textarea class="form-control" name="massage" placeholder="Your Feedback" rows="7"></textarea>
          </div>

          <div class="form-group text-center">
            <button class="btn btn-danger btn-block">Submit</button>
          </div>

        </form>
      </div>
      <div class="col-md-6">
        <feedback class="h1">Write Your Feedback<br /><br />
        </feedback>
        <p class="h3">It may be Helpful for us to Provide you our Better services</p>
        <!--<div class="rating h1 mt-5"style="color:gold;">
            <h1 class="text-white"> Your Rating<br/></h1>
<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
</div>-->

      </div>

    </div>

  </div>




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