<?php
    include_once("connection.php");
    session_start();
    if( $_SERVER['REQUEST_METHOD'] == "POST") {
        $title = $_POST['pubTitle'];
        $date = date("Y-m-d");
        $m_account = $_SESSION['account'];
        $content = $_POST['pubContent'];
        // mysqli_escape_string($content);
        $query = "INSERT INTO  article (m_account,title , create_time , content) 
        VALUES('$m_account','$title','$date','$content')";
        $result = mysqli_query($conn, $query);
    }

?>