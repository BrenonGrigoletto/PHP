<!-- 10. Crie uma página em HTML5 na qual a pessoa possa digitar seu peso e sua altura e um programa PHP para o cálculo do IMC da pessoa. Defina se a pessoa está acima ou abaixo do peso. Procure referências sobre este índice (o que é considerado normal, abaixo ou acima do peso). Inclua a referência (página de acesso) para que a pessoa leia sobre este assunto. -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["p"]) && isset($_GET["a"])) {
    $p = $_GET["p"];
    $a = $_GET["a"];

    if ($a > 0) {
        $imc = $p / ($a * $a);

        echo "Seu IMC é: $imc<br>";

        if ($imc < 18.5) {
            echo "Abaixo do peso.";
        } elseif ($imc >= 18.5 && $imc < 25) {
            echo "O Peso está normal.";
        } elseif ($imc >= 25 && $imc < 30) {
            echo "Acima do peso.";
        } else {
            echo "Obesidade.";
        }
    } else {
        echo "Altura inválida.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<a href="lista2.php" class="btn btn-secondary mt-3">Voltar</a>
    <h1>Calculadora de IMC</h1>
    <form method="GET" action="">
        <div class="mb-3">
            <label for="p" class="form-label">Peso (kg):</label>
            <input type="number" step="0.01" class="form-control" id="p" name="p" required>
        </div>
        <div class="mb-3">
            <label for="a" class="form-label">Altura (metros):</label>
            <input type="number" step="0.01" class="form-control" id="a" name="a" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
</body>
</html>