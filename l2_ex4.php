<!--4. Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex:
Entrada = 4
Saída = 4 X 0 = 0...4 X 10 = 40.  -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $num = $_GET["num"];

    for ($i = 0; $i <= 10; $i++) {
        $result = $num * $i;
        echo "$num X $i = $result<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <a href="lista2.php" class="btn btn-secondary mt-3">Voltar</a>
    <div class="container">
        <h1>Tabuada</h1>
        <form method="GET">
            <div class="mb-3">
                <label for="num" class="form-label">Digite um número:</label>
                <input type="number" class="form-control" id="num" name="num" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
    </div>
</body>
</html>
