<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
        $host = "localhost";
        $usuario = "sindcesp_mundo2";
        $senha = "Leiria2024.";
        $banco_de_dados = "sindcesp_mundo2";
        $conexao = new mysqli($host, $usuario, $senha, $banco_de_dados);
        if ($conexao->connect_error) {
            die("Erro de conexão: " . $conexao->connect_error);
        }
        $query = "SELECT * FROM city";
        $resultado = $conexao->query($query);
        echo "<a href='index.html'>Voltar</a>";
        ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Distrito</th>
                    <th scope="col">Populacao</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($resultado) {
                    $contador = 0; // Inicializa o contador
                    foreach ($resultado as $linha) {
                        $cor = ($contador % 2 == 0) ? 'table-primary' : 'table-info';
                        echo "<tr class='$cor'>";
                        echo "<td>" . $linha['ID'] . "</td>";
                        echo "<td>" . $linha['Name'] . "</td>";
                        echo "<td>" . $linha['CountryCode'] . "</td>";
                        echo "<td>" . $linha['District'] . "</td>";
                        echo "<td>" . $linha['Population'] . "</td>";
                        echo "</tr>";
                        $contador++;
                    }
                } else {
                    echo "<tr><td colspan='5'>Erro ao executar a consulta: " . $conexao->error . "</td></tr>";
                }

                $conexao->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html> 