<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Cálculo do fatorial de um número – RECURSIVO</title>
</head>
<body>
    <h2>Resolução do Exercício 3 <p>- Cálculo do fatorial de um número – RECURSIVO</h2>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];
        
        
            if ($numero == 0 || $numero == 1) {
                echo "<p>Fatorial de $numero é 1</p>";
            } else {
                $fatorial = 1;
                $n = $numero;
                $processo = "";
        
        
                while ($n > 1) {
                    $fatorial *= $n;
                    $processo .= $n . " * ";
                    $n--;
                }
                $fatorial *= 1;
                $processo .= "1";
        
        
                echo "<p>Processamento: $processo</p>";
                echo "<p>Fatorial de $numero é $fatorial</p>";
            }
        }
        
        
    ?>

    <?php
        echo "<p>";
        setlocale(LC_ALL, 'pt_BR.utf8');
        echo strftime('%d/%B/%G');
    
        
    ?>
        <p></p>
        <a href="Exercicio3.html"><button>Voltar ao Início</button></a>
</body>
</html>