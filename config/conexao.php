<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "estoque";
//criando o objeto da conexão
$conn = new mysqli($host,$user,$pass,$db,3307);

if(!$conn){
    die("Erro de Conexão: " . mysqli_connect_error());
}


?>