<?php
session_start();

$idusuario = $_SESSION['idvoluntario'];
$nome = $_SESSION['nome'];

require_once("../php/conexaoBD.php");

$sql = "SELECT id_registro_ajuda,tipo_ajuda, nome_usuario,r.data_inicio,r.data_fim,obs FROM sisdoencas_aruja.registro_ajudas r inner join ajuda a on r.id_ajuda = a.id_ajuda inner join usuario u on r.id_usuario = u.id_usuario where status = 'Aberto';";
$resultado = mysqli_query($conexao, $sql);

$sql2 = "SELECT av.id_ajd_vol,r.data_fim,r.data_inicio,r.obs,a.tipo_ajuda,u.nome_usuario,av.status FROM sisdoencas_aruja.registro_ajudas r inner join ajuda a on r.id_ajuda = a.id_ajuda inner join usuario u on r.id_usuario = u.id_usuario inner join ajuda_voluntarios av on av.id_ajuda =r.id_registro_ajuda where av.id_voluntarios = $idusuario;";
$resultado2 = mysqli_query($conexao, $sql2);




?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/voluntarios.css">

  <title>Página de Usuário</title>
</head>

<body>
  <header class="header-area overlay">
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="../img/logo1.png" alt="" /><span>
              Projeto Integrador
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="container">
              <div class=" mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav justify-content-between ">
                  <div class="d-none d-lg-flex">

                    <li class="nav-item">
                      <a class="nav-link" href="service.html">
                        PI@Projeto.com.br
                      </a>
                    </li>
                  </div>
                  <div class=" d-none d-lg-flex">
                    <li class="nav-item">
                      Seja bem-vindo(a) <?php echo $nome; ?>
                    </li>

                  </div>
                </ul>
              </div>
            </div>


          </div>
        </nav>
      </div>
    </header>

    <div class="banner">

      <div class="container">
        <h1>Ajudas em Aberto</h1>
        <p>Acesse a relação de ajudas disponíveis para voluntariado.</p>
        <a href="#tablesintomas" class="button button-danger" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Saiba Mais</a>
      </div>
      <div class="container">
        <h1>Status Ajudas</h1>
        <p>Acesse a relação de ajudas já realizadas e status das ajudas em andamento.</p>
        <a href="#tableajuda" class="button button-danger" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">Saiba Mais</a>
      </div>
    </div>
  </header>

  <main>

    <section class="content">
      <div class="container" id="myGroup">
        <h2>

          <div class="collapse" id="collapseExample" data-parent="#myGroup">
            <div class="card card-body" id="tabledoencas">
              <p>Ajudas em aberto</p>
              <table class="table table-hover" id="tabledoencas">
                <thead>
                  <tr>
                    <th>Solicitante</th>
                    <th>Tipo de Ajuda</th>
                    <th>Início</th>
                    <th>Fim</th>
                    <th>Obs</th>
                    <th>Aceitar</th>
                  </tr>
                </thead>
                <tbody>

                  <?php while ($row = mysqli_fetch_assoc($resultado)) {

                    echo  '<tr>';
                    echo  '<td>' . $row['nome_usuario'] . '</td>';
                    echo  '<td>' . $row['tipo_ajuda'] . '</td>';
                    echo  '<td>' . $row['data_inicio'] . '</td>';
                    echo  '<td>' . $row['data_fim'] . '</td>';
                    echo  '<td>' . $row['obs'] . '</td>';
                    echo  '<td><a class="btn btn-success" href="../php/query/insertVoluntario.php?id=' . $row['id_registro_ajuda'] . '&idusu=' . $idusuario . '" role="button">O</a></td>';
                    echo  '<tr>';
                  } ?>
                </tbody>
              </table>
            </div>

          </div>


          <div class="collapse" id="collapseExample2" data-parent="#myGroup">
            <div class="card card-body">
              <p>Status Ajuda</p>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Solicitante</th>
                    <th>Tipo de Ajuda</th>
                    <th>Início</th>
                    <th>Fim</th>
                    <th>Obs</th>
                    <th>Status</th>
                    <th>Concluir</th>

                  </tr>
                </thead>
                <tbody>
                  <?php while ($row2 = mysqli_fetch_assoc($resultado2)) {

                    echo  '<tr>';
                    echo  '<td>' . $row2['nome_usuario'] . '</td>';
                    echo  '<td>' . $row2['tipo_ajuda'] . '</td>';
                    echo  '<td>' . $row2['data_inicio'] . '</td>';
                    echo  '<td>' . $row2['data_fim'] . '</td>';
                    echo  '<td>' . $row2['obs'] . '</td>';
                    echo  '<td>' . $row2['status'] . '</td>';
                    echo  '<td>';
                    if($row2['status'] != "Concluído"){
                    echo  ' <a class="btn btn-success" href="../php/query/updateVoluntario.php?id=' . $row2['id_ajd_vol'] . '" role="button">O</a>';
                    }else{ echo  ' - ';}
                    echo  '</td>';
                    echo  '<tr>';
                  } ?>
                </tbody>
              </table>
            </div>
           
          </div>
      </div>


    </section>
  </main>





  <!-- cards doenças, sintomas e ajudas -->




  <script>
    jQuery(function($) {
      $(window).on('scroll', function() {
        if ($(this).scrollTop() >= 200) {
          $('.navbar').addClass('fixed-top');
        } else if ($(this).scrollTop() == 0) {
          $('.navbar').removeClass('fixed-top');
        }
      });

      function adjustNav() {
        var winWidth = $(window).width(),
          dropdown = $('.dropdown'),
          dropdownMenu = $('.dropdown-menu');

        if (winWidth >= 768) {
          dropdown.on('mouseenter', function() {
            $(this).addClass('show')
              .children(dropdownMenu).addClass('show');
          });

          dropdown.on('mouseleave', function() {
            $(this).removeClass('show')
              .children(dropdownMenu).removeClass('show');
          });
        } else {
          dropdown.off('mouseenter mouseleave');
        }
      }

      $(window).on('resize', adjustNav);

      adjustNav();
    });
  </script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>