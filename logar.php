<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
?>

	<div class="page-header">
		<h1>Logar-se</h1>
	</div>

	<form>
		<!-- Aqui se inicia o campo de email -->
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" id="email" class="form-control" placeholder="Digite seu email" 
			aria-describedby="infomail">
		</div>
		<!-- Aqui termina o campo de email -->

		<!-- Aqui se inicia o campo de senha -->
		<div class="form-group">
			<label for="senha">Senha</label>
			<input type="password" id="senha" class="form-control" placeholder="Digite sua senha">
		</div>

		<button class="btn btn-primary">Cadastrar</button>
</form>






<?php include("rodape.php");?>