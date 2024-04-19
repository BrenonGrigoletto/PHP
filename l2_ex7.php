<!-- 7. Faça um programa em PHP no qual leia um valor em metros e o converta em centímetros. -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if(isset($_GET["m"]) && is_numeric($_GET["m"])) {
        $m = $_GET["m"];
        $cm = $m * 100;
        echo "$m metros é igual a $cm centímetros.";
    } else {
        echo "Insira o valor em metros.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metros para centímetros</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <a href="lista2.php" class="btn btn-secondary mt-3">Voltar</a>
    <h2>Conversor de Metros para Centímetros</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
        <label for="m">Digite o valor em metros:</label>
        <input type="text" id="m" name="m" placeholder="Digite o valor em metros" required>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>