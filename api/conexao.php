<?php
// Definir as credenciais de conexão com o banco de dados
$servername = "localhost"; // Endereço do servidor MySQL (normalmente 'localhost')
$username = "root"; // Nome de usuário do MySQL
$password = "21212121"; // Senha do MySQL
$dbname = "cadastro"; // Nome do banco de dados

// Criar a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
?>