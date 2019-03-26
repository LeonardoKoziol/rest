<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
	<style>
		input[type="text"] { background-color: #fff; color: #000 }
		input:invalid{background-color: grey; color: red}
	</style>

</head>
<body>


<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class="header">Login</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txt_login">Login</label>  
  <div class="col-md-2">
  <input id="txt_login" name="txt_login" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="header form-group">
  <label class="col-md-4 control-label" for="txt_senha">Senha</label>
  <div class="col-md-2">
    <input id="txt_senha" name="txt_senha" type="password" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btn_login"></label>
  <div class="col-md-8">
    <button id="btn_login" name="btn_login" class="btn btn-success">
    	<a href="adm.html">Inserir</a>
    </button>
    <button id="Fechar"  name="Fechar" class="btn btn-warning">
      <a href="adm.php">fechar</a>      
    </button>
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success">
    	<a href="cadastro.php">Cadastrar</a>

    </button>
  </div>
</div>


</fieldset>
</form>

</body>
</html>