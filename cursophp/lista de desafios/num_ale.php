<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio2</title>
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php
            $num=mt_rand(0,100);
            echo "<p>Gerando números aleátórios entre o e 100...</p>";
            echo "<p>O valor gerado foi <strong>$num</strong></p>"
            ?>
            <button onclick="javascript:window.location.href='num_ale.php'">&#x1F504;Gerar outro</button>
    </main>
</body>
</html>