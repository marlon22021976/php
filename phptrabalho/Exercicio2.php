<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Exibição da tabuada de um número</title>
</head>
<body>
    <h2>Resolução do Exercício 2 <p>- Exibição da tabuada de um número</h2>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];
           
            echo "<h3>Tabuada do $numero</h3>";
           
            $i = 0;
            while ($i <= 10) {
                $resultado = $numero * $i;
                echo "$numero X $i = $resultado<br>";
                $i++;
            }
        }
        
        
    ?>

    <?php
        echo "<p>";
        setlocale(LC_ALL, 'pt_BR.utf8');
        echo strftime('%d/%B/%G');
    
        
    ?>
    <p></p>
    <a href="Exercicio2.html"><button>Voltar ao Início</button></a>
</body>
</html>