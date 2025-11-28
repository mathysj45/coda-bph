<?php
    require "connexion.php";
    require "user.php";

    
    $superman = [
    "first_name" => "Clark",
    "last_name" => "Kent",
    "email" => "clark.kent@test.fr"
    ];
    
    $superman= new User($superman["first_name"], $superman["last_name"], $superman["email"]);
        
    $query = $db->prepare('INSERT INTO users (first_name, last_name, email) VALUES (:first_name, :last_name, :email)');
    $parameters = [
        'first_name' => $superman->getFirstName(),
        'last_name' => $superman->getLastName(),
        'email' => $superman->getEmail()
    ];

    $query->execute($parameters);
    // $user = $query->fetch(PDO::FETCH_ASSOC);
    $id = $db->lastInsertId();
    $superman->setId($id);

    echo "User inséré avec l'ID : " . $superman->getId();
    
    // echo "<pre>";
    // var_dump($users);
    // echo "</pre>";
    // if($user)
    // {
        //     $userdb = new User(
            //         $user['first_name'],
            //         $user['last_name'],
            //         $user['email']
            //     );
            // }
            
    // $users = [];
    // foreach($user as $row)
    // {
         //     $newUser = new User (
        //         $row['first_name'],
        //         $row['last_name'],
        //         $row['email']
        //     );
        
        //     $users[] = $newUser; 
    // }
?>