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
            $total=$_GET['segundos']??0;        
        ?>
        <h1>
            Calculadora de de tempo
        </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="seg">Qunatos segundos deseja transformar?</label>
        <input type="number" name="segundos" id="segundos" value="<?=$segundos?>"> 
        <input type="submit" value="Calcular"> 
    </form>
    </main>
    <section>
        <h1>
            Analisando tudo
        </h1>
        <?php 
          echo "Depois de analisar o valor temos que <strong>$total segundos</strong> tem :"; 
          $sobra= $total;

          $semana= (int)($sobra/604_800); 
          $sobra= $sobra%604_800;

          $dias= (int)($sobra/84_400);
          $sobra= $sobra%84_400;

          $horas=(int)($sobra/3_600);
          $sobra=$sobra%3_600;

          $minutos=(int)($sobra/60);

          
        ?>
        <ul>
            <li><?=$semana?> Semanas</li>
            <li><?=$dias?> Dias</li>
            <li><?=$horas?> Horas</li>
            <li><?=$minutos?> Minutos</li>
        </ul>
    </section>
    
</body>
</html>