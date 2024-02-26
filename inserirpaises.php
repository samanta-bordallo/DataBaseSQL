<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir País</title>
    <!-- Adicionar o link para o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <?php
        $ligacao = mysqli_connect("localhost", "sindcesp_mundo2", "Leiria2024.", "sindcesp_mundo2");

        if (!$ligacao) {
            die("Erro na ligação: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO country (Code, Name, Continent, Region, SurfaceArea, IndepYear, Population, LifeExpectancy, GNP, GNPOld, LocalName, GovernmentForm, HeadOfState, Capital, Code2) VALUES 
            ('$_POST[Code]', 
            '$_POST[Name]', 
            '$_POST[Continent]', 
            '$_POST[Region]', 
            $_POST[SurfaceArea], 
            $_POST[IndepYear], 
            $_POST[Population], 
            $_POST[LifeExpectancy], 
            $_POST[GNP], 
            $_POST[GNPOld], 
            '$_POST[LocalName]', 
            '$_POST[GovernmentForm]', 
            '$_POST[HeadOfState]', 
            $_POST[Capital], 
            '$_POST[Code2]')";

        if (mysqli_query($ligacao, $sql)) {
            echo "<h1>País inserido com sucesso!</h1>";
        } else {
            echo "<h1>Erro ao inserir país!</h1>";
        }

        mysqli_close($ligacao);
        ?>

        <h2>Aguarde que será redirecionado</h2>
        <!-- Redirecionar para a página principal após 3 segundos -->
        <meta http-equiv="refresh" content="3;url=index.html" />
    </div>
</body>
</html>
