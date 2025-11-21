<?php
$username = $_GET["username"];
if (empty($username))   //Trouver grâce à Claude avec le prompt suivant "Comment savoir si une variable existe en php ?
                        //  et si elle n'existe pas, comment afficher "Anonymous" à la place" ?
{
    echo "Bonjours Anonymous";
} 
else 
{
    echo "Bonjour $username";
}
?>