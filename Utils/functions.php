<?php
require_once 'Models/Model.php';

function e($message){
    return htmlspecialchars($message, ENT_QUOTES);
}

function isStringEmail($email){
    return preg_match('/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/', $email);
}

?>