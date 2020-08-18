
<!DOCTYPE html>

<html lang="pt-br">
<head>	
							<!--informação sobre a pagina titulo, informação sobre codificação-->
		<link rel="stylesheet" type="text/css" href="../resource/Style_cadastro.css">
		<meta charset="UTF-8">	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">		
		<title>Cadastro de Usuário</title>
		<script type="text/javascript" src="../resource/validacampos.js"> </script>
</head>
	<body id="container">
		
		<form action="../processing/processa_view_cadastro_usuario.php" method="POST" name="form" autocomplete="off">
		
		<p></p>
		
		<!--<h1>Faça seu Cadastro</h1>-->
	
		<div id="painel">
			<h1>Cadastre-se</h1>
			<p>Insira seus dados abaixo para obter acesso ao sistema.</p>
		  <div class="form-group">
			<!--<label for="exampleInputEmail1">Nome do Usuário</label>-->
			<input type="text" id="usua" aria-describedby="emailHelp" placeholder="Seu Nome" name="usuario" class="form-control" required autocomplete="off">
		  </div>
		  
		  <div class="form-group">
			<!--<label for="exampleInputEmail1">Senha</label>-->
			<input type="password"  id="senha1" aria-describedby="emailHelp" placeholder="Sua Senha" name="senha" class="form-control" requiredautocomplete="off">
		  </div>

		  <div class="form-group">
			<!--<label for="exampleInputEmail1">Redigite a Senha</label>-->
			<input type="password"  id="senha2" aria-describedby="emailHelp" placeholder="Confirme sua Senha" name="consenha" class="form-control" onblur="valida()" required autocomplete="off"/>
		  </div>

		  <div class="form-group">
			<!--<label for="exampleInputEmail1">Redigite a Senha</label>-->
			<input type="text"id="email" aria-describedby="emailHelp" placeholder="Digite seu E-mail" name="email" class="form-control" required autocomplete="off" />
		  </div>
		  
		 <button type="submit" class="btn btn-info" value="Enviar">Cadastrar</button>
		</div>

		</form>	
		
	</body>
</html>
