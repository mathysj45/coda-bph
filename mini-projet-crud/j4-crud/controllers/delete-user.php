<?php
    require "connexion.php";

    if (isset($_GET['user'])) 
    {
        
        $userId = (int)$_GET['user'];
        
        $query = $db->prepare('DELETE FROM users WHERE id = :id');
        
        $parameters = [
            'id' => $userId
        ];
        
        $query->execute($parameters);
    } 
    
    header('Location: '. '../index.php');
?>