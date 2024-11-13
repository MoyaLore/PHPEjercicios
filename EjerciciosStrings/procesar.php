<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    
    // Mensaje de bienvenida
    echo "Bienvenido, " . $nombre . " " . $apellido . "<br>";

    // Escribir el nombre y apellido al revés
    echo "Nombre al revés: " . strrev($nombre) . "<br>";
    echo "Apellido al revés: " . strrev($apellido) . "<br>";

    // Contar las letras del nombre, apellido y total
    $nombre_len = strlen($nombre);
    $apellido_len = strlen($apellido);
    $total_len = $nombre_len + $apellido_len;
    
    echo "Número de letras en el nombre: " . $nombre_len . "<br>";
    echo "Número de letras en el apellido: " . $apellido_len . "<br>";
    echo "Número total de letras: " . $total_len . "<br>";

    // Escribir el nombre y apellido en mayúsculas
    echo "Nombre en mayúsculas: " . strtoupper($nombre) . "<br>";
    echo "Apellido en mayúsculas: " . strtoupper($apellido) . "<br>";

    // Primer y último carácter del nombre y apellido
    echo "Primer carácter del nombre: " . $nombre[0] . "<br>";
    echo "Último carácter del nombre: " . $nombre[$nombre_len - 1] . "<br>";
    echo "Primer carácter del apellido: " . $apellido[0] . "<br>";
    echo "Último carácter del apellido: " . $apellido[$apellido_len - 1] . "<br>";

    // Cambiar todas las vocales del nombre y apellido por la letra 'u'
    $nombre_modificado = str_ireplace(['a', 'e', 'i', 'o', 'u'], 'u', $nombre);
    $apellido_modificado = str_ireplace(['a', 'e', 'i', 'o', 'u'], 'u', $apellido);
    
    echo "Nombre con vocales cambiadas por 'u': " . $nombre_modificado . "<br>";
    echo "Apellido con vocales cambiadas por 'u': " . $apellido_modificado . "<br>";

    // Operaciones con los números
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1 = (float) $_POST['num1'];
        $num2 = (float) $_POST['num2'];

        // Mostrar operaciones
        echo "<br>Operaciones con los números:<br>";
        echo "Suma: " . ($num1 + $num2) . "<br>";
        echo "Diferencia: " . ($num1 - $num2) . "<br>";
        echo "Producto: " . ($num1 * $num2) . "<br>";
        if ($num2 != 0) {
            echo "Cociente: " . ($num1 / $num2) . "<br>";
        } else {
            echo "No se puede dividir por 0.<br>";
        }
    }
}
?>
