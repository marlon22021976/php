<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9 - Verificação de maioridade</title>
</head>
<body>
    <h2>Resolução do Exercício 9 <p>- Verificação de maioridade</h2>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = trim($_POST["nome"]);
            $idade = intval($_POST["idade"]);
    
            echo "<h3>Resultado:</h3>";
    
            if ($idade >= 18) {
                echo "<p>$nome é maior de 18 e tem $idade anos.</p>";
            } else {
                echo "<p>$nome não é maior de 18 e tem $idade anos.</p>";
            }
        }
        
    ?>

    <?php
        echo "<p>";
        setlocale(LC_ALL, 'pt_BR.utf8');
        echo strftime('%d/%B/%G');
    
        
    ?>
        <p></p>
        <a href="Exercicio9.html"><button>Voltar ao Início</button></a>
</body>
</html>