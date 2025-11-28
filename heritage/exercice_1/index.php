<?php
    require "reader.php";

    $reader = new Reader("mon@mail.com", "mdp");

    $books=$reader->addBookToFavorites("Tokyo Ghoul");
    $books=$reader->addBookToFavorites("Berserk");

    foreach($books as $book)
    {
        echo "$book <br>";
    }

    $books=$reader->removeBookFromFavorites("Berserk");

    foreach($books as $book)
    {
        echo "<br>$book <br>";
    }

    $info = $reader->login();

    echo "<br>Email : " . $info['login'] . "<br>";
    echo "Mot de passe : " . $info['password'] . "<br>";
?>