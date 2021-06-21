<?php

require_once "db_credentials.php";

// CONNECT TO DB
function db_connect() {
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    db_confirm_connect();
    return $connection;
}

// CLOSE DB
function db_disconnect($connection) {
    if(isset($connection)) {
        mysqli_close($connection);
    }
} 

// CONFIRM DB CONNECTION WAS SUCCESSFUL
function db_confirm_connect() {
    if(mysqli_connect_errno()) {
        $msg = "Database Connection Failed: ";
        $msg .= mysqli_connect_error();
        $msg .= " (" . mysqli_connect_errno() . ") ";
        exit($msg);
    }
}

?>