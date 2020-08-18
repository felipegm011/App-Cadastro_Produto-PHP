<?php
    // conexão com css através do php
    echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'><link rel='stylesheet' type='text/css' href='resource/painel.css'>";    
    // criação da tabela de exibição dos produtos

    echo "<table class='table table-striped'";
    // cabeçalho
    echo "<tr>";
    echo "<th scope='col'>".'Id'."</th>";
    echo "<th scope='col'>".'Nome'."</th>";
    echo "<th scope='col'>".'Senha Criptografada'."</th>";
    echo "<th scope='col'>".'E-mail'."</th>";
    echo "</tr>";
    
    // conexão com banco de dados
    $conn = new PDO('mysql:host=localhost;port=3306; dbname=atividade', 'root', '');
    $result = $conn->query("SELECT * FROM USUARIO ORDER BY nome");

    // a função fetch() Retorna uma unica linha da consulta enquato houver registro ele vai atrbuindo  
    while($registro = $result->fetch()){
        $id = $registro['ID'];
        $user = $registro['NOME'];
        $password = $registro['SENHA'];
        $email = $registro['EMAIL'];
        // corpo da tabela
        echo "<tr>";
        echo "<td>".$id."</td>";
        echo "<td>".$user."</td>";
        echo "<td>".$password."</td>";
        echo "<td>".$email."</td>";
        echo "</tr>";
    }
        echo "</table>";
        
		
?>