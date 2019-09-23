<?php
session_start();
if(isset($_SESSION['account'])) {
    echo $_SESSION['account'];
}else{
    echo "UserStateless";
}
?>