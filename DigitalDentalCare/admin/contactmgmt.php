<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link href="../style/style.css" rel="stylesheet">

  <title link rel="icon" href="core-img/favicon.ico">DENTO</title>

  <style>
    .contact table thead tr>td,
    .contact table thead tr>th {
      background-color: #00aeef;
      color: #ffffff;
    }

    .contact table tr>td,
    .contact table tr>th {
      padding: 15px 30px;
      border-radius: 10px;
      border: 4px solid #ffffff;
      background: rgba(0, 0, 0, .6);
      color: white;
      ;
    }

    .contact table tr>td,
    .contact table tr>th {
      padding: 10px 15px;
      font-size: 15px;
    }
  </style>

</head>

<body>
  <?php include('dasheader.php'); ?>
  <?php
  session_start();
  $email = $_SESSION['admin'];
  include('secure.php');
  ?>


  <div class="container mt-4">
    <div class="row">
      <div class="col-12">
        <div class="contact table-responsive">
          <h1 class="text-center ">Contact Management</h1>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Description</th>
              </tr>
            </thead>
            <?php
            include('../connection.php');
            $sql = "select * from tbl_contact";
            $res = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($res)) {
            ?>
              <tbody>
                <tr>
                  <th scope="row"><?php echo $row['cname']; ?></th>
                  <td><?php echo $row['cemail']; ?></td>
                  <td><?php echo $row['cmessage']; ?></td>
                </tr>
              <?php }
              ?>
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <?php include('dasfooter.php'); ?>
  <!--jqyary script-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>