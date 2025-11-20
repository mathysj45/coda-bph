<?php
    $users = 
    [
        [
            "firstName" => "Hugues",
            "lastName" => "Froger"
        ],
        [
            "firstName" => "Mari",
            "lastName" => "Doucet"
        ]
    ];
    $i = 0;
    
    while($i < count($users))  //Tant que $i n'est pas à la fin du tableau
        {
            foreach($users[$i] as $user) //Affiche chaque valeur de chaque sous tableau 
                {
                    echo "$user <br>";
                }
            $i++;
        }
?>