<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Moeda em Dólar</title>
</head>
<body>
    <main>
        <h1>
            Conversor de moeda v1.0
        </h1>
        <?php 
            $inicio=date("m-d-Y", strtotime('-7 days'));
            $fim=date("m-d-Y"); 
            $url='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27'.$inicio.'%27&@dataFinalCotacao=%27'.$fim.'%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';  
            $dados= json_decode(file_get_contents($url),true);  
            $cotação= $dados["value"][0]["cotacaoCompra"];
            $valor=$_GET["Real"] ?? "Sem valor"; 
            $real_dólar=$valor/$cotação; 
            $new_n=number_format($real_dólar,2,",",".");
            echo "<ol>Você tem na sua carteira <strong>US\$$new_n</strong> Doláres</ol>"; 
            echo $cotação;
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>