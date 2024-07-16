<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cidade WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cidade</title>
    <link rel="stylesheet" href="cadastrocidade.css">
    
</head>
<body>
    <div class="container">
        <fieldset>
            <legend>Cadastro de Cidade</legend>
            <form action="alteraCidadeExe.php" method="post">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" required value="<?php echo $row['nome']?>">
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado" required>
                        <option value="SP" <?php $row['estado'] == "SP"  ? "selected" : "" ?>>SP</option>
                        <option value="RJ" <?php $row['estado'] == "RJ"  ? "selected" : "" ?>>RJ</option>
                        <option value="MG" <?php $row['estado'] == "MG"  ? "selected" : "" ?>>MG</option>
                        <option value="ES" <?php $row['estado'] == "ES"  ? "selected" : "" ?>>ES</option>
                    </select>
                </div>
                <div>
                    <input type="hidden" name="id" value="<?php echo $row['id']?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn">Cadastrar</button>
                </div>
            </form>
        </fieldset>
        <button class="btn"><a href="././index.html">Voltar</a></button>
    </div>
    
</body>
</html>
