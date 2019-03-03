<?php include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");?>
<?php



$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];


if(insereProduto($conexao, $nome, $preco, $descricao)) { ?>
	<p class="text-success">O produto <?php echo $nome;?>, 
		<?php echo 'R$ '.number_format($preco,2, ',', '.');?> foi adicionado.</p>
<?php } else { 
		$msg_erro = mysqli_error($conexao);
	?>
	<p class="text-danger">O produto <?php echo $nome;?> não foi adicionado: <?php echo $msg_erro ?></p>
<?php
}
?>

<?php include("rodape.php"); ?>