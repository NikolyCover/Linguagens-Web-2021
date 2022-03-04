<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Locadora</title>
</head>

<body>
    <header class="menu">
        <span class="logo">Locadora</span>
        <ul class="categories">
            <?php
            include_once('connection.php');

            $categories = mysqli_query($connection, "SELECT * FROM tbCategorias");

            $qtdCategories = mysqli_num_rows($categories);

            for ($i = 0; $i < $qtdCategories; $i++) {
                $category = mysqli_fetch_array($categories);
                echo '<li>' . $category['nomeCategoria'] . '</li>';
            }
            ?>
        </ul>

    </header>
    <main>

        <?php
        include_once('connection.php');

        $movies = mysqli_query($connection, "SELECT * FROM tbFilmes");

        $qtdMovies = mysqli_num_rows($movies);

        for ($i = 0; $i < $qtdMovies; $i++) {
            $movie = mysqli_fetch_array($movies);
            $movieCategory = mysqli_fetch_array(mysqli_query($connection, 'SELECT nomeCategoria FROM tbCategorias WHERE idCategoria=' . $movie['idCategoria']))['nomeCategoria'];

            echo '
                <div class="movie">
                    <h2>' . $movie['tituloFilme'] . '</h2>
                    <p>' . $movie['duracaoFilme'] . '</p>
                    <p>R$' . $movie['valorLocacao'] . '</p>
                    <p>' . $movieCategory . '</p>
                </div>';
        }
        ?>

    </main>
    <footer>

    </footer>
</body>

</html>