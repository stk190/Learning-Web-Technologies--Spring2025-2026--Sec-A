<?php
$result='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $num = $_POST['num'];
    if($num % 2 == 0) $result="Even";
    else $result="Odd";
}
?>
<html>
<body>
<form method="post">
Number: <input type="number" name="num"><br>
<input type="submit">
</form>
<?php echo $result; ?>
</body>
</html>