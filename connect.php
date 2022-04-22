<?php
    $host = 'localhost';
    $username = 'root';
    $pass = 'root'; 
    $dbname = 'library';

    $connection = mysqli_connect($host, $username, $pass, $dbname);
    
    if(!$connection) die('Error connection');
?>