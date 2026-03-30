<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1><strong>Resultado Final</strong></h1></header>
</body>
<main>
    <?php 
    $resultadoNumero = $_GET["number"] ?? 0;
    $antecessorNumero = $resultadoNumero - 1;
    $sucessorNumero = $resultadoNumero + 1;

    echo "O Numero escolhido é <strong>$resultadoNumero</strong> <br>
    Seu antecessor é <strong>$antecessorNumero</strong> <br>
    Seu sucessor é <strong>$sucessorNumero</strong>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
</main>
<body>
    <header><h2>Resultado do sorteador</h2></header>
</body>
<main>
    <?php
    $sorteador = rand(0,100);
    echo "O numero sorteado é $sorteador!<br>";

    ?>
</main>
</html>