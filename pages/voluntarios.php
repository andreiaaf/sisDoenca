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
    <nav class="navbar navbar-expand-md navbar-dark">
		<div class="container">
            <img src="../img/logo.jpg" style="width: 70px;">
			<a href="#" class="navbar-brand">Sis Doenças Arujá</a>
			
			<button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
			</button>
			
			<div id="main-nav" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li><a href="#" class="nav-item nav-link active">Home</a></li>
					<li><a href="#" class="nav-item nav-link">About</a></li>
					<li class="dropdown">
						<a href="#" class="nav-item nav-link" data-toggle="dropdown">Services</a>
						<div class="dropdown-menu">
							<a href="#" class="dropdown-item">Dropdown Item 1</a>
							<a href="#" class="dropdown-item">Dropdown Item 2</a>
							<a href="#" class="dropdown-item">Dropdown Item 3</a>
						</div>
					</li>
					<li class="dropdown">
						<a href="#" class="nav-item nav-link" data-toggle="dropdown">Portfolio</a>
						<div class="dropdown-menu">
							<a href="#" class="dropdown-item">Dropdown Item 1</a>
							<a href="#" class="dropdown-item">Dropdown Item 2</a>
							<a href="#" class="dropdown-item">Dropdown Item 3</a>
							<a href="#" class="dropdown-item">Dropdown Item 4</a>
							<a href="#" class="dropdown-item">Dropdown Item 5</a>
						</div>
					</li>
					<li><a href="#" class="nav-item nav-link">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="banner">
	
        <div class="container">
			<h1>Ajudas em Aberto</h1>
			<p>Acesse a relação de ajudas disponíveis para voluntariado.</p>
			<a href="#tablesintomas" class="button button-danger" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">Saiba Mais</a>
		</div>
        <div class="container">
			<h1>Status Ajudas</h1>
			<p>Acesse a relação de ajudas já realizadas e status das ajudas em andamento.</p>
			<a href="#tableajuda" class="button button-danger" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">Saiba Mais</a>
		</div>
	</div>
</header>

<main>
    
    <section  class="content">
    <div class="container" id="myGroup">
			<h2>	
			
			<div class="collapse" id="collapseExample" data-parent="#myGroup">
				<div class="card card-body" id="tabledoencas">
				<p>Doenças Já Cadastradas</p>
				<table class="table table-hover" id="tabledoencas">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Doença</th>
        <th>Início</th>
		<th>término</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>xxxxxxxx</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>xxxxxxxx</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>xxxxxxxx</td>
      </tr>
    </tbody>
  </table>
</div>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Cadastrar Nova Doença</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastre a doença diagnosticada</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Escolha a Doença</label>
            <select name="select">
  <option value="valor1">Dengue</option>
  <option value="valor2" selected>Gripe</option>
  <option value="valor3">Covid-19</option>
</select>
          </div>
		  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Data Início:</label>
            <input type="date" class="form-control" id="recipient-name">
          </div>
		  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Data Fim:</label>
            <input type="date" class="form-control" id="recipient-name">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-success">Salvar</button>
      </div>
    </div>
  </div>
</div>
</div>
			
			
			<div class="collapse" id="collapseExample2" data-parent="#myGroup">
				<div class="card card-body">
				<p>Sintomas Já Cadastrados</p>
				<table class="table table-hover">
    <thead>
      <tr>
	  <th>Nome</th>
        <th>Sintoma</th>
        <th>Início</th>
		<th>término</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">Cadastrar Novo Sintoma</button>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Cadastre o sintoma apresentado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Escolha a Sintoma</label>
            <select name="select">
  <option value="valor1">Dor de cabeça</option>
  <option value="valor2" selected>Febre</option>
  <option value="valor3">Tosse</option>
</select>
          </div>
		  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Data Início:</label>
            <input type="date" class="form-control" id="recipient-name">
          </div>
		  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Data Fim:</label>
            <input type="date" class="form-control" id="recipient-name">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-success">Salvar</button>
      </div>
    </div>
  </div>
</div>
</div>
			
			
			<div class="collapse" id="collapseExample3" data-parent="#myGroup">
				<div class="card card-body">
				<p>Ajudas Já Cadastradas</p>
				<table class="table table-hover">
    <thead>
      <tr>
	  <th>Nome</th>
        <th>Tipo Ajuda</th>
        <th>Status Ajuda</th>
		
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">Cadastrar Nova Doença</button>

<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel3">Cadastre o tipo de ajuda necessária</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Escolha o tipo de ajuda</label>
            <select name="select">
  <option value="valor1">Mantimentos</option>
  <option value="valor2" selected>Medicamentos</option>
  <option value="valor3">Acompanhamento médico</option>
</select>
          </div>
		  <div class="form-group">
		  <label for="message-text" class="col-form-label">Observação:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
		 
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-success">Salvar</button>
      </div>
    </div>
  </div>
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