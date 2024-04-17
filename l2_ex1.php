<!-- 1. Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero". -->

    <?php 
    function validaPositivo($num){
        if(isset($num) ){
            if ($num>0){
                echo "O número é positivo";
            }
            else if($num<0){
                echo"O número é negativo";
            }
            else{
                echo"O número é zero";
            }
            }else {
            echo"É possível informar o numero via URL";
        }
    }
    validaPositivo($_GET['num']);
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 1</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <a href="lista2.php">Voltar</a>
        <h1>Valida se numero é positivo ou negativo</h1>
        <form action="l2_ex1.php" method="get">
            <label for="num"> Digite um numeto qualquer </label>
            <input type="number" id="num" name= "num">
            <button type="submit">Validar</button>
        
        </form>
        
    </body>
    </html>
