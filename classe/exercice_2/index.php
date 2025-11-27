<?php
    require "character.php";
    $character = new Character(1);
    echo $user->getFullName();
    $Sarah = new Character(2);
    $Sarah->setFirstName("Sarah");
    $Sarah->setLastName("Connor");
    echo $Sarah->getFullName();
?>