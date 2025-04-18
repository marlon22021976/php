<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca de alunos</title>
</head>
<body>
    <h2>Busca de alunos</h2>
    <?php
$conn = new mysqli("localhost", "root", "", "sistema_alunos");
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$nome = $_GET['nome'] ?? '';
$matricula = $_GET['matricula'] ?? '';
$email = $_GET['email'] ?? '';


$query = "SELECT * FROM alunos WHERE 1=1";
if (!empty($nome)) $query .= " AND nome LIKE '%$nome%'";
if (!empty($matricula)) $query .= " AND matricula LIKE '%$matricula%'";
if (!empty($email)) $query .= " AND email LIKE '%$email%'";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<table border='1'>
        <tr>
            <th>Nome</th><th>Matrícula</th><th>Curso</th><th>Email</th>
            <th>Telefone</th><th>Endereço</th><th>CEP</th><th>Cidade</th>
            <th>UF</th><th>Curso Horas</th><th>Carga Horária</th>
        </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['nome']}</td>
            <td>{$row['matricula']}</td>
            <td>{$row['curso']}</td>
            <td>{$row['email']}</td>
            <td>{$row['telefone']}</td>
            <td>{$row['endereco']}</td>
            <td>{$row['cep']}</td>
            <td>{$row['cidade']}</td>
            <td>{$row['uf']}</td>
            <td>{$row['curso_horas']}</td>
            <td>{$row['carga_horaria']}</td>
        </tr>";
    }

    echo "</table>";
} else {
    echo "Nenhum aluno encontrado.";
}

$conn->close();
?>
<br><br>
<a href="Exercicio12.html"><button>Voltar ao Início</button></a>
</body>
</html>