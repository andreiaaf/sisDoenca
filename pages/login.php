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
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
    
</body>
</html>



 <!-- login start -->
        

<div class="container register">
<div class="row">
<div class="col-md-3 register-left">
<img src="../img/seringa.png" alt="" />
<h3>Bem Vindo</h3>
<p>Acesse para registrar doenças e sintomas!</p>
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
    <form class="form-inline">
    <div class="form-group">
        <i class="fa fa-envelope-o"></i>
        <input type="text" class="form-control" placeholder="CPF" value="" />
    </div>
    <div class="form-group">
             <i class="fa fa-lock"></i>
        <input type="password" class="form-control" placeholder="Senha *" value="" />
    </div>
    <div class="float-right">
      <input type="submit" class="btn btn-primary" value="Entrar" />
      </div>
      </form>
</div>
</div>
</div>
<div class="tab-pane fade show" id="newuser" role="tabpanel" aria-labelledby="newuser-tab">
<h3 class="register-heading">Cadastrar</h3>
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
    <input type="submit" class="btn btn-primary" value="Salvar" />
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>