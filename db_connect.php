<?php

$hostname =  gethostname();

if ($hostname=="raspberrypi") {
    $edbhost = "localhost";
    $edbuser = "query_user";
    $edbpass = "tiger007"; 
    $edbname = "gj75npjq39icxbe1"; 
} else {
    $edbhost = getenv('nmr_db_host');
    $edbuser = getenv('nmr_db_user');
    $edbpass = getenv("nmr_db_password"); 
    $edbname = getenv("nmr_db_database"); 
}

// echo $hostname . " - " . $edbhost . " - " . $edbuser . " - " . $edbpass . " - " . $edbname;
$conn = mysqli_connect($edbhost, $edbuser, $edbpass) or die ('Error connecting to mysql');  
$connection = mysqli_select_db($conn, $edbname); 
?>