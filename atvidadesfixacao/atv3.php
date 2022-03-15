<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <h1>Média de notas</h1>
    <form action="atv3.php" method="POST">
        <label for="grade1">Nota 1</label>
        <input type="number" id="grade1" name="grade1">
        <br>
        <label for="grade2">Nota 2</label>
        <input type="number" id="grade2" name="grade2">
        <br>
        <label for="grade3">Nota 3</label>
        <input type="number" id="grade3" name="grade3">
        <br>
        <label for="grade4">Nota 4</label>
        <input type="number" id="grade4" name="grade4">
        <br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html4

<?php
    $grade1 = $_POST['grade1'];
    $grade2 = $_POST['grade2'];
    $grade3 = $_POST['grade3'];
    $grade4 = $_POST['grade4'];

    if(isset($grade1) && isset($grade2) && isset($grade3) && isset($grade4)) {
        $avg = ($grade1 + $grade2 + $grade3 + $grade4) / 4;

        echo '<br>Média: '.$avg;
    }
?>