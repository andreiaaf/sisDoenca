<?php

require_once("../php/conexaoBD.php");

$sql = "SELECT * FROM sisdoencas_aruja.sintomas;";
$resultado = mysqli_query($conexao, $sql);



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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

    <style>
#map { 
  height:500px;
  width: 70%;
}

html,
body {
  height: 100%;
  margin: 10;
  padding: 10;
}
    </style>
<body>
    <div class="hero_area">
        <!-- header section strats -->
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
                                            <a class="nav-link" href="contact.html">
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
                                <a href="index.html">Usuário</a>
                                <a href="product.html">Voluntário</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <div class="col-md-8">
            <section class=" slider_section position-relative">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="slider_item-box">
                                <div class="slider_item-container">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="offset-md-2 col-md-4">
                                                <div class="slider_item-detail">
                                                    <div>
                                                        <h2 class="slider_heading">
                                                            Quer ajudar? <br />

                                                        </h2>
                                                        <p>
                                                            Aqui você pode ajudar quem precisa de ajuda em situações de calamidade e doenças.
                                                        </p>
                                                        <div class="d-flex">
                                                            <a href="" class="slider_btn">
                              Click aqui!
                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="hero_img-box">
                                                    <img src="../img/ajuda1.png" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="slider_item-box">
                                <div class="slider_item-container">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="offset-md-2 col-md-4">
                                                <div class="slider_item-detail">
                                                    <div>
                                                        <h2 class="slider_heading">
                                                            Precisa de ajuda? <br />

                                                        </h2>
                                                        <p>
                                                            Busque por volutários proximos de você.
                                                            <div class="d-flex">
                                                                <a href="" class="slider_btn">
                              Click aqui!
                            </a>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="hero_img-box">
                                                    <img src="../img/voluntario1.png" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="slider_item-box">
                                <div class="slider_item-container">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="offset-md-2 col-md-4">
                                                <div class="slider_item-detail">
                                                    <div>
                                                        <h2 class="slider_heading">
                                                            Informe aqui <br /> sobre:
                                                        </h2>
                                                        <p>
                                                            Sintomas de doenças ou diagnósticos médicos recebidos.
                                                        </p>
                                                        <div class="d-flex">
                                                            <a href="" class="slider_btn">
                              Click aqui!
                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="hero_img-box">
                                                    <img src="../img/virus.png" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </section>
        </div>
        <!-- end slider section -->
    </div>

    <!-- detail section -->
    <section class="detail_section">
        <div class="container">
            <div class="row">
            <div class="form-group">
                    <label for="recipient-name"  class="col-form-label">Escolha o Sintoma</label>
                    <select id="tipoSintoma">
                    <?php while ($row = mysqli_fetch_assoc($resultado)) {

echo  '<option value="' . $row['id_sintoma'] . '">' . $row['sintoma'] . '</option>';
} ?>
                    </select>
                  </div>
            </div>
            <div class="form-group">
                    <label for="recipient-name"  class="col-form-label">Escolha o ano</label>
                    <select id="ano">
                    
                       <option value="2022">2022</option>';
                       <option value="2021">2021</option>';
                       <option value="2020">2020</option>';
                    </select>
                  </div>
            </div>
            
            <div id="map"></div>
         
        

        </div>
 

    </section>
    <section class="container-fluid footer_section">
        <p>
            Copyright &copy; 2022 By
            <a href="https://univesp.br/">Projeto Integrador</a>
        </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>

    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>

<script src="../js/busca/mapaSintomas.js"></script>
<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaLnc4fhBdXS0d1Mud2fylahwHFf9k_XI&v=weekly"
       defer
    ></script>
    <script type="text/javascript" src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

</body>

</html>

