<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio anatomia da divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $resgNumero = $_REQUEST['ano'] ?? date('Y') ;
    ?>
    <main>
        <form action="<?$_SERVER['PHP_SELF']?>" method="get">Vamos descobrir quantos ano você tem! Considerando que estamos no ano de <?= date('Y') ?>.
            <label for="number">Qual o ano do seu nascimento?
            </label>
            <input type="number" name="ano" id="ano" max="<?= date('Y') ?>" value="<?= $resgNumero ?>">
            <input type="submit" value="calcular">
        </form>
    </main>
    <section id="resultado">
            <?php 
                $calculo = date('Y') - $resgNumero;
                echo "Consideranteque estamos no ano de <strong>" .date('Y')."</strong> Sua idade é de <strong> $calculo Anos </strong>";
            ?>
    </section>
</body>
</html>