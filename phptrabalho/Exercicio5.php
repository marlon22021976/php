<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - CVerificação de número par ou ímpar</title>
</head>
<body>
    <h2>Resolução do Exercício 5 <p>- Verificação de número par ou ímpar</h2>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];
        
        
            if ($numero % 2 == 0) {
                echo "<p>O número $numero é <strong>Par</strong>.</p>";
            } else {
                echo "<p>O número $numero é <strong>Ímpar</strong>.</p>";
            }
        }    
        
    ?>

    <?php
        echo "<p>";
        setlocale(LC_ALL, 'pt_BR.utf8');
        echo strftime('%d/%B/%G');
    
        
    ?>
        <p></p>
        <a href="Exercicio5.html"><button>Voltar ao Início</button></a>
</body>
</html>