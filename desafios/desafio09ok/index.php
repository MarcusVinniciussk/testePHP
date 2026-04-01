<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média simples e ponderada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $nota1 = $_REQUEST['nota1']??0;
        $peso1 = $_REQUEST['peso1']??1;
        $nota2 = $_REQUEST['nota2']??0;
        $peso2 = $_REQUEST['peso2']??1;
        // var_dump($nota1 $nota2 );
    ?>
    <main>
        <form action="<? $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nota1">Nota 1</label>
            <input type="number" name="nota1" id="nota1" value="<?= $nota1 ?>"step="0.1" min="0" max="10" >
            <label for="peso1">Peso 1</label>
            <input type="number" name="peso1" id="peso1" value="<?= $peso1 ?>" min="1" max="10">
            <label for="nota2">Nota 2</label>
            <input type="number" name="nota2" id="nota2" value="<?= $nota2 ?>" step="0.1" min="0" max="10">
            <label for="peso2">Peso 2</label>
            <input type="number" name="peso2" id="peso2" value="<?= $peso2 ?>" min="1" max="10">
            <input type="submit" value="Calcular">

        </form>
    </main>
    <section id="resultado">
        <?php 
            $media = ($nota1 + $nota2) / 2;
            $mediaPonderada = ( $nota1 * $peso1 + $nota2 * $peso2) / ( $peso1 + $peso2 );
            echo "A média da notas $nota1 e $nota2 é de: <strong>" . number_format($media,2,",",".") . " </strong><br>
            E a média Ponderada é: <strong>" . number_format($mediaPonderada,2,",",".")."</strong>"
            ?>
    </section>
</body>
</html>