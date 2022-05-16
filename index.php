<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="process.php" method="post">
        <label for="emp_num">ID</label>
        <input type="number" id="emp_num" name="emp_num" required>
        <label for="name">名前</label>
        <input type="text" id="name" name="name" required>
        <label for="pos">職位</label>
        <input type="text" id="pos" name="pos">
        <label for="email">メール</label>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>
    <br><br>    
    <table border="1" cellpadding="1" cellspacing="1">
    一覧
    <tr>
        <th>ID</th>
        <th>名前</td>
        <th>職位</th>
        <th>メール</th>
    </tr>

<?php
    
    $servername = "tqkdb.cegoxxvpdnqu.ap-northeast-1.rds.amazonaws.com";
    $username = "admin";
    $password = "12345678";
    $dbname = "tqkapp_db";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM Persons";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>"
                ."<td>" . $row["ID"]. "</td>" 
                ."<td>" . $row["name"]. "</td>" 
                ."<td>" . $row["position"]. "</td>" 
                ."<td>" . $row["email"]. "</td>"
                ."</tr>";
        }
    } else {
         echo "nothing";
    }

    mysqli_close($conn);

?>
    </table>

</body>
</html>
