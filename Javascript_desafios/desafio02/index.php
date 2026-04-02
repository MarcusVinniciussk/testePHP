<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio juros compostos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor = $_REQUEST['valor'] ?? 0 ;
        $meses = $_REQUEST['meses'] ?? 0 ;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">Calculo de juros
            <label for="valor">Valor que deseja investis</label>
            <input type="number" name="valor" id="valor" min="0" step="0.1" value="<?= $valor ?>" required>
            <label for="meses">quantos Meses deseja deixar aplicado o valor?</label>
            <input type="number" name="meses" id="meses" min="1" value="<?= $meses ?>">
            <input type="submit" value="Calcular">

        </form>
    </main>

    <section id="idresultado">
        <?php 
        
        $conta = $meses * 1/100;
        echo "$conta meses<br>";

        // echo number_format($valor,2,",",".") . " Reais";
        
        ?>
    </section>
</body>
</html>