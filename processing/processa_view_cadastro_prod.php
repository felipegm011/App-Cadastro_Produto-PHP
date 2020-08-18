	<?php		
		
		$produto = strtoupper($_POST['Produto']);
		$valor = (int)$_POST['Valor'];
		$quantidade = (int)$_POST['Quantidade'];

		// tratativa básica para remover caracteres especiais
		$product_treated = str_replace(array('!','"','#','$','%','()','*','+','/',':',';','<','=','>','?','@','[','\'',']','^',
									'`','{','|','}',',','.','SELECT','FROM','DELETE','DROP','WHERE','ALTER','TABLE'),'', $produto);

		$value_treated = str_replace(array('!','"','#','$','%','&',' ','()','*','+','-','/',':',';','<','=','>','?','@','[','\'',']','^',
									'_','`','{','|','}','~',',','.','SELECT','FROM','DELETE','DROP','WHERE','ALTER','TABLE'),'', $valor);

		$amount_treated = str_replace(array('!','"','#','$','%','&',' ','()','*','+','-','/',':',';','<','=','>','?','@','[','\'',']','^',
									'_','`','{','|','}','~',',','.','SELECT','FROM','DELETE','DROP','WHERE','ALTER','TABLE'),'', $quantidade);
		
		$conn = new PDO('mysql:host=localhost;port=3306; dbname=atividade', 'root', '');
		$conn->exec("INSERT INTO produto (descricao,preco,quantidade) VALUES ('$product_treated','$value_treated','$amount_treated');");
    
		header("Location: http://localhost/Projeto-Estruturado-PHP/view/view_cadastro_prod.php");
			
	?>
	
