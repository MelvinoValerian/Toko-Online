<?php
$conn = mysqli_connect("localhost","root","","db_toko");
// check connection 
 if ($conn) {
    echo "";
 } else {
    echo "Failed to connect to the database";
 }
?>