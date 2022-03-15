<?php
    include('connection.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contatos</title>
</head>
<body>

    <header>
        <h1>Cadastros</h1>
        <a href="add.php" class="add">Cadastrar</a>
    </header>

    <main>
        <?php
            $result = mysqli_query($connection, 'SELECT * FROM contact');
            $result = mysqli_num_rows($result);

            if($result == 0):
        ?>

        <div class="noneContacts">
            <h1>Ainda não há nenhum contato cadastrado</h1>
        </div>

        <?php
            endif;
        ?>

        <?php
            $result = mysqli_query($connection, 'SELECT * FROM contact');
            $qtd = mysqli_num_rows($result);

            if($qtd > 0) {
                for($i = 0; $i < $qtd; $i++) {
                   $contact = mysqli_fetch_array($result);

                   echo '
                        <div class="contact" id="' . $contact['id'] . '">
                            <h1>' . $contact['name'] . '</h1>
                            <p>' . $contact['cpf'] . '</p>
                            <p>' . $contact['email'] . '</p>
                            <p>' . $contact['celphone'] . '</p>
                            <p>' . $contact['birthday'] . '</p>
                            <p>' . $contact['age'] . '</p>
                        </div>
                   ';
                }
            }

        ?>

    </main>
    
</body>
</html>