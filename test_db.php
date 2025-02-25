<?php
$mysqli = new mysqli("db", "user", "password", "code_dota");

if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
} else {
    echo "Conexão bem-sucedida!";
}
?>
