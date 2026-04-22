<?php session_start(); ?>

<form method="post">
Name: <input type="text" name="name"><br>
Email: <input type="email" name="email"><br>
<input type="submit" name="update">
</form>

<?php
if(isset($_POST['update'])){
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    echo "Updated";
}
?>