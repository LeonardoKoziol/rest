<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
    input[type="text"] { background-color: #fff; color: #000 }
    input:invalid{background-color: grey; color: red}

  </style>
</head>
<body>
  <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Formulário</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtnome">Nome</label>  
  <div class="col-md-5">
  <input id="txtnome" name="txtnome" maxlength="50" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Digite seu nome</span>  
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="txtsenha">Senha</label>  
  <div class="col-md-5">
  <input id="txtnome" name="txtsenha" maxlength="50" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Digite sua senha</span>  
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtdata">Data de Nascimento</label>  
  <div class="col-md-5">
  <input id="txtdata" name="txtdata"  type="date" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Digite a data de Nascimento de acordo com o exemplo : 22/02/2222</span>  
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtemail">E-mail</label>  
  <div class="col-md-5">
  <input id="txtemail" name="txtemail" type="email" maxlength="30" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Digite seu email</span>  
  </div>
</div>


<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radsexo">Sexo</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radsexo-0">
      <input type="radio" name="radsexo" id="radsexo-0" value="M" >
      Masculino
    </label>
  </div>
  <div class="radio">
    <label for="radsexo-1">
      <input type="radio" name="radsexo" id="radsexo-1" value="F">
      Feminino
    </label>
  </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="radtipo">Tipo</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radtipo-0">
      <input type="radio" name="radtip" id="radtipo-0" value="ADM" >
      Administrador
    </label>
  </div>
  <div class="radio">
    <label for="radtipo-1">
      <input type="radio" name="radtipo" id="radtipo-1" value="COM">
      Comum
    </label>
  </div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnenviar"></label>
  <div class="col-md-4">
    <button id="btnenviar" name="btnenviar" class="btn btn-primary">Enviar</button>
    <button id="btnexcluir" name="btexcluir" class="btn btn-warning">Excluir</button>
    <button id="btnsair" name="btsair" class="btn btn-success"><a href="adm2.php">Sair</a></button>
    
  </div>
</div>


</fieldset>
</form>


  
</body>
</html>
  
</body>
</html>