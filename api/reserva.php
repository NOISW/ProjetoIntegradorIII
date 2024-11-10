<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/reserva.css">
        <title>Reservar Sala - Escola Italiana Eugenio Montale</title>
        <script src="js/funcoes.js"></script>
    </head>
    <body>
        <header>
            <h1>Escola Italiana Eugenio Montale</h1>
        </header>
        <nav>
            <a href="consulta.php">Consulta</a>
            <a href="cadastrar.php">Cadastro</a>
            <a href="excluir.php">Retirada</a>
            <a href="reserva.php">Reservar</a>
        </nav>
        <section><br><br>
            <h2>Reserva de Sala</h2><br>
            <div class="salas-container">
            <img src="imgs/sala1.jpg" alt="Sala 1" class="sala" onclick="abrirFormulario('Sala 1')">
            <img src="imgs/sala2.jpg" alt="Sala 2" class="sala" onclick="abrirFormulario('Sala 2')">
            <img src="imgs/sala3.jpg" alt="Sala 3" class="sala" onclick="abrirFormulario('Sala 3')">
            <!-- Adicione mais imagens conforme necessário -->
            </div>

            <div class="overlay" onclick="fecharFormulario()"></div>
            <div id="formularioReserva">
                <h2>Reserva para <span id="nomeSala"></span></h2>
                <form action="processa.php" method="post">
                    <input type="hidden" name="sala" id="salaInput">
                    
                    <!-- Seção para mostrar reservas existentes (pode ser preenchida com PHP posteriormente) -->
                    <div id="reservasExistentes">
                        <!-- Exemplo de reservas -->
                        <p>Reservas existentes:</p>
                        <ul>
                            <li>01/11/2024 - 09:00 às 11:00</li>
                            <li>02/11/2024 - 14:00 às 16:00</li>
                        </ul>
                    </div>
                    
                    <!-- Formulário para nova reserva -->
                    <label for="professor">Nome do Professor:</label>
                    <input type="text" id="professor" name="professor" required>

                    <label for="data">Data:</label>
                    <input type="date" id="data" name="data" required>

                    <label for="horario">Horário:</label>
                    <input type="time" id="horario" name="horario" required>

                    <button type="submit">Reservar</button>
                    <button type="button" class="close-btn" onclick="fecharFormulario()">Cancelar</button>
                </form>
            </div>
        </section>
        <script>
            function abrirFormulario(sala) {
                document.getElementById('formularioReserva').style.display = 'block';
                document.querySelector('.overlay').style.display = 'block';
                document.getElementById('nomeSala').innerText = sala;
                document.getElementById('salaInput').value = sala;
            }

            function fecharFormulario() {
                document.getElementById('formularioReserva').style.display = 'none';
                document.querySelector('.overlay').style.display = 'none';
            }
        </script>
    </body>
</html>