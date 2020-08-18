
	<?php
		// caso suba em produção todos os fontes com a função header() devem ser alterados	
		
		$login = strtoupper($_POST['usua']);
		$senha = strtoupper(base64_encode($_POST['senh']));
		
		// tratativa para escape de caracteres especiais item basico de segurança
		$user_treated = str_replace(array('!','"','#','$','%','&',' ','()','*','+','-','/',':',';','<','=','>','?','@','[','\'',']','^',
									'_','`','{','|','}','~',',','.','SELECT','FROM','DELETE','DROP','WHERE','ALTER','TABLE'),'', $login);

		$password_treated = str_replace(array('!','"','#','$','%','&',' ','()','*','+','-','/',':',';','<','=','>','?','@','[','\'',']','^',
									'_','`','{','|','}','~',',','.','SELECT','FROM','DELETE','DROP','WHERE','ALTER','TABLE'),'', $senha);

		$conn = new PDO('mysql:host=localhost;port=3306; dbname=atividade', 'root', '');
		$result = $conn->query("SELECT (nome) FROM usuario WHERE nome= '$user_treated'");
		$result1 = $conn->query("SELECT senha FROM usuario WHERE senha= '$password_treated' AND nome='$user_treated'");

		$row = $result->fetch(); /*Te retorna somente um elemento da consulta, creio que o primeiro... S
		e a consulta possuir mais de um elemento, os outros são ignorados*/
		$row1 = $result1->fetch();

		if($row[0] == $user_treated && strcmp($row1,$password_treated) == 0){
			header("Location: http://localhost/Projeto-Estruturado-PHP/view/view_menu.php");
		}else{
			echo "<script>alert('Usuario ou Senha Não Cadastrado');</script>";	
			header("Location: http://localhost/Projeto-Estruturado-PHP/");
		}
		unset($conn);

		/// fontes de estudo

		//https://pt.stackoverflow.com/questions/178911/retornar-uma-consulta-pdo-em-um-array
	?>