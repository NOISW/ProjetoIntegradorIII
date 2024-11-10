<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/excluir.css">
        <title>Escola Italiana Eugenio Montale</title>
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
        </nav>        
        <section><br><br>
            <h2>Retirada de Produtos</h2><br>
            <hr><br>

            <form action="retirada_processa.php" method="post">
                <label for="CodProduto">Código do Produto:</label>
                <input type="text" id="CodProduto" name="CodProduto" class="campo" maxlength="4" required><br><br>

                <label for="qtidadeRetirada">Quantidade a ser Retirada:</label>
                <input type="number" id="qtidadeRetirada" name="qtidadeRetirada" min="1" required><br><br>

                <input type="submit" value="Realizar Retirada">
                <input type="reset" value="Limpar">
            </form>
    </body>
</html>