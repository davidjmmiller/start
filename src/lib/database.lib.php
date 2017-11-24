<?php

function db_connect(){
    global $conf;
    static $conn;

    if ($conn) {
        return $conn;
    }
    $servername = $conf['db_host'];
    $username = $conf['db_user'];
    $password = $conf['db_pass'];
    $dbname = $conf['db_name'];;
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    return $conn;
}


/*
    $db = db_connection();
    $result = $db->query('select * from user where username = ? password = ?');
    $row = $result->fetch_assoc();

    */
