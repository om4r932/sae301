<?php

session_start();

require_once "Utils/functions.php";
require_once "Models/Model.php";
require_once "Controllers/Controller.php";
// require_once "loadrsa.php";

$controllers = ["home", 'contact', 'bdl', 'pdf', 'ctrlsae', 'listbdl', 'moncompte', 'addbdl', 'listbdl', 'admin', 'formaddprest', 'addrole', 'client'];
$controller_default = "home";

if (isset($_GET['controller']) and in_array($_GET['controller'], $controllers)) {
    $nom_controller = $_GET['controller'];
} else {
    $nom_controller = $controller_default;
}

$nom_classe = 'Controller_' . $nom_controller;

$nom_fichier = 'Controllers/' . $nom_classe . '.php';
 



if (is_readable($nom_fichier)) {
    include_once $nom_fichier;
    new $nom_classe();
} else {
    die("Error 404: not found!");
}