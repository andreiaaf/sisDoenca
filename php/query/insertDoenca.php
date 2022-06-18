
<?php
session_start();
include "../conexaoBD.php";
$usu = $_POST['idusu'];
$iddoenca = $_POST['iddoenca'];
$inidoenca = $_POST['inidoenca'];

$fimdoenca = $_POST['fimdoenca'];
$bairro = $_POST['bairro'];

$cadastro = "INSERT INTO `sisdoencas_aruja`.`registros_doencas` (`id_usuario`, `id_doenca`, `data_inicio`, `data_fim`, `bairro`) VALUES ($usu, $iddoenca, '$inidoenca','$fimdoenca', $bairro) ;";

if (mysqli_query($conexao, $cadastro)) { //sucesso
   $_SESSION['msg'] = "<script>cadastro(1);</script>";
   header('Location: ../../pages/usuario.php');

} else { //deu erro
   $_SESSION['msg'] = "<script>cadastro(0);</script>";
  header('Location: ../../pages/usuario.php');
}


?>