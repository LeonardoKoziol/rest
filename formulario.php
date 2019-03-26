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

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtcidade">Cidade</label>  
  <div class="col-md-5">
  <input id="txtcidade" name="txtcidade" maxlength="20" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Digite sua Cidade</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtestado">Estado</label>  
  <div class="col-md-2">
  <input id="txtestado" name="txtestado" maxlength="2" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Digite seu Estado</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtcep">Cep</label>  
  <div class="col-md-4">
  <input id="txtcep" name="txtcep" type="text" maxlength="10" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Digite seu CEP de acordo com o exemplo : 99999-999</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtcpf">Cpf</label>  
  <div class="col-md-4">
  <input id="txtcpf" name="txtcpf" type="text" placeholder=""
   class="form-control input-md" required=""
   pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite o CPF com todos os digitos">
  <span class="help-block">Digite seu CPF de acordo com o exemplo : 999.999.999-99</span>  
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
  <label class="col-md-4 control-label" for="txtidade">Idade</label>  
  <div class="col-md-2">
  <input id="txtidade" name="txtidade" type="number" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Digite sua idade</span>  
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

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txttel">Celular/Whatsapp</label>  
  <div class="col-md-5">
  <input id="txttel" name="txttel" type="tel" maxlength="20" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Digite seu numero de acordo com o exemplo : (19) 99999-9999</span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnenviar"></label>
  <div class="col-md-4">
    <button id="btnenviar" name="btnenviar" class="btn btn-primary">Enviar</button>
  </div>
</div>

<!-- Form Name -->
<legend>Informações</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txt_data">Data </label>  
  <div class="col-md-5">
  <input id="txt_data" name="txt_data" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Digite a data do evento</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txt_horario">Horario</label>  
  <div class="col-md-5">
  <input id="txt_horario" name="txt_horario" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Digite o horario do evento</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txt_numero">Nº de convidados</label>  
  <div class="col-md-5">
  <input id="txt_numero" name="txt_numero" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Digite o Nº de convidados</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txt_lugar">Local/Salão</label>  
  <div class="col-md-5">
  <input id="txt_lugar" name="txt_lugar" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Informe o lugar do Salão</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="txt_produtos">Produtos</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="txt_produtos" name="txt_produtos"></textarea>
  </div>
</div>

</fieldset>
</form>


	
</body>
</html>