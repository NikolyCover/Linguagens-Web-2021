<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h1>Calculadora de Tabuada</h1>
    <form action="atv2.php" method="POST">
        <label for="num">De qual número você deseja saber a tabuada?</label>
        <input type="number" id="num" name="num">

        <input type="submit" value="Gerar tabuada">
    </form>
</body>
</html>

<?php
    $num = $_POST['num'];

    if(isset($num)) {
        for($i = 0; $i <= 10; $i++) {
            echo '<br>'.$num.' x '.$i.' = '.$num * $i;
        }
    }
?>