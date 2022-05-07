<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sisDoencas_aruja";
$conexao = new mysqli($servername, $username, $password, $dbname);

    if ($conexao->connect_error){
        die("Connection failed: " .$conexao->connect_error);
    }
$conexao->set_charset("utf8");
    if($conexao->connect_error){
        die("Connection failed: " . $conexao->connect_error);
    }
?>