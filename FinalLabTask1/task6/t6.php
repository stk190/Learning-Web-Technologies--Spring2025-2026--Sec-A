<?php
$msg='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $arr=[10,20,30,40,50];
    $search=$_POST['num'];
    $found=false;
    foreach($arr as $v){
        if($v==$search){ $found=true; break; }
    }
    if($found) $msg="Found";
    else $msg="Not Found";
}
?>
<html>
<body>
<form method="post">
Search: <input type="number" name="num"><br>
<input type="submit">
</form>
<?php echo $msg; ?>
</body>
</html>