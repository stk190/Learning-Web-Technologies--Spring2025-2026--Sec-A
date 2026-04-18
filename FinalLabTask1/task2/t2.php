<?php
$area = $perimeter = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $l = $_POST['length'];
    $w = $_POST['width'];
    $area = $l * $w;
    $perimeter = 2 * ($l + $w);
}
?>
<html>
<body>
<form method="post">
Length: <input type="number" name="length"><br>
Width: <input type="number" name="width"><br>
<input type="submit">
</form>
<?php
if($area!=''){
    echo "Area: $area <br> Perimeter: $perimeter";
}
?>
</body>
</html>