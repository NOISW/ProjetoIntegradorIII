<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sala = $_POST['sala'];
    $professor = $_POST['professor'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];

    $sql = "INSERT INTO reservas (sala, professor, data, horario) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $sala, $professor, $data, $horario);

    if ($stmt->execute()) {
        echo "<script>alert('Reserva realizada com sucesso!'); window.location.href = 'reserva.php';</script>";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>