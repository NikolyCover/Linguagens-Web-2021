<?php

include('connection.php');

$id = $_GET['id'];

$result = mysqli_query($connection, "SELECT * FROM contact WHERE id = '{$id}'");
$contact = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Editar Contato</title>
</head>
<body>
    <header>
        <h1>Editar Contato</h1>
    </header>
    <main>
        <form action="update.php?id='<?php echo $id?>'" method="POST">
            <div class="field">
                <label>Nome do contato:</label>
                <input type="text" name="name" value="<?php echo $contact['name'] ?>" required>
            </div>

            <div class="field">
                <label>CPF:</label>
                <input type="text" name="cpf" value="<?php echo $contact['cpf'] ?>" required>
            </div>

            <div class="field">
                <label>Email:</label>
                <input type="email" name="email" value="<?php echo $contact['email'] ?>" required>
            </div>

            <div class="field">
                <label>Número de celular:</label>
                <input type="text" name="cellphone" value="<?php echo $contact['cellphone'] ?>" required>
            </div>

            <div class="field">
                <label>Data de Nascimento:</label>
                <input type="date" name="birthday" value="<?php echo $contact['birthday'] ?>" required>
            </div>

            <input type="submit" value="Atualizar">
        </form>
    </main>
</body>
</html>