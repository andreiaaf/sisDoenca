<?php
session_start();

$idusuario = $_SESSION['idusuario'];
$nome = $_SESSION['nome'];

require_once("../php/conexaoBD.php");

$sql = "SELECT * FROM sisdoencas_aruja.doencas;";
$resultado = mysqli_query($conexao, $sql);

$sql2 = "SELECT * FROM sisdoencas_aruja.bairros;";
$resultado2 = mysqli_query($conexao, $sql2);

$sql3 = "SELECT * FROM sisdoencas_aruja.sintomas;";
$resultado3 = mysqli_query($conexao, $sql3);

$sql4 = "SELECT * FROM sisdoencas_aruja.bairros;";
$resultado4 = mysqli_query($conexao, $sql4);

$sql5 = "SELECT * FROM sisdoencas_aruja.ajuda;";
$resultado5 = mysqli_query($conexao, $sql5);


$sqlLista = "SELECT id_registro_doencas, nome_doencas,data_inicio,data_fim, b.bairro FROM sisdoencas_aruja.registros_doencas r inner join bairros b on b.id_bairro=r.bairro inner join doencas d on d.id_doencas = r.id_doenca where id_usuario = $idusuario;";
$resultadoLista = mysqli_query($conexao, $sqlLista);
$sqlLista2 = "SELECT id_registro_sint,sintoma,data_inicio,data_fim, b.bairro FROM sisdoencas_aruja.registro_sintomas r inner join bairros b on b.id_bairro=r.bairro inner join sintomas s on s.id_sintoma= r.id_sintoma where id_usuario = $idusuario;";
$resultadoLista2 = mysqli_query($conexao, $sqlLista2);
$sqlLista3 = "SELECT id_registro_ajuda,tipo_ajuda,data_inicio,data_fim, obs ,status FROM sisdoencas_aruja.registro_ajudas r  inner join ajuda a on a.id_ajuda = r.id_ajuda where id_usuario = $idusuario;";
$resultadoLista3 = mysqli_query($conexao, $sqlLista3);

?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Projeto Integrador</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />
  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="../img/logo.jpg" alt="" /><span>
              Projeto Integrador
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="container">
              <div class=" mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav justify-content-between ">
                  <div class="d-none d-lg-flex">
                    <li class="nav-item">
                      <a class="nav-link" href="mapaHome.html">
                        Mapa de Doenças e Sintomas</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="loginVoluntario.php">
                        Seja Voluntário
                      </a>
                    </li>
                  </div>
                  <div class=" d-none d-lg-flex">
                    <li class="nav-item">
                      <a class="nav-link" href="login.php">
                        Entrar / Cadastro
                      </a>
                    </li>
                    <form class="form-inline my-2 ml-5 mb-3 mb-lg-0">
                      <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                    </form>
                  </div>
                </ul>
              </div>
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()"></button>
            </div>
            <div id="myNav" class="overlay">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <div class="overlay-content">
                <a href="login.php">Usuário</a>
                <a href="loginVoluntario.php">Voluntário</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

     <!-- products section -->
  <section class="products_section">
   
    <div class="container layout_padding">
      <div class="product_container">
    
          <div class="product_box">
            <div class="product_img-box">
              <img src="../img/prevencao-de-doenca.png" alt="" />
              <span>
              <a href="#tabledoencas" class="button button-primary" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Acessar</a>
              </span>
            </div>
            <div class="product_detail-box">
              <span>
              <h3>Doenças</h3>
              </span>
              <p>
              Acesse a relação de doenças já cadastradas ou cadastre uma nova doença.
              </p>
            </div>
          </div>
        
       
          <div class="product_box">
            <div class="product_img-box">
              <img src="../img/enxaqueca.png" alt="" />
              <span>
              <a href="#tablesintomas" class="button button-primary" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">Acessar</a>
              </span>
            </div>
            <div class="product_detail-box">
              <span>
                <h3>Sintomas</h3>
              </span>
              <p>
              Acesse a relação de sintomas já cadastrados ou cadastre um novo sintoma.
              </p>
            </div>
          </div>
      
          <div class="product_box">
            <div class="product_img-box">
              <img src="../img/ajudando.png" alt="" />
              <span>
              <a href="#tableajuda" class="button button-primary" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">Acessar</a>
              </span>
            </div>
            <div class="product_detail-box">
              <span>
              <h3>Ajuda voluntária</h3>
              </span>
              <p>
              Acesse a relação de ajudas solicitadas ou solicite 
              </p>
            </div>
          </div>
        
           </div>
    </div>
  </section>
  </div>
  <!-- end products section -->

  <main>
  <!-- find section -->
  <section class="find_section layout_padding-bottom">
  <div class="container" id="myGroup">
        
  <div class="collapse" id="collapseExample" data-parent="#myGroup">
          <div class="row">
            <div class="col-md-6">
              <div class="card card-body" id="tabledoencas">
                <p>Doenças Já Cadastradas</p>
                <table class="table table-hover" id="tabledoencas">
                  <thead>
                    <tr>
                      <th>Doença</th>
                      <th>Início</th>
                      <th>Término</th>
                      <th>Bairro</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($rowLista = mysqli_fetch_assoc($resultadoLista)) {

                      echo  '<tr>';
                      echo  '<td>' . $rowLista['nome_doencas'] . '</td>';
                      echo  '<td>' . $rowLista['data_inicio'] . '</td>';
                      echo  '<td>' . $rowLista['data_fim'] . '</td>';
                      echo  '<td>' . $rowLista['bairro'] . '</td>';
                      echo  '<td><a class="btn btn-danger" href="../php/query/deleteDoenca.php?id=' . $rowLista['id_registro_doencas'] . '" role="button">X</a></td>';
                      echo  '<tr>';
                    } ?>


                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-body">
                <h2>Cadastrar nova Doença</h2>
                <form action="../php/query/insertDoenca.php" method="POST">
                  <div class="form-group">
                    <label for="recipient-name" name="iddoenca" class="col-form-label">Escolha a Doença</label>
                    <select name="iddoenca">
                      <?php while ($row = mysqli_fetch_assoc($resultado)) {

                        echo  '<option value="' . $row['id_doencas'] . '">' . $row['nome_doencas'] . '</option>';
                      } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Data Início:</label>
                    <input type="date" class="form-control" name="inidoenca" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Data Fim:</label>
                    <input type="date" class="form-control" name="fimdoenca" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" name="bairro" class="col-form-label">Escolha o Bairro </label>
                    <select name="bairro" class="form-control">
                      <?php while ($row2 = mysqli_fetch_assoc($resultado2)) {

                        echo  '<option value="' . $row2['id_bairro'] . '">' . $row2['bairro'] . '</option>';
                      } ?>
                    </select>
                  </div>
                  <input type="hidden" name="idusu" value="<?php echo $idusuario; ?>">
                  <input type="submit" class="btn btn-success" value="Salvar">

                </form>
              </div>
            </div>

          </div>
        </div>




        <div class="collapse" id="collapseExample2" data-parent="#myGroup">
          <div class="row">
            <div class="col-md-6">
              <div class="card card-body">
                <p>Sintomas Já Cadastrados</p>
                <table class="table table-hover">
                  <thead>
                    <tr>

                      <th>Sintoma</th>
                      <th>Início</th>
                      <th>término</th>
                      <th>Bairro</th>
                      <th>Excluir</th>
                  </thead>
                  <tbody>
                    <?php while ($rowLista2 = mysqli_fetch_assoc($resultadoLista2)) {

                      echo  '<tr>';
                      echo  '<td>' . $rowLista2['sintoma'] . '</td>';
                      echo  '<td>' . $rowLista2['data_inicio'] . '</td>';
                      echo  '<td>' . $rowLista2['data_fim'] . '</td>';
                      echo  '<td>' . $rowLista2['bairro'] . '</td>';
                      echo  '<td><a class="btn btn-danger" href="../php/query/deleteDoenca.php?id=' . $rowLista2['id_registro_sint'] . '" role="button">X</a></td>';
                      echo  '<tr>';
                    } ?>

                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-body">
                <form action="../php/query/insertSintoma.php" method="POST">
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Escolha a Sintoma</label>
                    <select name="idsintoma">
                      <?php while ($row3 = mysqli_fetch_assoc($resultado3)) {

                        echo  '<option value="' . $row3['id_sintoma'] . '">' . $row3['sintoma'] . '</option>';
                      } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Data Início:</label>
                    <input type="date" class="form-control" name="inisintoma" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Data Fim:</label>
                    <input type="date" class="form-control" name="fimsintoma" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Escolha o Bairro </label>
                    <select name="bairrosintoma" class="form-control">
                      <?php while ($row4 = mysqli_fetch_assoc($resultado4)) {

                        echo  '<option value="' . $row4['id_bairro'] . '">' . $row4['bairro'] . '</option>';
                      } ?>
                    </select>
                  </div>
                  <input type="hidden" name="idusu" value="<?php echo $idusuario; ?>">
                  <input type="submit" class="btn btn-success" value="salvar">
                </form>
              </div>
            </div>

          </div>
        </div>

        <div class="collapse" id="collapseExample3" data-parent="#myGroup">
          <div class="row">
            <div class="col-md-6">
              <div class="card card-body">
                <p>Ajudas Já Cadastradas</p>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Tipo Ajuda</th>
                      <th>Data Inicio</th>
                      <th>Término</th>
                      <th>Obs</th>
                      <th>Status</th>
                      <th>Excluir</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($rowLista3 = mysqli_fetch_assoc($resultadoLista3)) {

                      echo  '<tr>';
                      echo  '<td>' . $rowLista3['tipo_ajuda'] . '</td>';
                      echo  '<td>' . $rowLista3['data_inicio'] . '</td>';
                      echo  '<td>' . $rowLista3['data_fim'] . '</td>';
                      echo  '<td>' . $rowLista3['obs'] . '</td>';
                      echo  '<td>' . $rowLista3['status'] . '</td>';
                      echo  '<td>';
                      if($rowLista3['status'] != "Fechado"){
                      echo  '<a class="btn btn-danger" href="../php/query/deleteAjuda.php?id=' . $rowLista3['id_registro_ajuda'] . '" role="button">X</a>';
                    }else{ echo  ' - ';}
                    echo  '</td>';
                      echo  '<tr>';
                    } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-body">
                <form action="../php/query/insertAjuda.php" method="POST">
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Escolha o tipo de ajuda</label>
                    <select name="idajuda" class="form-control">
                      <?php while ($row5 = mysqli_fetch_assoc($resultado5)) {

                        echo  '<option value="' . $row5['id_ajuda'] . '">' . $row5['tipo_ajuda'] . '</option>';
                      } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Data Início:</label>
                    <input type="date" class="form-control" name="ini" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Data Fim:</label>
                    <input type="date" class="form-control" name="fim" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Observação:</label>
                    <textarea class="form-control" name="obs" id="message-text"></textarea>
                  </div>

                  <input type="hidden" name="idusu" value="<?php echo $idusuario; ?>">
                  <input type="submit" class="btn btn-success" value="Salvar">
                </form>
              </div>

            </div>

          </div>
        </div>
      </div>
      </div>
    </section>

    <main>



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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>


  <script src="../js/mensagens.js"></script>

  <?php
  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  };
  ?>
</body>

</html>