<?php

try {

    $pdo = new PDO("mysql:host=".PDO_HOST.";dbname=".PDO_DBNAME.";charset=utf8mb4", PDO_MACHINE_USERNAME, PDO_MACHINE_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch(Exception $e){
    die($e->getMessage());
}

function createUser(int $type, string $username, string $password){

}

function createAdmin($username, $email, $password) {

}