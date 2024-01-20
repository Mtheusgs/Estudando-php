<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salário=$_POST['salário'] ?? 0; 
        $m_sala= 1420.00;    
    ?>
    <main>
        <h1>
            Infome seu salário
        </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="sala">Salário (R$)</label>
        <input type="number" name="salário" id="idsalário" step="0.01" value="<?=$salário?>"> 
        <p>Considerando o salário mínimo de <strong>R$1.420,00</strong></p>
        <input type="submit" value="Calcular">       
    </form>
    </main>
    <section>
        <h1>Resultado final</h1>
        <?php 
           if ($salário>$m_sala){
            $sal_f=(float)$salário; 
            $resul= intdiv($sal_f,$m_sala); 
            $teste=$salário-(int)$salário; 
            $resto=($salário%$m_sala)+$teste;  
            echo  "Quem recebe um salário de R$". number_format($salário,2,',','.') . " ganha $resul salários minímos + R$".number_format($resto,2,",",".");
           }
           else{
            echo "Seu salário é inferior ao salário minimo, cerca de R$" .number_format($m_sala-$salário,2,",",".");
           }

        ?>

    </section>
    
</body>
</html>