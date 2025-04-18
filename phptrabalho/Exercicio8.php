<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8 - Cálculo da média final de um aluno SGA</title>
</head>
<body>
    <h2>Resolução do Exercício 8 <p>- Cálculo da média final de um aluno SGA</h2>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $notas = $_POST["notas"];
    
            // Pesos: A1 e A2 valem 2, A3 vale 1
            $media = (($notas[0] * 2) + ($notas[1] * 2) + ($notas[2] * 1)) / 5;
    
            echo "<h3>Resultado:</h3>";
            echo "<p>Média final: " . number_format($media, 2, ',', '.') . "</p>";
    
            if ($media >= 7) {
                echo "<p>Status: <strong>Aprovado</strong></p>";
            } else {
                echo "<p>Status: <strong>Reprovado</strong></p>";
            }
        }
        
    ?>

    <?php
        echo "<p>";
        setlocale(LC_ALL, 'pt_BR.utf8');
        echo strftime('%d/%B/%G');
    
        
    ?>
        <p></p>
        <a href="Exercicio8.html"><button>Voltar ao Início</button></a>
</body>
</html>