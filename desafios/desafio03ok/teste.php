<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da conversão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><strong>Resultado da conversão</strong></h1>
</body>
    <main>
    <?php 
    $valorEmReal = $_GET["valor"] ?? 0;
    $dataInicio = date("m-d-Y",strtotime("- 7 days"));
        $dataFinal = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$dataInicio.'\'&@dataFinalCotacao=\''.$dataFinal.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        // agora as 07:41 1000 reais estão dando 191,32 dolares!
            
        $dadosCotacao = json_decode(file_get_contents($url),true );

        $cotacao = $dadosCotacao["value"][0]["cotacaoCompra"];

    
    // ---------- Primeira forma de fazer -----------------------------
    // $retornaValor = number_format($valorEmReal,2,",",".");
    // $converteDolar = number_format(($valorEmReal / $cotacao),2,",",".");
    // echo "Os seus <strong>R\$$retornaValor</strong> para Dolares serão: <strong>US\$$converteDolar</strong> Dolares";
    // ---------- Segunda forma de fazer ------------------------------

    $converteDolar = $valorEmReal / $cotacao;
    $padraoInternacional = numfmt_create("pt_BR",NumberFormatter::CURRENCY);

    echo "<p> Seus <strong>" . numfmt_format_currency($padraoInternacional,$valorEmReal,"BRL") . "</strong> <br> Equivalem a <strong>". numfmt_format_currency($padraoInternacional,$converteDolar,"USD"),"</p></strong>";
    
    ?>
<p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
</main>
</html>