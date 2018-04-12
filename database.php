<?php
    $host='localhost';
    $dbUser='root';
    $dbPass='';
    $dbName='thegioididong';
    if(!$dbConn=mysqli_connect($host, $dbUser, $dbPass, $dbName)){
        die('Cannot connect to server');
    }
    if(!mysqli_select_db($dbConn, $dbName)){
        die('Cannot connect to database');
    }
?>