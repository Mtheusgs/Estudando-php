<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Tektur:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="2style_Ex.css">
</head>
<body>
    <header class="topo">
        <button onclick="javascript:window.location.href='1index.php'">&#x1F504;Voltar</button>
        <h1>Exercício 1</h1>
        <h2>Começo de um século!</h2>
     </header>
    <main class="mido">
        <div class="men">
            <div class="form">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                    <label for="gen">Gênero</label>
                    <input type="text" name="nome" id="nome">
                    <label for="sen">Senha</label> 
                    <input type="password" name="senha" id="senha">
                    <input type="submit" value="Conectar">           
                </form>
            </div>
        </div>
    </main> 
    <footer class="boto"><h3>Matheus Garcia Sampaio</h3></footer>
    
</body>
</html>