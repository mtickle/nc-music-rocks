<?php


require __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/');

if(file_exists(".env")) {
    $dotenv->load();
    $edbhost = $_ENV['nmr_db_host'];
    $edbuser = $_ENV['nmr_db_user'];
    $edbpass = $_ENV["nmr_db_password"]; 
    $edbname = $_ENV["nmr_db_database"]; 

} else {
    $edbhost = env('nmr_db_host');
    $edbuser = env('nmr_db_user');
    $edbpass = env("nmr_db_password"); 
    $edbname = env("nmr_db_database"); 
};



$conn = mysqli_connect($edbhost, $edbuser, $edbpass) or die ('Error connecting to mysql');  
$connection = mysqli_select_db($conn, $edbname); 



?>