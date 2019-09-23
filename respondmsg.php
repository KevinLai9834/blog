<?php
    include_once("connection.php");
    session_start();
    if( $_SERVER['REQUEST_METHOD'] == "POST") {
        $a_id = $_POST['a_id'];
        $m_account = $_SESSION['account'];
        $date = date("Y-m-d H:i:s");      
        $content = $_POST['resContent'];
        $query = "INSERT INTO  respond (a_id,m_account,respond_time,content) 
        VALUES($a_id,'$m_account','$date','$content')";
        $result = mysqli_query($conn, $query);
    }

?>