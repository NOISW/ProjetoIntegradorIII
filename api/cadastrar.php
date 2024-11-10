<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/cadastrar.css">
        <title>Adicionar Produto - Escola Italiana Eugenio Montale</title>
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
            <h2>Cadastro de Produtos</h2><br>
            <form action="processa.php" method="post">
                    
                <label for="CodProduto">Código:</label>
                <input type="text" id="CodProduto" name="CodProduto" class="campo" maxlength="4" required><br><br>

               <label for="NomeProduto">Produto:</label>
               <input type="text" id="NomeProduto" name="NomeProduto" class="campo" maxlength="70" autofocus><br><br>
        
                <label for="Tipo">Tipo:</label>
                    <select id="Tipo" name="Tipo" required>
                    <option value="Pacote">Pacote</option>
                    <option value="Unidade">Unidade</option>
                    </select><br><br>

                <label for="qtidadeProduto">Quantidade:</label>
                <input type="number" id="qtidadeProduto" name="qtidadeProduto" min="1" required><br><br>

                <input type="submit" value="Adicionar Produto" onclick="validarProduto('NomeProduto','CodProduto','qtidadeProduto')">
                <input type="reset" value="Limpar">

            </form>
        </section>
        </div>  
    </body>
</html>