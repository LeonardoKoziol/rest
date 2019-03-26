<?php require_once('Connections/conexao_rest.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_conexao_rest, $conexao_rest);
$query_usuarios = "SELECT * FROM usuario ORDER BY id_usuario DESC";
$usuarios = mysql_query($query_usuarios, $conexao_rest) or die(mysql_error());
$row_usuarios = mysql_fetch_assoc($usuarios);
$totalRows_usuarios = mysql_num_rows($usuarios);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>usuario</title>
	<link rel="stylesheet" href="css/adm.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<header class="header">
		<div class="container">
			<a href="index.php" class="col-md-4 col-sm-4 col-xs-4"><img src="img/rest.png" alt="Logo marca Rest"></a>
			<nav class="col-md-8 col-sm-8 col-xs-8 header_menu">
					<ul>
						<li><a href="login.php">Login</a></li>
						<li><a href="cadastro.php">Cadastro</a></li>
						<li><a href="alterar.php">Dados</a></li>
						<li><a href="adm.php">Sair</a></li>
					</ul>
			</nav>
		</div>
	</header> 
<h1>Usuarios</h1>
    
    
      <table class=" tabela  table table-striped">
        
        <caption class="usuarios">Usuarios Cadastrados</caption> <!-- titulo da tabela -->
        <thead> <!-- cabeçalho da tabela -->
          <tr class="info">
            <th>ID</th>
            <th>Nome</th>
            <th>Senha</th>
            <th>Data</th>
            <th>Email</th>
            <th>Sexo</th>
            <th>Tipo</th>
           </tr>
           
        </thead>
        
        	<tbody>
         	<?php do { ?> 
         	 <tr>
            <td><?php echo $row_usuarios['id_usuario']; ?></td>
            <td><?php echo $row_usuarios['Nome']; ?></td>
            <td><?php echo $row_usuarios['senha']; ?></td>
            <td><?php echo $row_usuarios['data']; ?></td>
            <td><?php echo $row_usuarios['email']; ?></td>
            <td><?php echo $row_usuarios['sexo']; ?></td>
            <td><?php echo $row_usuarios['tipo']; ?></td>
            <?php } while ($row_usuarios = mysql_fetch_assoc($usuarios)); ?>
            
          </tr>
          
        </tbody>
        </table>
      

<button id="btnalterar" name="btnalterar" class="btn btn-warning"><a href="alterar.php">Alterar</button>

</body>
</html>
<?php
mysql_free_result($usuarios);
?>
