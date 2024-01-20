<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num=$_REQUEST['num'] ?? 1;   
    ?>
    <main>
        <h1>Infome um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post"> 
        <label for="Num">Número</label>
        <input type="number" name="num" id="num" value="<?=$num?>" >
        <input type="submit" value="Calcular raízes">
        <form>
    </main>
    <section>
            <h1>Resultado</h1>
            <?php 
               $raiz2=sqrt($num);
               $raiz3= $num**(1/3); 
            ?>
            <ul>
                <li><?="A raiz quadrada de $num é <strong>$raiz2</strong>"?></li>
                <li><?="A raiz cubica de $num é <strong>$raiz3</strong>"?></li>
            </ul>
    </section>
    
</body>
</html>