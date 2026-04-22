<?php session_start(); ?>

<h2>Profile</h2>

Name: <?php echo $_SESSION['name']; ?><br>
Email: <?php echo $_SESSION['email']; ?><br>