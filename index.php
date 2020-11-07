<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>NC-MUSIC-ROCKS</title>
  </head>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'db_connect.php';
?>

  <body>

  <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">NC-MUSIC-ROCKS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</header>

<br /><br /><br /><br />


<main role="main" class="flex-shrink-0">
  <div class="container">  
  

<ul class="list-group">
<?php			
			$sql_query="SELECT id,name,category,about,link FROM `nc-music-rocks` order by name ASC";
			$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while($rows = mysqli_fetch_array($resultset) ) { ?>

<a href="detail.php?id=<?php echo $rows["id"]; ?>" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"><?php echo $rows["name"]; ?></h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1"><?php echo $rows["about"]; ?></p>
    <small class="text-muted"><?php echo $rows["category"]; ?></small>
  </a>

  <?php } ?>

</ul>


    

  </div>
</main>

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





