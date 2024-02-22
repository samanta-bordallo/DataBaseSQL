<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php

// Configurações de conexão com o banco de dados

$host = "localhost"; // Host do MySQL

$usuario = "sindcesp_mundo2"; // Nome de usuário do MySQL

$senha = "Leiria2024."; // Senha do MySQL

$banco_de_dados = "sindcesp_mundo2"; // Nome do banco de dados

// Estabelece a conexão com o banco de dados

$conexao = new mysqli($host, $usuario, $senha, $banco_de_dados);

// Verifica se houve erros na conexão

if ($conexao->connect_error) {

    die("Erro de conexão: " . $conexao->connect_error);
}

echo "Conexão bem-sucedida"; // Isso será exibido se a conexão for bem-sucedida

// Agora você pode executar consultas SQL e outras operações no banco de dados usando $conexao

// Por exemplo, para executar uma consulta de seleção (SELECT)

$query = "SELECT * FROM country";

$resultado = $conexao->query($query);

// Definir uma lista de cores com transparência
$cores = array("rgba(255, 87, 51, 0.3)", "rgba(255, 195, 0, 0.3)", "rgba(255, 87, 51, 0.3)", "rgba(199, 0, 57, 0.3)", "rgba(144, 12, 63, 0.3)", "rgba(88, 24, 69, 0.3)");

// Verifica se a consulta foi bem-sucedida
if ($resultado) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nome</th><th>Código</th><th>Distrito</th><th>População</th></tr>";

    // Loop para exibir os resultados
    $contador = 0;
    while ($linha = $resultado->fetch_assoc()) {
        // Define a cor da linha
        $cor = $cores[$contador % count($cores)];
        echo "<tr style='background-color: $cor;'>";
        echo "<td>" . $linha['ID'] . "</td>";
        echo "<td>" . $linha['Name'] . "</td>";
        echo "<td>" . $linha['CountryCode'] . "</td>";
        echo "<td>" . $linha['District'] . "</td>";
        echo "<td>" . $linha['Population'] . "</td>";
        echo "</tr>";

        echo 

        $contador++;
    }
    echo "</table>";
} else {
    echo "Erro ao executar a consulta: " . $conexao->error;
}


// Fecha a conexão com o banco de dados quando não for mais necessária

$conexao->close();

?>

</body>
</html>