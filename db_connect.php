<?php

echo gethostname();

require __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/');

if(file_exists(".env")) {
    $dotenv->load();
    $edbhost = $_ENV['nmr_db_host'];
    $edbuser = $_ENV['nmr_db_user'];
    $edbpass = $_ENV["nmr_db_password"]; 
    $edbname = $_ENV["nmr_db_database"]; 
} else {
    $edbhost = getenv('nmr_db_host');
    $edbuser = getenv('nmr_db_user');
    $edbpass = getenv("nmr_db_password"); 
    $edbname = getenv("nmr_db_database"); 
};

echo $edbhost;


$conn = mysqli_connect($edbhost, $edbuser, $edbpass) or die ('Error connecting to mysql');  
$connection = mysqli_select_db($conn, $edbname); 



?>