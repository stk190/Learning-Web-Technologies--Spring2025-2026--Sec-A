<?php
$fname = $_POST['fname'] ?? '';
$lname = $_POST['lname'] ?? '';
$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if($fname=='' || $lname==''){
        $msg = 'Fields cannot be empty';
    } elseif(strlen($fname)<2 || strlen($lname)<2){
        $msg = 'Minimum 2 characters required';
    } else {
        $msg = 'Submitted: '.$fname.' '.$lname;
    }
}
?>
<!DOCTYPE html>
<html>
<body>

<form method="post">
First Name: <input type="text" name="fname" value="<?php echo $fname; ?>"><br><br>
Last Name: <input type="text" name="lname" value="<?php echo $lname; ?>"><br><br>
<input type="submit">
</form>

<?php echo $msg; ?>

</body>
</html>