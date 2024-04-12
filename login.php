<?php
require "template/header.php";
?>

<h1>Login</h1>

<form action="">
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