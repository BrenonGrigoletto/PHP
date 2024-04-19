<!-- 2. Escreva um programa que leia 7 números diferentes, imprima o menor valor e imprima a posição do menor valor na sequência de entrada. -->

<?php
$numeros = [
    $_GET['n1'] ?? null,
    $_GET['n2'] ?? null,
    $_GET['n3'] ?? null,
    $_GET['n4'] ?? null,
    $_GET['n5'] ?? null,
    $_GET['n6'] ?? null,
    $_GET['n7'] ?? null
];

$menor = null;
$posicao = null;

foreach ($numeros as $chave => $valor) {
    if ($valor !== null && ($menor === null || $valor < $menor)) {
        $menor = $valor;
        $posicao = $chave;
    }
}

$posicao = $posicao + 1;
echo "O menor valor é $menor e está na $posicao ª posição.";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <a href="lista2.php" class="btn btn-secondary mt-3">Voltar</a>
    <h2>Inform 7 numeros distintos</h2>
    <form action="l2_ex2.php" method="get">
        <label for="n1">1º Número</label>
        <input type="number" id="num[]" name="n1" require></input><br>

        <label for="n2">2º Número</label>
        <input type="number" id="num[]" name="n2" riquire></input><br>

        <label for="n2">3º Número</label>
        <input type="number" id="num[]" name="n3" require></input><br>

        <label for="n4">4º Número</label>
        <input type="number" id="num[]" name="n4" require></input><br>

        <label for="n5">5º Número</label>
        <input type="number" id="num[]" name="n5" riquire></input><br>

        <label for="n6">6º Número</label>
        <input type="number" id="num[]" name="n6" require></input><br>

        <label for="n7">7º Número</label>
        <input type="number" id="num[]" name="n7" require></input><br>

        <button type="submit">Mostrar</button>

    </form>

    
</body>
</html>
