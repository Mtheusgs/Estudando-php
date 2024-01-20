<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $total=$_GET['valor']??0;        
        ?>
        <h1>
            Caixa Eletrônico
        </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="seg">Qual valor deseja sacar?(R$)</label>
        <input type="number" name="valor" id="segundos" step="5" value="<?=$total?>">  
        <p>
            Lembrando só estão disponiveis as notas de R$100,R$150,R$20,R$10.
        </p>
        <input type="submit" value="Calcular"> 
    </form>
    </main>
    <section>
        <h1>
            Analisando tudo
        </h1>
        <?php 
            $sobra=$total;
            $cem=(int)($sobra/100);
            $sobra= $sobra%100;
            $cin=(int)($sobra/50);
            $sobra= $sobra%50;
            $vint=(int)($sobra/20);
            $sobra= $sobra%20;
            $dez=(int)($sobra/10);
            $sobra= $sobra%10;
            $cinco=(int)($sobra/5); 
        ?>
        <ul>
            <strong>
                <li><?=$cem?> Notas de cem</li>
                <li><?=$cin?> Notas de cinquenta</li>
                <li><?=$vint?> Notas de vinte</li>
                <li><?=$dez?>Notas de des</li>
                <li><?=$cinco?>Notas de cinco</li>
            </strong>
        </ul>
    </section>
</body>
</html>