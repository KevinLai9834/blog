<?php
    include_once("connection.php");
    if( $_SERVER['REQUEST_METHOD'] == "GET") {
        $account = $_POST['regAccount'];
        $password = $_POST['regPassword'];
        $query = "INSERT INTO  member (account , password ) VALUES('$account','$password')";
        $result = mysqli_query($conn, $query);
        $query2 = "SELECT * FROM member where account='$account'" ;
        $result2 = mysqli_query($conn, $query2);
        $row = mysqli_fetch_assoc($result2);
        session_start();
        $_SESSION['account'] = $row['account'];
        if(isset($_SESSION['account'])) {
            echo $_SESSION['account'];
        }else{
            echo "UserStateless";
        }
    }

?>