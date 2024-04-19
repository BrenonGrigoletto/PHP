<!--8. Faça um programa em PHO para uma loja de tintas. O programa deverá pedir o tamanho em metros quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 3 metros quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00. Informe ao usuário a quantidades de latas de tinta a serem compradas e o preço total.  -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $area = $_GET["area"];
    $litros = $area / 3;
    $latas = ceil($litros / 18);
    $total = $latas * 80;

    echo "Você percisará de $latas latas de tinta<br>";
    echo "Preço total é de R$ $total";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tinta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<a href="lista2.php" class="btn btn-secondary mt-3">Voltar</a>
    <div class="container">
        <h1>Calculadora de Tinta</h1>
        <form action="" method="GET">
            <div class="mb-3">
                <label for="area" class="form-label">Área a ser pintada em metros quadrados:</label>
                <input type="number" class="form-control" id="area" name="area" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
</body>
</html>