<html>
<body>
<form method="post">
<input type="submit" value="Show">
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    for($i=10;$i<=100;$i++){
        if($i%2!=0) echo $i." ";
    }
}
?>
</body>
</html>