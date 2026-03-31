<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantos salarios mínimos?</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $resgSalarioPessoa = $_GET['salario']?? 0;
    ?>
    <main>
        <form action="<?$_SERVER['PHP_SELF']?>" method="get">Calcula quantos salarios mínimos!
            <label for="salario">Quanl é o seu salário?</label>
            <input type="number" name="salario" id="salario" step="0,01" value="<?= $resgSalarioPessoa?>">
            <input type="submit" value="Calcular">

        </form>
    </main>
    <section id="resultado">
            <?php
                $salarioMinimo = 1518;
                $salario = $resgSalarioPessoa;
                $salarioMin = intdiv($salario,$salarioMinimo);
                $contSal = $salario % $salarioMinimo;
                print "Com base no salário mínimo que é de <strong>$salarioMinimo</strong> o seu salario corresponde há:<strong> $salarioMin </strong>salários mínimos e mais <strong> $contSal Reais</strong> ";
            ?>
    </section>
</body>
</html>

