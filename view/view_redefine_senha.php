
<!DOCTYPE html>

<html lang="pt-br">
<head>	
							<!--informação sobre a pagina titulo, informação sobre codificação-->
		<link rel="stylesheet" type="text/css" href="../resource/Style_cadastro.css">
		<meta charset="UTF-8">	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">		
		<title>Principal</title>
		<script type="text/javascript" src="../resource/validacampos.js"> </script>
</head>
	<body id="redefine">
			
		<form action="../processing/processa_view_redefine_senha.php" method="POST" name="form" autocomplete="off">
		
		<p></p>
		
		<!--<h1>Faça seu Cadastro</h1>-->
	
		<div id="painel">
		<h1>Redefina seu Usuário e Senha</h1>
			<p>Insira novamente os dados abaixo para redefinir o usuario e ter acesso ao sistema.</p>
		 <div class="form-group">
			<!--<label for="exampleInputEmail1">Nome do Usuário</label>-->
			<input type="text" id="usua" aria-describedby="emailHelp" placeholder="Seu Usuário" name="user" class="form-control" required autocomplete="off">
		  </div>
		  
		  <div class="form-group">
			<!--<label for="exampleInputEmail1">Senha</label>-->
			<input type="password"  id="senha1" aria-describedby="emailHelp" placeholder="Sua Nova Senha" name="nsenha" class="form-control" required autocomplete="off">
		  </div>

		  <div class="form-group">
			<!--<label for="exampleInputEmail1">Redigite a Senha</label>-->
			<input type="password"  id="senha2" aria-describedby="emailHelp" placeholder="Confirme sua Nova Senha" name="consenha" class="form-control" onblur="valida()" required autocomplete="off"/>
		  </div>
		  
		 <button type="submit" class="btn btn-danger"  value="Enviar">Redefinir</button>
		</div>

		</form>	
	</body>

</html>