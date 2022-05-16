<?php
    $servername = "tqkdb.cegoxxvpdnqu.ap-northeast-1.rds.amazonaws.com";
    $username = "admin";
    $password = "12345678";
    $dbname = "tqkapp_db";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM Persons";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["ID"]. " Name: " . $row["name"]. " Position: " . $row["position"]. " Email: " . $row["email"]."<br>";
        }
    } else {
         echo "nothing";
    }

    mysqli_close($conn);

?>