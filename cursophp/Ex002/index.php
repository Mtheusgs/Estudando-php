<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA_Compaible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduarda Rabelo</title>
</head>
<body> 
   <h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); 
        $usuário =" Eduarda rabelo";
        echo "<p>Bem vinda, $usuário </p>";
        
    ?>
   </h1> 
   <p>
    <?php  
     date_default_timezone_set("America/Sao_Paulo"); 
     echo "Hoje é dia " . date("d/M/Y ") . "e são aproximadamente" . date("G:i:s T") 
    ?>
   </p>
</body>
</html> 