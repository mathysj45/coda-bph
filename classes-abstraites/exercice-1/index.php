<?php
require "AbstractUser.php";
require "Admin.php";
require "Member.php";

$member= new Member("Lucas", "Prout", "MEMBER", "Pêter");
$admin= new Admin("Jack", "JeRespire", "ADMIN");
var_dump($member);
var_dump($admin);
$admin->changeMemberRole($member);
var_dump($member);
$admin->changeMemberRole($member);
var_dump($member);
?>