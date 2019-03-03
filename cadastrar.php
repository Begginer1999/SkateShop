<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
?>
	<div class="page-header">
		<h1>Cadastrar-se</h1>
	</div>

	<form>
		<!-- Aqui se inicia o campo de email -->
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" id="email" class="form-control" placeholder="Digite seu email" 
			aria-describedby="infomail">
			<small id="infomail" class="form-text text-muted">
				Nós nunca iremos compartilhar seu email com qualquer outra pessoa
			</small>
		</div>
		<!-- Aqui termina o campo de email -->

		<!-- Aqui se inicia o campo de senha -->
		<div class="form-group">
			<label for="senha">Senha</label>
			<input type="password" id="senha" class="form-control" placeholder="Digite sua senha">
		</div>

		<div class="row">
			<div class="col-sm-3 form-group">
				<label for="dtnasc">Data de nascimento</label>
				<input type="date" id="dtnasc" class="form-control">
			</div>
		</div>

		<button class="btn btn-primary">Cadastrar</button>
	</form>





<?php include("rodape.php");?>