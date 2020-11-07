<!doctype html>

<?php
  include 'db_connect.php';
  $id = $_GET['id'];      
  $sql_query="CALL getListing($id)";
  $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
  $row = $resultset->fetch_assoc();
?>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>NC-MUSIC-ROCKS // <?php echo $row["name"]; ?></title>
  </head>



  <body>

  <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.php">NC-MUSIC-ROCKS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</header>

<br /><br /><br /><br />


<main role="main" class="flex-shrink-0">
  <div class="container">  
  


<div class="card">
<img class="card-img-top" src="<?php echo $row["coversource"]; ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row["name"]; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $row["category"]; ?></h6>
    <p class="card-text">
        <?php echo $row["about"]; ?>
        <?php echo $row["bio"]; ?>
        </p>
    <a href="<?php echo $row["link"]; ?>" class="card-link">View on Facebook</a>
    <a href="#" class="card-link">Goes Nowhere</a>
    <a href="index.php" class="card-link">Back to List</a>
  </div>
</div>

</main>

<br /><br /><br /><br />

<footer class="container">
  <p>&copy; Company 2017-2019</p>
</footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>





