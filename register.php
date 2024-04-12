<?php
require "template/header.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    //retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    //
    $hashPassword = password_hash($password, PASSWORD_BCRYPT);

    //insert into crudsbs database
    $stmt = $pdo->prepare(
                            "INSERT INTO users (username, email, password, is_admin)
                                VALUES (:username, :email, :password, TRUE)"
                        );
    //bindParam : values can be bound after
    //bindValue : bind values defined beforehand only
    $stmt->bindParam(':username',$username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashPassword);
    $stmt->execute();
}
?>

<h1>Register as Admin</h1>

<form action="" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" required>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" required>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>
    <input type="submit" value="Submit">
</form>

<?php
require "template/footer.php";
?>