<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Exclusão</title>
</head>
<body>
    <h2>Confirmação de Exclusão</h2>
    <?php
$conn = new mysqli("localhost", "root", "", "sistema_alunos");
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$nome = $_POST['nome'] ?? '';
$matricula = $_POST['matricula'] ?? '';
$email = $_POST['email'] ?? '';

$checkQuery = "SELECT * FROM alunos WHERE 1=1";
if (!empty($nome)) $checkQuery .= " AND nome = '$nome'";
if (!empty($matricula)) $checkQuery .= " AND matricula = '$matricula'";
if (!empty($email)) $checkQuery .= " AND email = '$email'";

$result = $conn->query($checkQuery);

if ($result->num_rows > 0) {
    $deleteQuery = "DELETE FROM alunos WHERE 1=1";
    if (!empty($nome)) $deleteQuery .= " AND nome = '$nome'";
    if (!empty($matricula)) $deleteQuery .= " AND matricula = '$matricula'";
    if (!empty($email)) $deleteQuery .= " AND email = '$email'";

    if ($conn->query($deleteQuery) === TRUE) {
        echo "Aluno excluído com sucesso.";
    } else {
        echo "Erro ao excluir: " . $conn->error;
    }
} else {
    echo "Nenhum aluno encontrado com os critérios informados.";
}

$conn->close();
?>

<br><br>
    <a href="Exercicio12.html"><button>Voltar ao Início</button></a>
</body>
</html>