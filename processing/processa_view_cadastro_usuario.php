	<?php

		session_start();
		
		// dados do cadatro de usuários
		$nome = strtoupper($_POST['usuario']);
		$senha = base64_encode($_POST['senha']);
		$email = strtoupper($_POST['email']);


		// tratativa básica para remover caracteres especiais
		$user_treated = str_replace(array('!','"','#','$','%','()','*','+','/',':',';','<','=','>','?','@','[','\'',']','^',
									'`','{','|','}',',','.','SELECT','FROM','DELETE','DROP','WHERE','ALTER','TABLE'),'', $nome);

		$password_treated = str_replace(array('!','"','#','$','%','&',' ','()','*','+','-','/',':',';','<','=','>','?','@','[','\'',']','^',
									'_','`','{','|','}','~',',','.','SELECT','FROM','DELETE','DROP','WHERE','ALTER','TABLE'),'', $senha);

		$email_treated = str_replace(array('!','"','#','$','%',' ','()','*','+','-','/',':',';','<','=','>','?','[','\'',']','^'
									,'`','{','|','}','~',',','SELECT','FROM','DELETE','DROP','WHERE','ALTER','TABLE'),'', $email);

		$conn = new PDO('mysql:host=localhost;port=3306; dbname=atividade', 'root', '');
		$result = $conn->query("SELECT * FROM usuario WHERE nome= '$user_treated'");
		$result1 = $conn->query("SELECT * FROM usuario WHERE email= '$email_treated'");

		$linha = $result->rowCount();
		$linha2 = $result1->rowCount();

			if($linha == 0 && $linha2 == 0 ){
				$conn->exec("INSERT INTO usuario (nome,senha,email) VALUES ('$user_treated','$password_treated','$email_treated');");
			}else{
				echo  "<script>alert('Usuario ou Senha Existe Tente Novamente');</script>";	
			}
			
			header("Location: http://localhost/Projeto-Estruturado-PHP/view/view_cadastro_usuario.php");
			
			// fontes de estudo
	

			//https://www.devmedia.com.br/contador-de-visitas-em-php-e-txt/11419

	?>
	
