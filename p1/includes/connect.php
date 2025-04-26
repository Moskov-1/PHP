<?php 
    //                                  [host, user, password, database]
    $conn = mysqli_connect("localhost","root","","voting") or die("connection failed");
    if (!$conn) {
        echo "not connected";
    }
?>