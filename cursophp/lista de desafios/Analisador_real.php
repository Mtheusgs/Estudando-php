<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisador Real</title>
</head>
<body>
    <header>
        <h1>
            Analisador de números reais
        </h1>
    </header>
    <section>
        <form action="Analisador_real.php" method="get">
            <label for="tit">Número para ser Analisado</label>
            <input type="text" placeholder="Insira o valor" name="numero" id="idnumero">
            <input type="submit" value="Analisar">
        </form>
    </section>
    <main>
        <?php 
            $valor = $_GET["numero"] ?? "Sem valor no momento";  
            $valorFloat = floatval(str_replace(',', '.', $valor));
            $valorInteiro = (int) $valorFloat;

            echo "<li>O valor inteiro será $valorInteiro</li>";
            echo "<li>A parte fracionada de $valor é exatamente </li>" . ($valorFloat - $valorInteiro);
        ?>
    </main>
    
</body>
</html>