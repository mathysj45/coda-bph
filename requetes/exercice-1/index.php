<?php
    $host = "Localhost";
    $port = "3306";
    $dbname = "sqlintro";
    $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

    $user = "root";
    $password = "demopma";

    $db = new PDO(
        $connexionString,
        $user,
        $password
    );

    $query = $db->prepare('SELECT * FROM users');
    $query->execute();
    $users = $query->fetchAll(PDO::FETCH_ASSOC);
    var_dump($users);
?>