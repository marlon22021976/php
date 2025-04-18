<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de horas</title>
</head>
<body>
    <h2>Cálculo de horas</h2>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema_alunos";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$matricula = $_POST['matricula'];
$nova_carga = intval($_POST['nova_carga']);

$sql = "SELECT carga_horaria FROM alunos WHERE matricula = '$matricula'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $aluno = $result->fetch_assoc();
    $nova_total = $aluno['carga_horaria'] + $nova_carga;

    $update = "UPDATE alunos SET carga_horaria = $nova_total WHERE matricula = '$matricula'";

    if ($conn->query($update) === TRUE) {
        echo "Carga horária atualizada com sucesso! Nova carga total: $nova_total horas.";
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
} else {
    echo "Matrícula não encontrada.";
}

$conn->close();
?>
<p></p>
<a href="atualizar.html"><button>Atualize novamente</button></a>
</body>
</html>