<!DOCTYPE html>
<html>
	<head>
		<title> TELA LOGIN SENHA </title>
	</head>
<style>
	center{
		margin-top: 100px;
	}
	fieldset{
		width:350px;
	}
</style>
<body style="background-color:#DCDCDC;">
	<center>
		<fieldset>
			<br>
			<h2>
				Tela de Login Senha
            </h2>
			<br><br>
			<Form action="sistema.php" method="POST">
				 Email:
				 <input type="text" size="30" placeholder="Digite seu email">
				 <br><br>
				 Senha:
				 <input type="text" size="30" placeholder="Digite sua senha">
				 <br><br>
				 <input type="submit" Value="Acessar" placeholder="">
				 <br>
				 <br> Não possui cadastro? 
                 <br>
				 <a href="cadloginsenha.PHP" style="color:blue;">	
				 	Ir ao Cadastro		 
				</a>	
				 <br><br>
			</Form>	 
		</fieldset>
	</center>

	
</body>
</html>