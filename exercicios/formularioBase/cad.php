<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
    
        $nome = $_GET["nome"] ?? "Sem nome";

        $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";

        $idade = $_GET["idade"] ?? "sem idade";

        echo "<p> Olá, seja bem vindo ao meu site de teste,seu nome é <strong>$nome $sobrenome</strong> E sua idade é de <strong>$idade</strong> anos";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </main>
</body>
</html>