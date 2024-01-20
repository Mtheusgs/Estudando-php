<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2? family= Merriweather:wght@700 & display=swap" rel="stylesheet">
    <link rel="stylesheet" href="1style.css">
    <title>Udemy_C_PHP</title>
</head>
<body> 
    <?php 
        $date=date("Y")
    ?>
    <header class="topo">
        <h1> Curso PHP</h1> 
        <H2>Índice dos Exercícios</H2>
    </header>

    <main id="a" class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01 - </h3>
                    <ul>
                        <li><a href="2exec.php">Exercícios A</a></li>
                        <li><a href="#">Exercícios B</a></li>
                        <li><a href="#">Exercícios C</a></li>
                    </ul>
                </div>
                <div class="modulo red">
                    <h3>Módulo 02 - </h3>
                    <ul>
                        <li><a href="#">Exercícios A</a></li>
                        <li><a href="#">Exercícios B</a></li>
                        <li><a href="#">Exercícios C</a></li>
                    </ul>
                </div>
                <div class="modulo blue">
                    <h3>Módulo 03 -</h3>
                    <ul>
                        <li><a href="#">Exercícios A</a></li>
                        <li><a href="#">Exercícios B</a></li>
                        <li><a href="#">Exercícios C</a></li>
                    </ul>
                </div>
                <div class="modulo violet">
                    <h3>Módulo 04 - </h3>
                    <ul>
                        <li><a href="#">Exercícios A</a></li>
                        <li><a href="#">Exercícios B</a></li>
                        <li><a href="#">Exercícios C</a></li>
                    </ul>
                </div>
                <div class="modulo orange">
                    <h3>Módulo 05 - </h3>
                    <ul>
                        <li><a href="#">Exercícios A</a></li>
                        <li><a href="#">Exercícios B</a></li>
                        <li><a href="#">Exercícios C</a></li>
                    </ul>
                </div>
                <div class="modulo pink">
                    <h3>Módulo 06 - </h3>
                    <ul>
                        <li><a href="#">Exercícios A</a></li>
                        <li><a href="#">Exercícios B</a></li>
                        <li><a href="#">Exercícios C</a></li>
                    </ul>
                </div>
                <div class="modulo black">
                    <h3>Módulo 07 - </h3>
                    <ul>
                        <li><a href="#">Exercícios A</a></li>
                        <li><a href="#">Exercícios B</a></li>
                        <li><a href="#">Exercícios C</a></li>
                    </ul>
                </div>
            </nav>
    </div></main>

    <footer class="rodape">CODER & ALUNOS <?=$date?></footer>   
</body>
</html> 
