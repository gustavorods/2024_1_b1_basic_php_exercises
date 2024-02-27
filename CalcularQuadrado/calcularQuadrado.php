<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Quadrado</title>
</head>
<body>
    <?php
        // Entrada
        $ladoA = $_POST["txtLadoA"];
        $ladoB = $_POST["txtLadoB"];

        // Processamento 
        $soma = $ladoA + $ladoB;
        $somaAoQuadrado = pow($soma, 2);

        // Saída
        echo "A soma dos valores é: " . $soma . "<br>";
        echo "O quadrado da soma é: " . $somaAoQuadrado . "<br>";
    ?>
</body>
</html>