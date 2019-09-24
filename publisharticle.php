<?php
    include_once("connection.php");
    if( $_SERVER['REQUEST_METHOD'] == "POST") {
        session_start();
        $title = $_POST['pubTitle'];
        $date = date("Y-m-d");
        $m_account = $_SESSION['account'];
        $content = $_POST['pubContent'];
        $query = "INSERT INTO  article (m_account,title , create_time , content) 
        VALUES('$m_account','$title','$date','$content')";
        $result = mysqli_query($conn, $query);
    }

?>