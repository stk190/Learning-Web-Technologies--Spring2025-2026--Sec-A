<?php session_start(); 

if(!isset($_SESSION['status'])){
    header("Location: login.php");
}
?>

<h2>Dashboard</h2>

<a href="profile.php">View Profile</a><br>
<a href="edit.php">Edit Profile</a><br>
<a href="change_password.php">Change Password</a><br>
<a href="logout.php">Logout</a><br>