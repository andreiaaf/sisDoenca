<?php
	session_start();
	include "../conexaoBD.php";

   
    $idajuda =$_GET['id'];
    

      $cadastro = "UPDATE `sisdoencas_aruja`.`ajuda_voluntarios` SET `status` = 'Concluído' WHERE (`id_ajd_vol` = $idajuda);";
echo $cadastro;
         if(mysqli_query($conexao , $cadastro)){//sucesso
            $_SESSION['msg'] = "<script>concluir(1);</script>";
              header('Location: ../../pages/voluntarios.php');
         }
      
     else {//deu erro
       $_SESSION['msg'] = "<script>concluir(0);</script>";
         header('Location: ../../pages/voluntarios.php');
      }
