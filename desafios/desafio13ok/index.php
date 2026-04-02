<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caixa eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor = $_REQUEST['valor'] ?? 0 ;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">Caixa eletrônico
            <label for="valor">Valor que deseja sacar</label>
            <input type="number" name="valor" id="idvalor" min="0" step="5" value="<?= $valor ?>" required>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section id="resultado">
            <?php 
                if ($valor == 0) {
                    echo "O valor digitado é invalido para o saque!";
                } else {
                    
                    $div100 = intdiv($valor,100);
    
                    $resto100 = $valor % 100;
    
                    $div50 = intdiv($resto100,50) ;
    
                    $resto50 = $resto100 % 50;
    
                    $div10 = intdiv($resto50,10);
    
                    $resto10 = $resto50 % 10;
    
                    $div5 = intdiv($resto10,5);
    
                    $resto5 = $resto10 % 5;
    
                    echo "$div100 Notas de 100 e o resto é $resto100 <br>
                    $div50 Notas de 50 e o resto é $resto50 <br> 
                    $div10 Notas de 10 e o resto é $resto10 <br>
                    $div5 Notas de 5 e o resto é $resto5";
                }
                

                ?>
    </section>
</body>
</html>
