<?php
require 'pdo.php';

$matricula = (integer)isset($_GET['matricula']) ? $_GET['matricula'] : NULL; //Pega os dados via $_GET

$pdo->exec("DELETE FROM alunos WHERE matricula=$matricula");
header('Location: index.php');