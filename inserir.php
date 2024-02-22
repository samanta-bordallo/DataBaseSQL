<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir de Cidade</title>
    <!-- Adicionar o link para o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <?php
        $ligacao = mysqli_connect("localhost", "sindcesp_mundo2", "Leiria2024.", "sindcesp_mundo2");

        if (!$ligacao) {
            die("Erro na ligação" . mysqli_connect_error());
        }

        $sql = "INSERT INTO city (Name, CountryCode, District, Population) VALUES 
            ('$_POST[Name]', 
            '$_POST[CountryCode]', 
            '$_POST[District]', 
            $_POST[Population])";

        if (mysqli_query($ligacao, $sql)) {
            echo "<h1>Cidade inserida com sucesso!<h1>";
        } else {
            echo "<h1>Erro a inserir cidade!<h1>";
        }

        mysqli_close($ligacao);
        ?>

        <h2>Aguarde que vai ser redireccionado</h2>
        <!-- Redirecionar para a página principal após 3 segundos -->
        <meta http-equiv="refresh" content="3;url=index.html" />
    </div>
</body>
</html>