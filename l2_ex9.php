<!--9. Faça um script PHP que receba de um formulário HTML5 uma variável com o ano de nascimento de uma pessoa, crie uma constante com o ano atual, calcule e mostre:
a. a idade dessa pessoa em anos;
b. quantos dias esta pessoa já viveu;
c. quantos anos essa pessoa terá em 2025  -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nasc = $_GET["nasc"];
    $hoje = date("Y");
    $idade = $hoje - $nasc;
    $vividos = $idade * 365;
    $idade2025 = 2025 - $nasc;

    echo "Idade: $idade anos<br>";
    echo "Dias vividos: $vividos dias<br>";
    echo "Idade em 2025: $idade2025 anos";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<a href="lista2.php" class="btn btn-secondary mt-3">Voltar</a>
    <form method="get">
        <label for="nasc">Ano de Nascimento:</label>
        <input type="number" id="nasc" name="nasc" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>