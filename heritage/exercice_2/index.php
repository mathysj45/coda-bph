<?php
    require "warrior.php";
    require "mage.php";
    $character = new Character("le looser", 1);
    $warrior = new Warrior(33550336, "Khaslana", 12);
    $mage = new Mage(666, "Lucifer", 666);

    echo "{$warrior->introduce ($warrior->getName())} j'ai {$warrior->getLife()} de point de vie et {$warrior->getEnergy()} d'énergie. <br>";
    echo "{$mage->introduce ($mage->getName())} j'ai {$mage->getLife()} de point de vie et {$mage->getMana()} de mana. <br>";
    echo "{$character->introduce ($character->getName())} j'ai {$character->getLife()} de point de vie <br>";
?>