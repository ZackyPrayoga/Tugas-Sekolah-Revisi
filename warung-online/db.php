<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'db_warung-online';

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Hagal terhubung ke database');
?>