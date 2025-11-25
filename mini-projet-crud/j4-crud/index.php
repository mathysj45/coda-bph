<?php

if(isset($_GET["route"]))
{
    $route = $_GET["route"];
}
else
{
    $route = "list";
}

if($route === "delete" && isset($_GET['user']))
{
    require "controllers/delete-user.php";
    header('Location: '. 'index.php?route=list');
    exit;
}

require "templates/layout.phtml";

?>
