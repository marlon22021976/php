<!DOCTYPE html>
<html lang="pt-BR">
<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Verificação de Número Positivo, Negativo ou Zero</title>
    
</head>
<body>
    
    <h2>Resolução do Exercício 1 <p>- Verificação de Número Positivo, Negativo ou Zero</h2>
    
    
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];        
        
            if ($numero > 0) {
                echo "<p>Valor Positivo</p>";   
            } elseif ($numero < 0) {
                echo "<p>Valor Negativo</p>";
            } else {
                echo "<p>Igual a Zero</p>";
            }
        }
    
    ?>

    <?php
        echo "<p>";
        setlocale(LC_ALL, 'pt_BR.utf8');
        echo strftime('%d/%B/%G');
    
        
    ?>
    <p></p>
    <a href="Exercicio1.html"><button>Voltar ao Início</button></a>
</body>
</html>