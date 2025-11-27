<?php
    require "user.php";
    $user = new User(1, "admin", "admin");
    $user2 = new User(2, "user", "user");
    echo "{$user->getID()}, {$user->getUsername()}, {$user->getPassword()}". "<br>";
    echo "{$user2->getID()}, {$user2->getUsername()}, {$user2->getPassword()}";
?>