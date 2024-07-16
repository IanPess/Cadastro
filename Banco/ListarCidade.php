<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Cidade</title>
    <link rel="stylesheet" href="listar.css">
</head>
<body>
    <?php
    include('includes/conexao.php');
    $sql = "SELECT * FROM cidade";
    $result = mysqli_query($con, $sql);
    ?>
    <div class="container">
        <h1>Consulta de Cidade</h1>
        <table align="center" border="1" width="500">
            <tr>
                <th>Codigo</th>
                <th>Nome</th>
                <th>Código</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td><a href='alteraCidade.php?id=".$row['id']."'>Alterar</a></td>";
                echo "<td><a href='deletarCidade.php?id=".$row['id']."'>Deletar</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <button class="btn"><a href="./index.html">Voltar</a></button>
    </div>
</body>
</html>