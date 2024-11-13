<!DOCTYPE html>
<html>
<body>

<?php
$numero=rand(-100,100);

echo "el número es $numero";

if($numero > 0){
echo "El número es positivo";
} elseif ($numero < 0) {
echo "El número es negativo";
} elseif ($numero == 0) {
echo "El número es cero";
}
?> 

</body>
</html>
