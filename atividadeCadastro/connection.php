<?php
    $server = "localhost";
    $user = "root";
    $password = "bancodedados";
    $database = "Contact";

    $connection = mysqli_connect($server, $user, $password, $database) or die ("The connection to the database failed. Erro: ".mysqli_connect_error());