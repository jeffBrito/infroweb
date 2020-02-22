<?php
    $dns='mysql:host=138.255.0.110;dbname=INFROSYSTEM10';
    $user = 'root';
    $password = 'vaiof233';
    try {
        $conn = new PDO($dns,$user,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Throwable $e) {
        echo $e->getMessage();
    }