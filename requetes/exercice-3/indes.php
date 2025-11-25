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
    $query = $db->prepare('INSERT INTO users (username, email, job) VALUES ("Batman", "bruce@wayne.com", "3")');
    $parameters = [
    ];
    $query->execute($parameters);
    $user = $query->fetch(PDO::FETCH_ASSOC);
    var_dump($user);
?>