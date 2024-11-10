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
            <h2>Confirmação de Retirada de Produtos</h2><br>
            <hr><br><br>

<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $CodProduto = $_POST['CodProduto'];
    $qtidadeRetirada = $_POST['qtidadeRetirada'];

    // Inclui o arquivo de conexão com o banco de dados
    include_once("conexao.php");

    // Consulta SQL para verificar se o produto existe
    $sql_select = "SELECT * FROM estoque WHERE CodProduto = '$CodProduto'";
    $result_select = mysqli_query($conn, $sql_select);

    // Verifica se o produto existe no estoque
    if (mysqli_num_rows($result_select) > 0) {
        $row = mysqli_fetch_assoc($result_select);
        $qtidadeAtual = $row['qtidadeProduto'];

        // Verifica se a quantidade a ser retirada é menor ou igual à quantidade atual
        if ($qtidadeRetirada <= $qtidadeAtual) {
            // Calcula a nova quantidade após a retirada
            $novaQuantidade = $qtidadeAtual - $qtidadeRetirada;

            // Atualiza a quantidade no banco de dados
            $sql_update = "UPDATE estoque SET qtidadeProduto = '$novaQuantidade' WHERE CodProduto = '$CodProduto'";
            if (mysqli_query($conn, $sql_update)) {
                echo "Retirada de produto realizada com sucesso!";
            } else {
                echo "Erro ao atualizar a quantidade do produto: " . mysqli_error($conn);
            }
        } else {
            echo "Erro: A quantidade a ser retirada é maior do que a quantidade atual em estoque.";
        }
    } else {
        echo "Erro: Produto não encontrado no estoque.";
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($conn);
}
?>

</section>
</body>
</html>