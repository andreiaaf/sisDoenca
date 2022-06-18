<?php
include '../conexaoBD.php';

$ano = $_POST['ano'];
$tipo = $_POST['tipo'];




$sqlCorrente = "SELECT b.bairro as nome,b.latitude,b.longetude, count(*) as qtd FROM sisdoencas_aruja.registros_doencas r join bairros b on r.bairro=b.id_bairro where r.id_doenca = $tipo and r.data_inicio like '%$ano%' group by b.id_bairro;";
 $resultado_Corrente = $conexao->query($sqlCorrente);
 if (!$resultado_Corrente || mysqli_num_rows($resultado_Corrente) == 0) {
     $Corrente = [];
  } else {
     while ($row = mysqli_fetch_assoc($resultado_Corrente)) {
  
        $Corrente[]  = $row;
     }
  }
  $response['Valores'] = $Corrente;


$conexao->close();



echo json_encode($response);
exit();



?>