<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professores</title>
</head>
<body>
    <h1>Cadastro de Professores</h1>
    <a href="form.php?cadastro=professores">Incluir Professor</a>
    <table>
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nome</th>

            </tr>
        </thead>
        <tbody>
            <?php $cadastro='professores';
            require 'listar.php';
            ?>
        </tbody>
    </table>
    <a href="index.php">Homepage</a>
</body>
</html>