<?php

try {

    $pdo = new PDO("mysql:host=".PDO_HOST.";dbname=".PDO_DBNAME.";charset=utf8mb4", PDO_MACHINE_USERNAME, PDO_MACHINE_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch(Exception $e){
    die($e->getMessage());
}


//function can be tweaked to change for user, vet, mod or admin.
//I hard-coded it to create admin.
function createAdmin($pdo, $username, $email, $password) {
    $hashPassword = password_hash($password, PASSWORD_BCRYPT);

    //insert into crudsbs database
    $query = $pdo->prepare(
                            "INSERT INTO users (username, email, password, is_admin)
                                VALUES (:username, :email, :password, TRUE)"
                        );
    //bindParam : values can be bound after
    //bindValue : bind values defined beforehand only
    $query->bindParam(':username',$username);
    $query->bindParam(':email', $email);
    $query->bindParam(':password', $hashPassword);
    $query->execute();
}

function logIn($pdo, $username, $email, $password){
    
}
