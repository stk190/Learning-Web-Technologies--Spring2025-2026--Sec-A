<?php
$max='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    if($a>$b && $a>$c) $max=$a;
    elseif($b>$a && $b>$c) $max=$b;
    else $max=$c;
}
?>
<html>
<body>
<form method="post">
A: <input type="number" name="a"><br>
B: <input type="number" name="b"><br>
C: <input type="number" name="c"><br>
<input type="submit">
</form>
<?php echo $max; ?>
</body>
</html>