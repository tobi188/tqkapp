<?php 
    if(isset($_POST["emp_num"]))  $id = $_POST["emp_num"];
    if(isset($_POST["name"]))  $name = $_POST["name"];
    if(isset($_POST["pos"]))  $pos = $_POST["pos"];
    if(isset($_POST["email"]))  $email = $_POST["email"];

    if(!$name){
        header('Location:index.php');
    }
    
    $servername = "tqkdb.cegoxxvpdnqu.ap-northeast-1.rds.amazonaws.com";
    $username = "admin";
    $password = "12345678";
    $dbname = "tqkapp_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO Persons "
          ."VALUES('{$id}','{$name}','{$pos}','{$email}')";

    $result = mysqli_query($conn, $sql);

    header('Location:index.php');
   
?>