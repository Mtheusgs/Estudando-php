<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me livrando da maldição</title>
</head>
<body>
    <h1> 
        <?php
            function espaco() {
                echo str_repeat("-", 40) . PHP_EOL;
            }
            
            function binario($a) {
                $separacao = str_split($a);
                $num_int = array_map('intval', $separacao);
                $som = 0;
                $vav = 1;
            
                foreach ($num_int as $i) {
                    $comp = count($num_int) - $vav;
                    $som += $i * 2**$comp;
                    $vav++;
                }
            
                echo "O número inteiro representado por esse binário é $som" . PHP_EOL;
            }
            
            function num_pra_bin($a) {
                $bin = [];
            
                while ($a != 0) {
                    if ($a % 2 == 1) {
                        $bin[] = 1;
                        $a = (int)($a / 2);
                    } else {
                        $bin[] = 0;
                        $a = (int)($a / 2);
                    }
                }
            
                if (count($bin) < 4) {
                    while (count($bin) < 4) {
                        $bin[] = 0;
                    }
                    $bin = array_reverse($bin);
                    echo implode(" ", $bin) . PHP_EOL;
                } else {
                    $bin = array_reverse($bin);
                    echo implode(" ", $bin) . PHP_EOL;
                }
            }
            
            $continuar = 0;
            
            if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
                $opcao = (int)$_POST["opcao"];
            
                if ($opcao == 1) {
                    binario($_POST["binario"]);
                    espaco();
                }
            
                if ($opcao == 2) {
                    num_pra_bin((int)$_POST["inteiro"]);
                    echo PHP_EOL;
                    espaco();
                }
            
                if ($opcao == 3) {
                    $continuar = 1;
                }
            }
        ?>
    </h1>
    <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <p>
            Bom dia! Escolha uma das opções abaixo:<br>
            1-Transformar um número binário para um inteiro<br>
            2-Transformar um inteiro para binário<br>
            3-Sair<br>
            Digite: <input type="number" name="opcao" min="1" max="3" required>
        </p>
        
        <?php if ($continuar == 0) { ?>
            <?php if ($opcao == 1) { ?>
                Digite um número binário: <input type="text" name="binario" required><br>
            <?php } elseif ($opcao == 2) { ?>
                Digite um número inteiro: <input type="number" name="inteiro" required><br>
            <?php } ?>
            
            <input type="submit" value="Enviar">
        <?php } ?>
    </form>
</body>
</html>