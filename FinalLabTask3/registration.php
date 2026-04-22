<?php session_start(); ?>

<form method="post">
Name: <input type="text" name="name"><br>
Email: <input type="email" name="email"><br>
Password: <input type="password" name="password"><br>
<input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    if ($_SESSION['name'] && $_SESSION['email'] && $_SESSION['password']) {
        echo "Registration successful";
    } else {
        echo "Please fill all fields";
    }
}
?>