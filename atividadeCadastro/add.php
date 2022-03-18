<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cadastrar Contato</title>
</head>
<body>
    <header>
        <h1>Cadastrar Contato</h1>
    </header>
    <main>
        <form action="register.php" method="POST">
            <div class="field">
                <label>Nome do contato:</label>
                <input type="text" name="name" required>
            </div>

            <div class="field">
                <label>CPF:</label>
                <input type="text" name="cpf" required>
            </div>

            <div class="field">
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>

            <div class="field">
                <label>Número de celular:</label>
                <input type="text" name="cellphone" required>
            </div>

            <div class="field">
                <label>Data de Nascimento:</label>
                <input type="date" name="birthday" required>
            </div>

            <input type="submit" value="Cadastrar">
        </form>
    </main>
</body>
</html>