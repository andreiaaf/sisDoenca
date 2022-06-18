<?php
include '../conexaoBD.php';

$ano = $_POST['ano'];
$doenca = $_POST['doenca/8'];
// $despesa = $_POST['despesa'];



$sqlCorrente = "SELECT sum(valor_pago) as corrente FROM biprefeitura.balancete_despesa BD inner join biprefeitura.elementos_despesas ED on BD.id_elemento=ED.id_elemento  where ED.tipo_despesas ='CORRENTE' AND ED.tipo_elemento ='$despesa' AND BD.ano ='$ano'";
 $resultado_Corrente = $conexao->query($sqlCorrente);
 if (!$resultado_Corrente || mysqli_num_rows($resultado_Corrente) == 0) {
     $Corrente = [];
  } else {
     while ($row = mysqli_fetch_assoc($resultado_Corrente)) {
  
        $Corrente[]  = $row;
     }
  }
  $response['Corrente'] = $Corrente;


$conexao->close();



echo json_encode($response);
exit();



?>