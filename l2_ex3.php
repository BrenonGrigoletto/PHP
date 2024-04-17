<!--3. Escreva um programa para calcular a soma dos dois valores de entrada. Se os dois valores forem iguais, retorne o triplo da soma.  -->

<?php

function calcularSoma($val1, $val2) {
    $soma = $val1 + $val2;
    
    if ($val1 == $val2) {
        return $soma * 3;
    } else {
        return $soma;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $val1 = filter_input(INPUT_GET, 'val1', FILTER_SANITIZE_NUMBER_INT);
    $val2 = filter_input(INPUT_GET, 'val2', FILTER_SANITIZE_NUMBER_INT);

    $resultado = calcularSoma($val1, $val2);

    echo "O resultado da soma é: $resultado";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <a href="lista2.php">Voltar</a>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h2>Calculadora</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <label for="val1">Valor 1:</label>
        <input type="number" id="val1" name="val1" required><br>

        <label for="val2">Valor 2:</label>
        <input type="number" id="val2" name="val2" required><br>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>
