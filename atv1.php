<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMC</title>
</head>
<body>
    <form action="atv1.php" method="POST">
        <label for="weight">Informe seu peso:</label>
        <input type="number" id="weight" name="weight">

        <label for="height">Informe sua altura:</label>
        <input type="text" id="height" name="height">

        <input type="submit" value="calcular">
    </form>
</body>
</html>

<?php
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    if(isset($weight) && isset($height)) {
        $imc = $weight / $height ** 2;

        if($imc < 18.5) {
            echo "<br>Classificação: Abaixo do Peso";
        }
    
        else if($imc >= 18.5 && $imc <= 24.9) {
            echo "<br>Classificação: Peso normal";
        }
    
        else if($imc >= 25  && $imc < 29.9) {
            echo "<br>Classificação: Sobrepeso";
        }
    
        else if($imc >= 30 && $imc <= 34.9) {
            echo "<br>Classificação: Obesidade Grau I";
        }
    
        else if($imc >= 35 && $imc <= 39.9) {
            echo "<br>Classificação: Obesidade Grau II";
        }
    
        else if($imc >= 40) {
            echo "<br>Classificação: Obesidade Grau III ou Mórbida";
        }
    }
?>