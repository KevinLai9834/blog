<?php
    include_once("connection.php");
    if( $_SERVER['REQUEST_METHOD'] == "POST") {
        $a_id = $_POST['a_id'];
        $query = "SELECT * FROM  respond where a_id = '$a_id'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        echo json_encode($data);
    }
?>