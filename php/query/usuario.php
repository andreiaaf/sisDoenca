<?php
session_start();
	include "../conexaoBD.php";
    $login = $_POST['login'];
    $senha = $_POST['senha'];
  
    $resultado= mysqli_query($conexao, "SELECT id_usuario,nome_usuario FROM sisdoencas_aruja.usuario where login_usuario= '$login 'and senha_usuario='$senha'");

    $dadousu = mysqli_fetch_assoc($resultado);
    if (mysqli_num_rows($resultado) != 0) {
     
       $_SESSION['idusuario'] = $dadousu['id_usuario'];
       $_SESSION['nome'] = $dadousu['nome_usuario'];
         header('Location: ../../pages/usuario.php');
    }


?>
       