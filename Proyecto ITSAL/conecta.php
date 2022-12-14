<?php

$conectando =null;
$servidor = 'localhost';
$bd = 'album';
$user = 'root';
$pass = '123';

try {
    $conectando = new PDO('mysql:host='.$servidor.';dbname='.$bd, $user,$pass);
} catch(PDOExeception $e) {
    echo "ERROR CONEXION CON CONECTA";
}

return $conectando;
?>
