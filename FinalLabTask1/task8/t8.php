<html>
<body>
<?php
$arr=[
[1,2,3,'A'],
[1,2,'B','C'],
[1,'D','E','F']
];

for($i=0;$i<3;$i++){
    for($j=0;$j<4;$j++){
        echo $arr[$i][$j]." ";
    }
    echo "<br>";
}
?>
</body>
</html>