<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA_Compaible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>
<body>
    <h1> 
        <?= "Hello, wold! \u{1F30E}";    
        ?>
    </h1>
    <p>
        <?php 
            $nome = "Matheus Garcia"; 
            const PAIS ="Brasil"; 
            echo "Muito prazer, $nome! Você mora no ". PAIS; 
        ?>
        
    </p>
    
</body>
</html>