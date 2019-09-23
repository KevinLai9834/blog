<?php
    include_once("connection.php");
    if( $_SERVER['REQUEST_METHOD'] == "POST") {
    $account = $_POST['txtAccount'];
    $query = "SELECT * FROM member where account='$account'" ;
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
        session_start();
        $_SESSION['account'] = $row['account'];
        $_SESSION['password'] = $row['password'];
    }
    echo json_encode($data);
    }

?>