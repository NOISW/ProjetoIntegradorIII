<?php
// Definir as credenciais de conexão com o banco de dados
$servername = "pjt_integrador.mysql.dbaas.com.br"; // Endereço do servidor MySQL (normalmente 'localhost')
$username = "pjt_integrador"; // Nome de usuário do MySQL
$password = "Univesp@2022"; // Senha do MySQL
$dbname = "pjt_integrador"; // Nome do banco de dados

// Criar a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
?>