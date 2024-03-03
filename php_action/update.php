<?php
//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])){
    $nome = $conn->escape_string($_POST['nome']);
    $sobrenome = $conn->escape_string($_POST['sobrenome']);
    $email = $conn->escape_string($_POST['email']);
    $idade = $conn->escape_string($_POST['idade']);

    $id = $conn->escape_string($_POST['id']);

    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

    if($conn->query($sql)){
        $_SESSION['mensagem'] = 'Atualizado com sucesso';
    }else{
        $_SESSION['mensagem'] = 'Erro ao atualizar';
    };
    header('Location: ../index.php');
};