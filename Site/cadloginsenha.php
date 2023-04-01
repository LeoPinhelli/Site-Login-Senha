<!DOCTYPE html>
    <head> 
        <tittle>  </tittle>
    </head>
    <style>
	center{
		margin-top: 100px;
	}
	fieldset{
		width:400px;
        height:330px;
	}
</style>
    <body style="background-color:#DCDCDC;">
        <center>
        <fieldset>
            <h3>
                Formulario Cadastro
            </h3>
        	<Form action="gravarformloginsenha.PHP" method="POST">
                 Nome:
				 <input type="text" size="20" placeholder="Digite seu Nome" name="nome" >
				 <br><br>
				 CPF:
				 <input type="text" size="20" placeholder="Digite sua CPF" name="cpf" >
				 <br><br>
				 RG:
				 <input type="text" size="20" placeholder="Digite seu RG" name="rg" >
				 <br><br>
				 Email:
				 <input type="text" size="20" placeholder="Digite seu Email" name="email" >
				 <br><br>
				 Senha
				 <input type="text" size="20" placeholder="Digite sua Senha" name="senha" >
				 <br><br>
				 <input type="submit" Value="Cadastrar" placeholder="">
				 <br><br>
                 <a href="loginsenha.php">				
					Ir para o Login			 
				</a>					 	
				 <br><br>	
        	</Form>
    	</fieldset>
        </center>
    </body>
</html>