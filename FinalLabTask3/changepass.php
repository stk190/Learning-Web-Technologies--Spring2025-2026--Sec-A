
<?php session_start(); ?>

<form method="post">
New Password: <input type="password" name="pass"><br>
<input type="submit" name="change">
</form>

<?php
if(isset($_POST['change'])){
    $_SESSION['password'] = $_POST['pass'];
    echo "Password Changed";
}
?>