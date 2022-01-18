<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
</head>
<body>
    <h1>Cadstro de Alunos</h1>
    <a href="form.php?cadastro=alunos">Incluir Alunos</a>
    <table>
        <thead>
            <tr>
                <th>Matricula</th> 
                <th>Nome</th> 
            </tr>
        </thead>
        <tbody>
            <?php
            $cadastro = 'alunos';
            require 'listar.php'
            ?>
        </tbody>
        </table>
        <a href="index.php">Homepage</a>
</body>
</html>