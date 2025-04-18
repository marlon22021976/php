<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Calculadora com switch</title>
</head>
<body>
    <h2>Resolução do Exercício 4 <p>- Calculadora com switch</h2>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operacao = $_POST["operacao"];
            $resultado = 0;
        
        
            switch ($operacao) {
                case "soma":
                    $resultado = $num1 + $num2;
                    echo "<p>Resultado da Soma: $resultado</p>";
                    break;
        
        
                case "subtracao":
                    $resultado = $num1 - $num2;
                    echo "<p>Resultado da Subtração: $resultado</p>";
                    break;
        
        
                case "multiplicacao":
                    $resultado = $num1 * $num2;
                    echo "<p>Resultado da Multiplicação: $resultado</p>";
                    break;
        
        
                case "divisao":
                    if ($num2 != 0) {
                        $resultado = $num1 / $num2;
                        echo "<p>Resultado da Divisão: $resultado</p>";
                    } else {
                        echo "<p style='color:red;'>Erro: Divisão por zero!</p>";
                    }
                    break;
        
        
                default:
                    echo "<p style='color:red;'>Operação inválida.</p>";
                    break;
            }
        }
        
        
        
    ?>

    <?php
        echo "<p>";
        setlocale(LC_ALL, 'pt_BR.utf8');
        echo strftime('%d/%B/%G');
    
        
    ?>
        <p></p>
        <a href="Exercicio4.html"><button>Voltar ao Início</button></a>
</body>
</html>