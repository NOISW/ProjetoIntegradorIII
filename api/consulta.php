<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/consulta.css">
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
            <h2>Consulta de Produtos</h2><br>
            <hr><br>
            <?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from estoque where NomeProduto like '%$filtro%' order by CodProduto";
$consulta = mysqli_query($conn,$sql);
$registros = mysqli_num_rows($consulta);

?>
            <form method="get" action="">
                Filtrar por Produto: <input type="text" name="filtro" class="campo" required autofocus>
                <input type="submit" value="Pesquisar">
            </form>

        <?php
        
        print "Resultado da pesquisa com a palavra <strong>$filtro</strong>.<br><br>";

        print "$registros registros encontrados.";
        
        print "<br><br>";

        while($exibirRegistros = mysqli_fetch_array($consulta)){

            $codigo = $exibirRegistros[0];
            $CodProduto = $exibirRegistros[1];
            $NomeProduto = $exibirRegistros[2];
            $Tipo = $exibirRegistros[3];
            $qtidadeProduto = $exibirRegistros[4];

            print "<article>";

            print "$codigo<br>";
            print "Código do Produto: $CodProduto<br>";
            print "Produto: $NomeProduto<br>";
            print "Tipo: $Tipo<br>";
            print "Quantidade: $qtidadeProduto";

            print "</article>";
        }

            mysqli_close($conn);

        ?>
    </body>
</html>