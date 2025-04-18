<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10 - Identificação do mês correspondente a um número</title>
</head>
<body>
    <h2>Resolução do Exercício 10 <p>- Identificação do mês correspondente a um número</h2>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = intval($_POST["numero"]);
    
            echo "<h3>Resultado:</h3>";
    
            switch ($numero) {
                case 1:  echo "<p>Janeiro</p>"; break;
                case 2:  echo "<p>Fevereiro</p>"; break;
                case 3:  echo "<p>Março</p>"; break;
                case 4:  echo "<p>Abril</p>"; break;
                case 5:  echo "<p>Maio</p>"; break;
                case 6:  echo "<p>Junho</p>"; break;
                case 7:  echo "<p>Julho</p>"; break;
                case 8:  echo "<p>Agosto</p>"; break;
                case 9:  echo "<p>Setembro</p>"; break;
                case 10: echo "<p>Outubro</p>"; break;
                case 11: echo "<p>Novembro</p>"; break;
                case 12: echo "<p>Dezembro</p>"; break;
                default:
                    echo "<p>Não existe mês com esse número.</p>";
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
        <a href="Exercicio10.html"><button>Voltar ao Início</button></a>
</body>
</html>