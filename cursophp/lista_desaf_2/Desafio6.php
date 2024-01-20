<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 6</title>
</head>
<body>
    <?php 
        $dividendo=$_POST["div"] ?? 0;
        $divisor=$_POST["divs"] ?? 1;
    ?>
    <main>
        <h1>
            Anatomia de uma Divisão
        </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="div">Dividendo</label>
        <input type="number" name="div" id="div" value="<?=$dividendo?>">
        <label for="divs">Divisor</label>
        <input type="number" name="divs" id="divis" min="1" value="<?=$divisor?>">
        <input type="submit" value="Analisar">

    </form>
    </main>
    <section>
            <?php 
                echo "<h2>Estrutura de Divição</h2>"; 
                $resp=$dividendo/$divisor; 
                $rest=$dividendo%$divisor;

            ?>
            <table class="divisao">
                <tr>
                    <td><?=$dividendo?></td>
                    <td><?=$divisor?></td>
                </tr>
                <tr>
                    <td><?=$rest?></td>
                    <td><?=$resp?></td>

                </tr>
            </table>
    </section>
    
</body>
</html>