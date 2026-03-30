<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de real para dolar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>CONVERSÃO</h1>
    <main>

        <?php 

        $dataInicio = date("m-d-Y",strtotime("- 7 days"));
        $dataFinal = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$dataInicio.'\'&@dataFinalCotacao=\''.$dataFinal.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        // agora as 07:41 1000 reais estão dando 191,32 dolares!
            
        $dadosCotacao = json_decode(file_get_contents($url),true );

        $cotacao = $dadosCotacao["value"][0]["cotacaoCompra"];

        // Ate aqui a cotação está chegando certo! na variavel cotacao

        $valorEmReal = $_REQUEST["valor"] ?? 0;

        $converteDolar = $valorEmReal / $cotacao;
        
        $padraoInternacional = numfmt_create("pt_BR",NumberFormatter::CURRENCY);

        echo "<p> Seus <strong>" . numfmt_format_currency($padraoInternacional,$valorEmReal,"BRL") . "</strong> <br> Equivalem a <strong>". numfmt_format_currency($padraoInternacional,$converteDolar,"USD"),"</p></strong>";

    ?>
    <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </main>
</body>
</html>