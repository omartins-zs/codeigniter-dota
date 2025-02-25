<?php

$dir = "";
if($_SERVER['SERVER_NAME'] == "sitedozero.com.br"){
    $dir = "/";
}else if($_SERVER['SERVER_NAME'] == "localhost"){
    $dir = "/codeIgniter-dota/";
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <base href="<?= base_url() ?>">
    <title><?= $titulo ?></title>
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>

<body style="background-color: #010101">