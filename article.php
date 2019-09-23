<?php
    include_once("connection.php");
    if( $_SERVER['REQUEST_METHOD'] == "GET") {
        $query = "SELECT * FROM  article";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        echo json_encode($data);
    }
?>