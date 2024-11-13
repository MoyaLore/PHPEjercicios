<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nombre = htmlspecialchars($_POST['nombre']);
$apellido = htmlspecialchars($_POST['apellido']);
echo "Nombre: " . $nombre . "<br>";
echo "Apellido: " . $apellido . "<br>";
echo "Bienvenido" $nombre $apellido;
echo strrev($nombre $apellido);
echo "Tu nombre tiene" str_word_count($nombre) "carácteres";
echo "Tu apellido tiene" str_word_count($apellido) "carácteres";
echo "El número total de letras son:" str_word_count($nombre $apellido);
echo "Tu nombre en mayúsculas es" strtoupper($nombre $apellido);
echo "La primera letra es" .$nombre[strlen($nombre) -1] "y la última es" .$apellido[strlen($apellido)-1];
echo "Y tu nombre tras haber cambiado las vocales es:"



echo var_dump($nombre);
}
?>
