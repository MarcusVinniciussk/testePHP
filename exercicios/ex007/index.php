<!DOCTYPE html>
<html lang="ept-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio GET SELF</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
//------------------Nesse php eu vou obter os valores da tabela!
    <?php 
        $valor1 = $_GET['valor1'] ?? 0;
        $valor2 = $_GET['valor2'] ?? 0;
        ?>
//-----------------em main vou passar os dados que irão ser processados
    <main>
        <h1>soma entre dois números</h1>
        <form action="<?$_SERVER['PHP_SELF']?>" method="get">

            <label for="valor1">Valor 1</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">
            <label for="valor2">Valor 2</label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    //----na section vou fazer toda e qualquer conta para chegar ao valor esperado
    <section id="resultado">
        <?php 
        $soma = $valor1 + $valor2;
        echo "a soma dos valores $valor1 e $valor2 <strong>sera dê: $soma</strong>";
        ?>
    </section>
</body>
</html>