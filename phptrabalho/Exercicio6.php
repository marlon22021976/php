<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6 -  Impressão de valores em ordem crescente</title>
</head>
<body>
    <h2>Resolução do Exercício 6 <p>-  Impressão de valores em ordem crescente</h2>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST["a"];
            $b = $_POST["b"];
    
            echo "<h3>Resultado:</h3>";
    
            if ($a < $b) {
                echo "<p>Ordem crescente: $a, $b</p>";
            } elseif ($b < $a) {
                echo "<p>Ordem crescente: $b, $a</p>";
            } else {
                echo "<p>Os dois números são iguais: $a</p>";
            }
        }  
        
    ?>

    <?php
        echo "<p>";
        setlocale(LC_ALL, 'pt_BR.utf8');
        echo strftime('%d/%B/%G');
    
        
    ?>
        <p></p>
        <a href="Exercicio6.html"><button>Voltar ao Início</button></a>
</body>
</html>