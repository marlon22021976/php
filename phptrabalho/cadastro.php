<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do cadastro</title>
</head>
<body>
    <h2>Resultado do cadastro</h2>
    

<?php
$host = "localhost";
$user = "root";
$pass = ""; // ou sua senha
$db = "sistema_alunos";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$curso = $_POST['curso'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$curso_horas = $_POST['curso_horas'];
$carga_horaria = $_POST['carga_horaria'];

$sql = "INSERT INTO alunos (nome, matricula, curso, email, telefone, endereco, cep, cidade, uf, curso_horas, carga_horaria)
        VALUES ('$nome', '$matricula', '$curso', '$email', '$telefone', '$endereco', '$cep', '$cidade', '$uf', '$curso_horas', $carga_horaria)";

if ($conn->query($sql) === TRUE) {
    echo "Aluno cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

$conn->close();
?>
<p></p>
<a href="cadastro.html"><button>Novo cadastro</button></a>


</body>
</html>