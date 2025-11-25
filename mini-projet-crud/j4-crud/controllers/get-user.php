<?php
    require "connexion.php"; 
    if (isset($_GET['user'])) {
        
        $userId = (int)$_GET['user'];
        
        $query = $db->prepare('SELECT * FROM users WHERE id = :id');
        
        $parameters = [
            'id' => $userId
        ];
        
        $query->execute($parameters);
        $user = $query->fetch(PDO::FETCH_ASSOC);

    } 
    else 
    {
        $user = false; 
    }
?>