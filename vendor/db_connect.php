<?php

//use Dotenv;

require __DIR__ . '/vendor/autoload.php';

//$dotenv = new Dotenv(__DIR__ . "/vendor/");
//$dotenv->load();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/');
$dotenv->load();

//$vendor_audoload = __DIR__.'vendor/autoload.php';
//$dotenv = new Dotenv();
//$dotenv->load(__DIR__.'/.env');

$edbhost = $_ENV['nmr_db_host'];
$edbuser = $_ENV['nmr_db_user'];
$edbpass = $_ENV("nmr_db_password"); 
// $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');  
 //$dbname = getenv("nmr_db_database");  
// $connection = mysqli_select_db($conn, $dbname); 
//$dotenv = new DotEnv\DotEnv();
//$dotenv = new Dotenv\Dotenv(__DIR__.'/../');
//$dotenv->load();

//$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
//$dotenv->load();

// $dbhost = 'localhost';  
// $dbuser = 'query_user';  
// $dbpass = "tiger007";  

// echo "----";
// echo $cdbuser;
// echo $dbuser;
// echo "----";

$conn = mysqli_connect($edbhost, $edbuser, $edbpass) or die ('Error connecting to mysql');  
$dbname = 'gj75npjq39icxbe1';  
$connection = mysqli_select_db($conn, $dbname); 



?>