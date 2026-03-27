<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <Main>
        <h1><strong>Número Sorteado</strong></h1>
        <?php
        $min = 0;
        $max =100;
        $sorteio = mt_rand($min,$max);
        echo "<p>O Número aleatório desta vez é: <strong>$sorteio</strong>!</p>"
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro número</button>
    </Main>
</Body>
</html>