<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7 - Comparação de valores A e B</title>
</head>
<body>
    <h2>Resolução do Exercício 7 <p>- Comparação de valores A e B</h2>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST["a"];
            $b = $_POST["b"];
    
            echo "<h3>Resultado:</h3>";
    
            if ($a > $b) {
                echo "<p>A é maior que B</p>";
            } elseif ($a < $b) {
                echo "<p>A é menor que B</p>";
            } else {
                echo "<p>A é igual a B</p>";
            }
        }
        
    ?>

    <?php
        echo "<p>";
        setlocale(LC_ALL, 'pt_BR.utf8');
        echo strftime('%d/%B/%G');
    
        
    ?>
        <p></p>
        <a href="Exercicio7.html"><button>Voltar ao Início</button></a>
</body>
</html>