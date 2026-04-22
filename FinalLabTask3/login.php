<?php session_start(); ?>

<form method="post">
Email: <input type="email" name="email"><br>
Password: <input type="password" name="password"><br>
<input type="submit" name="login">
</form>

<?php
if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($email == "" || $password == "") {
        echo "Please fill all fields";
    }
    else if($_SESSION['email'] == $email && $_SESSION['password'] == $password){
        $_SESSION['status'] = "loggedin";
        header("Location: dashboard.php");
    } else {
        echo "Invalid login";
    }
}
?>