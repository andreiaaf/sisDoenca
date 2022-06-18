<?php
session_start();
	include "../conexaoBD.php";
    $login = $_POST['login'];
    $senha = $_POST['senha'];
  
    $resultado= mysqli_query($conexao, "SELECT * FROM sisdoencas_aruja.voluntarios where login_voluntarios='$login' and senha_voluntarios='$senha';");

    $dadousu = mysqli_fetch_assoc($resultado);
    if (mysqli_num_rows($resultado) != 0) {
     
       $_SESSION['idvoluntario'] = $dadousu['id_voluntarios'];
       $_SESSION['nome'] = $dadousu['nome_voluntarios'];
         header('Location: ../../pages/voluntarios.php');
    }


?>