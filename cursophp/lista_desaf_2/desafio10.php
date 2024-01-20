<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $ano=date("Y"); 
        $ano_n=$_POST['idade'] ?? 0;
        $ano_at=$_POST['ano'] ?? $ano;
    ?>
    <main>
        <h1>Calculando dua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="Idade_at">Em que ano você nasceu?</label>
        <input type="number" name="idade" id="idade" value="<?=$ano_n?>" required>
        <label for="ano">Quer saber sua idade em que ano?<strong>(Atualmente estamos em <?=$ano?>)</strong> </label>
        <input type="number" name="ano" id="ano" value="<?=$ano_at?>" required>
        <input type="submit" value="Calcular minha idade">
    </form>
    </main>
    <section>
        <?php  
            $result=$ano_at-$ano_n ?? 0 ; 
            if ($result==$ano){
                echo  "<ul>
                    <li>A idade calculada é de 0</li>
                </ul>"; 
            }
                      
           else  echo  "<ul>
           <li>A idade calculada é de $result</li>
       </ul>";     
       
                  
        ?>
    </section>
</body>
</html>