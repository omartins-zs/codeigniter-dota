<?php
$mysqli = new mysqli("db", "gabigol", "teste_admin", "projetinho");

if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
} else {
    echo "Conexão bem-sucedida!<br>";
}

$mysqli->close();
?>
