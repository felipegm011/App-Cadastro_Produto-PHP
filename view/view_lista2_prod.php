<?php

echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'><link rel='stylesheet' type='text/css' href='painel.css'>";
echo "<table class='table table-striped'";
			echo "<tr>";
            echo "<th scope='col'>".'Descrição'."</th>";
            echo "<th scope='col'>".'Valor'."</th>";
            echo "<th scope='col'>".'Quantidade'."</th>";
			echo "</tr>";

            $conn = new PDO('mysql:host=localhost;port=3306; dbname=atividade', 'root', '');
            $result1 = $conn->query("SELECT * FROM PRODUTO ORDER BY preco DESC");
		
		//$result = mysqli_query($conexao,$consulta);

        while($registro = $result1->fetch()){
            $prod = $registro['DESCRICAO'];
            $vlr = $registro['PRECO'];
            $qtd = $registro['QUANTIDADE'];
            echo "<tr>";
            echo "<td>".$prod."</td>";
            echo "<td>".$vlr."</td>";
            echo "<td>".$qtd."</td>";
            echo "</tr>";
        }
		echo "</table>"
		
?>