<?php
    $servername = "tqkdb.cegoxxvpdnqu.ap-northeast-1.rds.amazonaws.com";
    $username = "admin";
    $password = "Toquockhanh93";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>