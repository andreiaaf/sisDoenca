
<?php
	session_start();
	include "../conexaoBD.php";
    $usu = $_POST['idusu'];
    $idsintoma =$_POST['idsintoma'];
    $inisintoma =$_POST['inisintoma'];

    $fimsintoma=$_POST['fimsintoma'];
    $bairrosintoma=$_POST['bairrosintoma'];
    
 
    
    $cadastro = "INSERT INTO `sisdoencas_aruja`.`registro_sintomas` (`id_usuario`, `id_sintoma`, `data_inicio`, `data_fim`, `bairro`) VALUES ($usu, $idsintoma, '$inisintoma', '$fimsintoma',  $bairrosintoma);";

      //verifica se conectou com banco
     if(mysqli_query($conexao , $cadastro)){//sucesso
       $_SESSION['msg'] = "<script>cadastro(1);</script>";
        header('Location: ../../pages/usuario.php');
       
      }
     else {//deu erro
       $_SESSION['msg'] = "<script>cadastro(0);</script>";
        header('Location: ../../pages/usuario.php');
      }
     
            
?>