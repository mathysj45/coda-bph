<?php
    require "connexion.php";

    $query = $db->prepare("INSERT INTO users (username, email, job) VALUES (:username, :email, :job)");

    $parameters = [
        'username' => $_POST['name'],
        'email' => $_POST['email'],
        'job' => $_POST['job']
    ];

    $query->execute($parameters);

    $id = $db->lastInsertId();
    header('Location: '. '../index.php');
?>