<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Aritméticos</title>
</head>
<body>
    <h1>contador para salario</h1>
    <?php 
    $salario = 5000;
    $salarioMin = 1380;
    $contador = 0;
    $conta = intdiv($salario,$salarioMin);
    $resto = $salario % $salarioMin;
    print "$conta <br> $resto";
    ?>
</body>
</html>