<?php
// CREDENCIAIS
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'crud_banco');

//Tentativa de conexão
$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD, 
DB_NAME);

//Checagem de conexão
if($link === false){
    die("ERRO: Não foi possivel conectar!".
    mysqli_connect_error());
}


?>