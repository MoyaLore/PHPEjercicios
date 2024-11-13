<!DOCTYPE html>
<html>
<body>

<?php
$n1 =rand(0,20);
$n2 =rand(0,20);

echo "El numero 1 es $n1";
echo "El número 2 es $n2";

if ($n1 > $n2) {
    echo "El número $n1 es mayor que $n2";
} elseif ($n1 == $n2) {
    echo "$n1 es igual que $n2";
} else {
    echo "$n1 es menor que $n2";
}
?>
 
</body>
</html>
