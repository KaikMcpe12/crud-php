<?php
//Conexão com o banco de dados
$servename = 'localhost';
$username = 'root';
$password = '';
$db_name = 'crud';

$conn = new mysqli($servename, $username, $password, $db_name);
$conn->set_charset('utf8');

if($conn->connect_error){
    echo "Erro na conexão: ". $conn->connect_error;
}