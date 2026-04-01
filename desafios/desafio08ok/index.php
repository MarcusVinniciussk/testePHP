<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz quadrada e cubica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $resgNumero = $_REQUEST['numero'] ?? 0;
    ?>
    <main>
        <form action="<?$_SERVER['PHP_SELF']?>" method="get">Raiz quadrada e cúbica
            <label for="numero">Digite o número</label>
            <input type="number" name="numero" id="numero" value="<?=$resgNumero?>">
            <input type="submit" value="Calcular">

        </form>
    </main>
    <section id="resultado">
            <?php 
            $raizQuad = number_format(sqrt($resgNumero),3,",",".");
            $teste = pow($resgNumero,(1/3));
            $raizCubica = number_format($teste,3,",",".");
            echo "A partir do número escolhido que foi <strong> $resgNumero</strong> <br>A raiz quadrada é:<strong>$raizQuad</strong><br>E a sua raiz cúbica é <strong>$raizCubica</strong>";
            ?>
    </section>
</body>
</html>