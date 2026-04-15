<?php
$username = $_POST['username'] ?? '';
if($username!='') $username = strtoupper($username);
?>
<!DOCTYPE html>
<html>
<body>

<form method="post">
Username: <input type="text" name="username" value="<?php echo $username; ?>">
<input type="submit">
</form>

<?php echo $username; ?>

</body>
</html>