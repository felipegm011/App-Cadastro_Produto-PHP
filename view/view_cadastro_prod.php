<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro de Produto</title>

	<!-- IMPORTANDO O BOOTSTRAP  e CSS-->

	<link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../resource/Style_painel.css">
	
</head>

<body>


<h1> Olá Cadastre Seus Produtos </h1>

<div id="form-container">
<form action="../processing/processa_view_cadastro_prod.php" method="POST" autocomplete="off">
<div class="row">
<div class="col-sm-4">
	<div class="form-group">
		<label for="exampleInputEmail1">Descrição do Produto</label>
		<input type="text" class="form-control" name="Produto" aria-describedby="emailHelp" placeholder="Digite o Produto" autocomplete="off">
		<small id="emailHelp" class="form-text text-muted">Informe a Descrição do Produto.</small>
	</div>
	</div>
	<div class="col-sm-4">
	<div class="form-group">
		<label for="exampleInputPassword1">Preço</label>
		<input type="text" class="form-control" name="Valor" placeholder="Digite o Valor" autocomplete="off">
		<small id="emailHelp" class="form-text text-muted">Informe o Valor do Produto.</small>
	</div>
	</div>
	<div class="col-sm-4">
	<div class="form-group">
		<label for="exampleInputPassword1">Quantidade</label>
		<input type="text" class="form-control" name="Quantidade" placeholder="Digite a Quantidade" autocomplete="off">
		<small id="emailHelp" class="form-text text-muted">Informe a Quantidade do Produto.</small>
	</div>
	</div>
</form>	
		<div id="but">
		<button type="submit" class="btn btn-success">Cadastrar Produto</button>
		<!--<button type="button" class="btn btn-danger" onclick="redirect()">Listar Ordem Crescente</button>
		<button type="button" class="btn btn-primary" onclick="redirect1()">Listar Ordem Decrescente</button>-->
		<button type="button" class="btn btn-warning"><a href="http://localhost/Projeto-Estruturado-PHP/view/view_menu.php#"> <font color="white">Voltar ao Menu</button></a></font>
		</div>
</div>	

				
</body>


</html>
<?php

/*
function contador ()
{
	// CONTADOR DE RECARREMENTO DE PÁGINA

	$arquivo = "contador.txt";
	$f = fopen($arquivo,"r");
	$contador = 0;
	if($f)
	{
		$contador = fread($f,filesize($arquivo));
		$contador = $contador + 1;
		fclose($f);
	}

	$f = fopen($arquivo, "w+");
	if($f)
	{
		fwrite($f,$contador);
		fclose($f);
	}
	return $contador;
	}

	$visitante = contador();
	print "Voce é o Visitante número: ".$visitante;

*/
?>




