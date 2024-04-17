<!--5. Crie um algoritmo que solicite um número, faça o cálculo fatorial e exiba o resultado na tela.
Ex: Entrada = 3
Processamento: (3 * 2) * 1
Saída: 6  -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $num = $_GET["num"];
    $fat = 1;
    for ($i = $num; $i >= 1; $i--) {
        $fat *= $i;
    }
    echo "Fatorial de $num é $fat";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <a href="lista2.php">Voltar</a>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="mb-3">
                        <label for="num" class="form-label">Digite um número:</label>
                        <input type="number" class="form-control" id="num" name="num" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular Fatorial</button>
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
