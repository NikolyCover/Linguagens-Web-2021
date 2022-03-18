<?php

include('connection.php');

if(empty($_POST['name']) || empty($_POST['cpf']) || empty($_POST['email']) || empty($_POST['cellphone']) || empty($_POST['birthday'])) {
    header('Location: index.php');
    exit();
}

$name = $_POST['name'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$cellphone = $_POST['cellphone'];
$birthday = $_POST['birthday'];

$age = (int)date('Y') - (int)substr($birthday, 0, 4);

$sqlQuery = "INSERT INTO contact (`name`, `cpf`, `email`, `cellphone`, `birthday`, `age`) VALUES ('{$name}', '{$cpf}', '{$email}', '{$cellphone}', '{$birthday}', '{$age}')";

if(mysqli_query($connection, $sqlQuery)) {

    header('Location: index.php');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}