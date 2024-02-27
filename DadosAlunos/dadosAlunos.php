<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $RG= $_POST['rg'];
    $curso = $_POST['cursos'];
    $modulo = $_POST['modulo'];

    echo "Segue abaixo as informações digitadas: ". '<br>';
    echo "Nome digitado: " . $nome. '<br>';
    echo "Telefone digitado: " . $telefone. '<br>';
    echo "Curso escolhido: " . $curso. '<br>';
    echo "RG digitado: " . $RG. '<br>';
    echo "Módulo digitado: " . $modulo. '<br>';

    ?>
</body>
</html>