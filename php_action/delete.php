<?php
//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])){
    $id = $conn->escape_string($_POST['id']);

    $sql = "DELETE FROM clientes WHERE id = '$id'";

    if($conn->query($sql)){
        $_SESSION['mensagem'] = 'Deletado com sucesso';
    }else{
        $_SESSION['mensagem'] = 'Erro ao deletar';
    };
    header('Location: ../index.php');
};