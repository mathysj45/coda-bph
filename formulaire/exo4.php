<?php
$users = [
    [
        "name" => "Mari",
        "favoriteColor" => "blue"
    ],
    [
        "name" => "Santa",
        "favoriteColor" => "red"
    ],
    [
        "name" => "Shrek",
        "favoriteColor" => "green"
    ],
    [
        "name" => "Iron Man",
        "favoriteColor" => "red"
    ],
    [
        "name" => "Hulk",
        "favoriteColor" => "green"
    ],
    [
        "name" => "Hugues",
        "favoriteColor" => "blue"
    ]
];

    $color = $_GET['color'];

    foreach($users as $user)
    {
        if ($user['favoriteColor'] === $color)
        {
            echo "{$user['name']}<br>";
        }
    }
?>