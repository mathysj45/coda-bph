<?php
    require "character.php";
    $character = new Character("Cayde-6");

    $character->getWeapon()->setName("As de pique");
    $character->getWeapon()->setDamage("140");

    echo "{$character->getName()} utilise l'{$character->getWeapon()->getName()} et t'inflige {$character->getWeapon()->getDamage()} de dégâts. <br>";
    echo "{$character->fight()}";
?>