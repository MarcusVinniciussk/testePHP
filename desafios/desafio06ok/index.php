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
        $dividendo = $_GET['dividendo'];
        $divisor = $_GET['divisor'];
        ?>
    <main>
        <form action="<?$_SERVER['PHP_SELF']?>" method="get">CALCULO DE DIVISÃO
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>" min="1" step="1">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>" min="1" step="1">
            <input type="submit" value="Dividir">
            
        </form>
    </main>
    <section id="resultado">
            <?php 
            $divisao = intdiv($dividendo,$divisor);
            $restoDiv = $dividendo % $divisor;
            print "O quociente de  $dividendo e $divisor é:<strong> $divisao</strong><br>E o resto da divisão é: <strong>$restoDiv</strong>"
            ?>
    </section>
</body>
</html>