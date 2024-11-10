<?php
$servername = "pjt_integrador.mysql.dbaas.com.br";
$username = "pjt_integrador";
$password = "Univesp@2022";
$dbname = "pjt_integrador";

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
echo "Conexão bem-sucedida";
?>