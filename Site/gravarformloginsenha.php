<!DOCTYPE html>
<html>
<head>
	<title> Tela Grava Form Login e Senha </title>
</head>
	<body style="background-color: ;">
		<p style="color:blue";>
		
		<?php
			$servidor= 'localhost';
			$usuario = 'root';
			$senha = '';
			$bd = "bd41a";
			$conn = mysqli_connect($servidor,$usuario,$senha, $bd);

		if (!($conn)) {
		      die("Connection failed: " . mysqli_connect_error());
		}
		 
		echo "Connected successfully";

		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$rg = $_POST['rg'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$sql = "INSERT INTO usuario (nome, cpf, rg, email, senha) VALUES ('$nome', '$cpf', '$rg', '$email', '$senha')";

		if (mysqli_query($conn, $sql)) {
		      echo "New record created successfully";
		} else {
		      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);

					header("Location: loginsenha.PHP"); 

					exit;
			?>
	</body>
</html>