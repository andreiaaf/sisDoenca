<?php
	session_start();
	include "../conexaoBD.php";
    $usu = $_POST['idusu'];
    $idajuda =$_POST['idajuda'];
    $ini=$_POST['ini'];
    $fim=$_POST['fim'];
    $obs=$_POST['obs'];
    
    
    
    $cadastro = "INSERT INTO `sisdoencas_aruja`.`registro_ajudas` (`id_usuario`, `id_ajuda`, `data_inicio`, `data_fim`, `obs`, `status`) VALUES ($usu, $idajuda,'$ini', '$fim','$obs', 'Aberto');";


     //  //verifica se conectou com banco
     if(mysqli_query($conexao , $cadastro)){//sucesso
        $_SESSION['msg'] = "<script>cadastro(1);</script>";
      header('Location: ../../pages/usuario.php');
      
      }
     else {//deu erro
          $_SESSION['msg'] = "<script>cadastro(0);</script>";
       header('Location: ../../pages/usuario.php');
      }
?>