<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">?<link rel="stylesheet" href="style.css">
    <title>Resposta1</title>
</head>
<body>
    <main>
        <h1>Resultado final</h1>-
        <p>
            <?php
                $num=$_GET["Número"] ?? 0;
                $sucess= $num+1;
                $ant= $num-1;
                echo"<p>O número escolhido foi $num</p>";
                echo "<p>O successor de $num é o número <strong>$sucess</strong></p>";
                echo "<p>O seu Antecessor de $num é o numero <strong>$ant</strong></p>"
            ?>
        </p>
        <button onclick="javascript:window.location.href='suces_ant.html'">&#x2B05;Voltar</button>
    </main>
    
    
</body>
</html>