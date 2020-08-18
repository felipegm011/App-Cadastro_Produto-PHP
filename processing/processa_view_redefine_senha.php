	<?php

		session_start();
		
		// dados do cadatro de usuários
		$nome = strtoupper($_POST['user']);
		$senha = strtoupper(base64_encode($_POST['nsenha']));

		$user_treated = str_replace(array('!','"','#','$','%','()','*','+','/',':',';','<','=','>','?','@','[','\'',']','^',
									'`','{','|','}',',','.','SELECT','FROM','DELETE','DROP','WHERE','ALTER','TABLE'),'', $nome);

		$password_treated = str_replace(array('!','"','#','$','%','&',' ','()','*','+','-','/',':',';','<','=','>','?','@','[','\'',']','^',
									'_','`','{','|','}','~',',','.','SELECT','FROM','DELETE','DROP','WHERE','ALTER','TABLE'),'', $senha);
		
		$conn = new PDO('mysql:host=localhost;port=3306; dbname=atividade', 'root', '');
		$result = $conn->query("SELECT COUNT(*) FROM USUARIO WHERE NOME='$user_treated'");

		$row = $result->fetch();
			if($row[0] > 0){
				$conn->exec("UPDATE usuario SET senha ='$password_treated' WHERE nome = '$user_treated'");
			}else{
				echo  "<script>alert('Usuario não Existe');</script>";	
			}
	
	?>
	
