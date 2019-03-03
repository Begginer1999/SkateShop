<?php include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
?>

<?php 

if (array_key_exists("removido", $_GET) && $_GET["removido"] == "true") {
?>
	<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-lable="fechar">
			<span aria-hidden="true">&times;</span>
		</button>
		
		<strong>Produto removido com sucesso.</strong>
	</div>
	<!--<p class="alert-success">Produto removido com sucesso.</p>-->
<?php
	}
?>

	
		<h1>Produtos</h1>		
	

<table class="table table-striped table-bordered table-hover table-condensed">
	
	<?php 
		$produtos = listaProdutos($conexao);
		foreach ($produtos as $produto) : 
	?>
	
	<tr>
		<td><?php echo $produto['NOME']?></td>
		<td><?php echo 'R$ '.number_format($produto['PRECO'],2, ',', '.')?></td>
		<td><?php echo substr($produto['DESCRICAO'], 0, 40)?></td>
		<td>
			<form action="remove-produto.php" method="post">
				<input type="hidden" name="id" value="<?=$produto['ID']?>">
				<button class="btn btn-danger">Remover</button>
			</form>
		</td>
	</tr>

	<?php
		endforeach
	?>

</table>

<?php include("rodape.php");?>