<?php
require "template/header.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){

    //retrieve form stuff
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    //we compare form stuff to what exists in database
    $query = $pdo->prepare("SELECT * FROM users
                            WHERE username = :username AND email = :email"
                        );
    $query->bindParam(':username',$username);
    $query->bindParam(':email',$email);
    $query->execute();
    $user = $query->fetch(); //gives the array or row from the query
    
    //compare input password with db password
    if($user && password_verify($password, $user['password'])){
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];
        header("Location: dashboard.php");
    } else {
        die("Error");
    }
}

?>

<h1>Login</h1>

<form action="" method="post">
    <label for="username">Username : </label>
    <input type="text" name="username" id="username" required>
    <label for="email">Email : </label>
    <input type="text" name="email" id="email" required>
    <label for="email">Password : </label>
    <input type="password" name="password" id="password" required>
    <input type="submit" value="Login">
</form>

<a href="register.php">Register</a>

<?php
require "template/footer.php";
?>