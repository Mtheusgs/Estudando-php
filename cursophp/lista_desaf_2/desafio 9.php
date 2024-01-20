<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1=$_POST['nota1'] ?? 0;
        $peso1=$_POST['peso1'] ?? 1;
        $valor2=$_POST['nota2']?? 0;
        $peso2=$_POST['peso2']?? 1;
    ?>
    <main>
        <h1>
            Médias Aritméticas
        </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="1"> 1˚Valor</label> 
        <input type="number" name="nota1" id="nota1" step="0.1" value="<?=$valor1?>">
        <label for="peso">1˚Peso</label> 
        <input type="number" name="peso1" id="peso1" step="0.1" value="<?=$peso1?>">
        <label for="2"> 2˚Valor</label> 
        <input type="number" name="nota2" id="nota2" step="0.1" value="<?=$valor2?>">
        <label for="peso">2˚Peso</label> 
        <input type="number" name="peso2" id="peso2" step="0.1" value="<?=$peso2?>">
        <input type="submit" value="Calcular Médias">
    </form>
    </main>
    <section>
        <h1>Cálculo das médias</h1>
        <?php 
          $simple=($valor1+$valor2)/2; 
          $pon=(($valor1*$peso1)+($valor2*$peso2))/($peso1+$peso2);
          echo "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a $simple.</li></ul>";
          echo "<ul><li>A <strong>Média Aritmética Ponderada</strong> com os pesos $peso1 e $peso2  é igual a $pon.</li></ul>";

        ?>
    </section>
    
</body>
</html>