<?php
    $host = '127.0.0.1';
    $dbName = 'kniffel';
    $dbUser = 'root';
    $dbPw = 'VetirIrcilv88!';
    try {
        $conn=new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPw);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: ".$e->getMessage();
        exit();
    }
?>