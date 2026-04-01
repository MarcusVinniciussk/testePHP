<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumento de porcentagem!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $resgNumero = $_GET['valor1'] ?? 0;
        $resgPorcentagem= $_GET['valor2'] ?? 0;
    ?>
    <main>
        <form action="<?$_SERVER['PHP_SELF']?>" method="get">Calculadora de porcentagem!
            <label for="valor">Digite o valor desejado</label>
            <input type="number" name="valor1" id="valor1" min="0" value="<?= $resgNumero ?>" required>
            <label for="valor2">Digite a porcentagem de aumento</label>
            <input type="range" name="valor2" id="valor2" min="0" max="100" value="<?= $resgPorcentagem ?>">
            <span id="mostrar"><?= $resgPorcentagem ?></span>
            <input type="submit" value="Calcular">

        </form>
    </main>
    <!-- código do javascript para deixar a barra de progressão em tempo real -->
    <script>
    // Pegando os elementos
    const range = document.getElementById('valor2');
    const mostrar = document.getElementById('mostrar');

    // Sempre que mexer no slider
    range.addEventListener('input', function() {
        mostrar.textContent = range.value + '%';
    });
</script>
    <section id="resultado">
            <?php 
                $aumentoValor = $resgNumero * ($resgPorcentagem / 100);
                $valorCheio = $resgNumero + $aumentoValor ;
                echo "O valor<strong> ".number_format($resgNumero,2,",","."). " </strong> irá considerar um aumento de $resgPorcentagem% <br> O valor com o aumento será de: <strong>" .number_format($valorCheio,2,",","."). "</strong>";
                
                
            ?>
    </section>
</body>
</html>