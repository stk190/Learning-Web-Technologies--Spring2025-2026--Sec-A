<?php
$gender = $_POST['gender'] ?? '';
?>
<!DOCTYPE html>
<html>
<body>

<form method="post">
<input type="radio" name="gender" value="Male" <?php if($gender=='Male') echo 'checked'; ?>>Male<br>
<input type="radio" name="gender" value="Female" <?php if($gender=='Female') echo 'checked'; ?>>Female<br>
<input type="radio" name="gender" value="Other" <?php if($gender=='Other') echo 'checked'; ?>>Other<br><br>
<input type="submit">
</form>

<?php if($gender!='') echo $gender; ?>

</body>
</html>