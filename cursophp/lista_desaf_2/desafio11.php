<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $produto=$_POST['produto']?? '0';
        $porcentagem=$_POST['porcentagem'] ?? "0";  
        $resultado= $produto + (($produto*$porcentagem)/100);
        $result= number_format($resultado,2,'.','');
    ?>
    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post"> 
        <label for="prod">Qual o valor do produto?</label> 
        <input type="number" name="produto" id="produto" min="0.01" step="0.01" value="<?=$produto?>">


        <label for="perce">Qual será o percentual de reajuste?(<strong><span id="p">?</span>%</strong>)</label> 

        <input type="range" name="porcentagem" id="idporcentagem" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$porcentagem?>" >  
        <input type="submit" value="Reajustar">
    </form>
    </main>
    <section>
            <h1>
                Resultado final
            </h1>
            <ul>
                <li>
                    Após o Reajuste de preços o valor no produto será <strong><?=$result?></strong>
                </li>
            </ul>
    </section>
    <script>
        mudaValor()
        function mudaValor() {
            p.innerText=idporcentagem.value;
        }
    </script>
</body>
</html>