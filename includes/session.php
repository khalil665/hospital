<?php
require_once __DIR__ . '/../config/db.php';

function clean($data){
    global $conn;
    return mysqli_real_escape_string($conn, trim($data));
}

function redirect($url){
    header("Location: $url");
    exit();
}
?>