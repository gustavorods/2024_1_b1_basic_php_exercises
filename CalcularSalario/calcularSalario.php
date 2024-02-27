<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
</head>
<body>
    <?php
    $horasTrabalhadas = $_POST['txtHoras']; 
    $valorHora = $_POST['txtValor']; 
    $salario = $valorHora * $horasTrabalhadas;
    echo "De acordo com as informações inseridas, o seu salário é R$: " . $salario;
    ?>
</body>
</html>