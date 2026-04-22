<?php session_start(); ?>

<form method="post">
Enter Email: <input type="email" name="email"><br>
<input type="submit" name="check">
</form>

<?php
if(isset($_POST['check'])){
    if($_SESSION['email'] == $_POST['email']){
        echo "Your password is: ".$_SESSION['password'];
    } else {
        echo "Email not found";
    }
}
?>