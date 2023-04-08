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


</head>

<body>
  <?php
  session_start();
  $email = $_SESSION['admin'];
  include('secure.php');
  ?>
  <?php include('dasheader.php'); ?>
  <div class="continer" style="background:rgba(157,215,243,0.6);">
    <table class="table">
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Schedule</th>
        <th>Problem</th>
        <th>Description</th>
      </tr>
      <?php
      include('../connection.php');
      $sql = "select * from tbl_appointment";
      $res = mysqli_query($con, $sql);
      while ($row = mysqli_fetch_array($res)) {
      ?>
        <tr>
          <td><?php echo $row['aname']; ?></td>
          <td><?php echo $row['anumber']; ?></td>
          <td><?php echo $row['aemail']; ?></td>
          <td><?php echo $row['aaddress']; ?></td>
          <td><?php echo $row['ascheldule']; ?></td>
          <td><?php echo $row['aproblam']; ?></td>
          <td><?php echo $row['amessage']; ?></td>
        </tr>
      <?php
      }
      ?>
    </table>
  </div>

  <?php include('dasfooter.php'); ?>

  <!--jqyary script-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>