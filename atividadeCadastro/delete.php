<?php

include('connection.php');

$id = $_GET['id'];

$sqlQuery = "DELETE FROM contact WHERE id = {$id}";

if(mysqli_query($connection, $sqlQuery)) {

    header('Location: index.php');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}