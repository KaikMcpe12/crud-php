<?php
//Sessão
session_start();
//Conexão
require_once 'db_connect.php';
//Clear
function clear($input){
    global $conn;
    //slq
    $var = $conn->escape_string($input);
    //xss
    $var = htmlspecialchars($var);
    return $var;
};

if(isset($_POST['btn-cadastrar'])){
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);

    $sql = "INSERT INTO clientes(nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

    if($conn->query($sql)){
        $_SESSION['mensagem'] = 'Cadastrado com sucesso';
    }else{
        $_SESSION['mensagem'] = 'Erro ao cadastrar';
    };
    header('Location: ../index.php');
};