<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Separador de numeros reais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1><strong>Numeros separados pela vírgula</strong></h1></header>
    <Main>
    <?php
    //resolução feita por mim, de forma mais complexa --------------------------------
    // $numero = $_POST["number"];
    // $numeroReal = number_format($numero,3,",",".");
    
    // $separaNumero = explode(",",$numeroReal);
    // $numInteiro = $separaNumero[0];
    // $numfracionado = $separaNumero[1];
    // echo "<p> o número inteiro é <strong>$numInteiro</strong> <br>
    // Já o número fracionado é <strong> $numfracionado</strong> </p>";

    $numero = $_REQUEST["number"] ?? 0;
    $int = (int) $numero;
    $parteFracionada = $numero - $int;
    echo "O número que irá ser analisado é <strong>".number_format($numero,3,",",".")."</strong><br>E a parte inteira será <strong>".number_format($int,0,",",".")."</strong><br>Já a parte fracionada é <strong>".number_format($parteFracionada,3,",",".")."</strong>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </Main>
</body>
</html>
