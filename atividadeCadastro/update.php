<?php

include('connection.php');

$id = $_GET['id'];

$name = $_POST['name'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$cellphone = $_POST['cellphone'];
$birthday = $_POST['birthday'];

$sqlQuery = "UPDATE `contact` SET `name`='{$name}', `cpf`='{$cpf}', `email`='{$email}', `cellphone`='{$cellphone}', `birthday`='{$birthday}' WHERE `id` = {$id} ";

if(mysqli_query($connection, $sqlQuery)) {

    header('Location: index.php');
} else {
    echo "Error: " . $sqlQuery . "<br>" . mysqli_error($connection);
}