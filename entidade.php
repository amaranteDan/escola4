<?php

require 'pdo.php';
require 'functions.php';

$cadastro = isset($_GET['cadastro']) ? $_GET['cadastro'] : NULL;
$nomeChave = getChave($cadastro); //getChave($cadastro);

$chave = isset($_GET['chave']) ? $_GET['chave'] : NULL;

$nome = '';

if (!is_null($chave)){
    $resultSet = $pdo->query("SELECT * FROM $cadastro WHERE $nomeChave=$chave");

    $nome = $resultSet->fetchColumn(1);

}