<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />

    <!------ Include the above in your HEAD tag ---------->
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
                <a href="usuario.php">Usuário</a>
                <a href="voluntarios.php">Voluntário</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->




<!-- login start -->


<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="../img/help.png" alt="" />
            <h3>Bem Vindo! Cadastre-se para ser um Voluntário</h3>
            <p>Ou acesse para consultar opções de ajuda e status!</p>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="newuser-tab" data-toggle="tab" href="#newuser" role="tab" aria-controls="newuser" aria-selected="false">Cadastrar</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <h3 class="register-heading">Login</h3>
                    <div class="row register-form">
                        <div class="col-md-12 profile_card">
                            <form class="form-inline" action="../php/query/voluntario.php" method="POST">
                                <div class="form-group">
                                    <i class="fa fa-envelope-o"></i>
                                    <input type="text" name="login" class="form-control" placeholder="Login" value="" />
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" class="form-control" name="senha" placeholder="Senha *" value="" />
                                </div>
                                <div class="float-right">
                                    <input type="submit" class="btn btn-danger" value="Entrar" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="newuser" role="tabpanel" aria-labelledby="newuser-tab">
                    <h3 class="register-heading">Cadastrar Voluntário</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nome Completo*" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Rua*" value="" />
                            </div>
                            <div class="form-group">
                                <label for="bairros">Bairro:</label>
                                <select name="bairros" id="bairros" form="bairrosform">
                                    <option value="volvo">Mirante</option>
                                    <option value="saab">Jd Pinheiro</option>
                                    <option value="opel">Jd Rincão</option>
                                    <option value="audi">Arujazinho</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirmar senha*" value="" />
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="CPF *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nº *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Senha*" value="" />
                            </div>

                            <div class="float-right">
                                <input type="submit" class="btn btn-danger" value="Salvar" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- footer section -->
<section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2022 By
      <a href="https://univesp.br/">Projeto Integrador</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
</body>

</html>