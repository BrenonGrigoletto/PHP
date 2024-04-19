<!--6. Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores. Caso os valores sejam iguais, informar o usuário e imprimir o valor em tela apenas uma vez.
Exemplo, para A=5, B=4 você deve imprimir na tela: "4 5".
para A=5, B=5 você deve imprimir na tela: “Números iguais: 5”.  -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $a = $_GET["a"];
    $b = $_GET["b"];
    if ($a < $b) {
        echo "$a $b";
    } elseif ($a > $b) {
        echo "$b $a";
    } else {
        echo "Números iguais: $a";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <a href="lista2.php" class="btn btn-secondary mt-3">Voltar</a>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="mb-3">
                        <label for="a" class="form-label">Valor de A:</label>
                        <input type="number" class="form-control" id="a" name="a" required>
                    </div>
                    <div class="mb-3">
                        <label for="b" class="form-label">Valor de B:</label>
                        <input type="number" class="form-control" id="b" name="b" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Imprimir</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 mt-3">

            </div>
        </div>
    </div>
</body>
</html>
