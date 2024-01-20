<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Global</title>
</head>
<body>
    <main>
        <pre>
            <?php  
                setcookie("dia-da-semana","TUESDAY", time()+3600);
                session_start();  
                $_SESSION["TESTE"]="Funcionou";

                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                echo "<h2>Superglobal POST</h2>";
                var_dump($_POST); 

                echo "<h3>Superglobal REQUEST</h3>";
                var_dump($_REQUEST);

                echo "<h1>Superglobal cookie</h1>";
                var_dump($_COOKIE); 

                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);

            ?>
        </pre>
    </main>
    
</body>
</html>