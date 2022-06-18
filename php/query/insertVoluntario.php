<?php
	session_start();
	include "../conexaoBD.php";
    $usu = $_GET['idusu'];
   
    $idajuda =$_GET['id'];
    
    
    $cadastro = "INSERT INTO `sisdoencas_aruja`.`ajuda_voluntarios` (`id_ajuda`, `id_voluntarios`, `status`) VALUES ($idajuda,  $usu, 'Em Andamento');";

     if(mysqli_query($conexao , $cadastro)){//sucesso
      $cadastro2 = "UPDATE `sisdoencas_aruja`.`registro_ajudas` SET `status` = 'Fechado' WHERE (`id_registro_ajuda` = $idajuda);";

         if(mysqli_query($conexao , $cadastro2)){//sucesso
            $_SESSION['msg'] = "<script>aceita(1);</script>";
               header('Location: ../../pages/voluntarios.php');
         }
      }
     else {//deu erro
       $_SESSION['msg'] = "<script>aceita(0);</script>";
         header('Location: ../../pages/voluntarios.php');
      }
?>