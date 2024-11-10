<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/cadastrar.css">
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
            <h2>Confirmação de Cadastro de Produtos</h2><br>
            <hr><br><br>

            <?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $CodProduto = $_POST['CodProduto'];
    $NomeProduto = $_POST['NomeProduto'];
    $Tipo = $_POST['Tipo'];
    $qtidadeProduto = $_POST['qtidadeProduto'];

    // Inclui o arquivo de conexão com o banco de dados
    include_once("conexao.php");

    // Consulta SQL para verificar se o produto já existe
    $sql_select = "SELECT * FROM estoque WHERE CodProduto = '$CodProduto'";
    $result_select = mysqli_query($conn, $sql_select);

    // Se o produto já existe, atualiza a quantidade
    if (mysqli_num_rows($result_select) > 0) {
        $row = mysqli_fetch_assoc($result_select);
        $novaQuantidade = $row['qtidadeProduto'] + $qtidadeProduto;
        $sql_update = "UPDATE estoque SET qtidadeProduto = '$novaQuantidade' WHERE CodProduto = '$CodProduto'";
        
        if (mysqli_query($conn, $sql_update)) {
            echo "Quantidade do produto atualizada com sucesso!";
        } else {
            echo "Erro ao atualizar a quantidade do produto: " . mysqli_error($conn);
        }
    } 
    // Se o produto não existe, insere um novo registro
    else {
        $sql_insert = "INSERT INTO estoque (CodProduto, NomeProduto, Tipo, qtidadeProduto) VALUES ('$CodProduto', '$NomeProduto', '$Tipo', '$qtidadeProduto')";
        
        if (mysqli_query($conn, $sql_insert)) {
            echo "Produto adicionado com sucesso!";
        } else {
            echo "Erro ao adicionar o produto: " . mysqli_error($conn);
        }
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($conn);
}
?>

        </section>
</body>
</html>