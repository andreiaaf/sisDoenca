<?php
session_start();
include "../conexaoBD.php";
$id = $_GET['id'];

$del = "DELETE FROM `sisdoencas_aruja`.`registro_sintomas` WHERE (`id_registro_sint` = $id );";

//  //verifica se conectou com banco
if(mysqli_query($conexao , $del)){//sucesso
   $_SESSION['msg'] = "<script>exclui(1);</script>";
    header('Location: ../../pages/usuario.php');
 }
else {//deu erro
   $_SESSION['msg'] = "<script>exclui(0);</script>";
    header('Location: ../../pages/usuario.php');
 }

   
   
?>