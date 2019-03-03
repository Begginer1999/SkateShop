<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Minha loja</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!-- Aqui se inicia o cabeçalho de navegação -->
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" 
						data-toggle="collapse" data-target="#barra-navegacao"> <!-- Botão para navegar -->
					<span class="sr-only">Alternar menu</span> <!-- somente para leitores de tela -->
					<span class="icon-bar"></span> <!-- Icon-bar são as barrinhas quando o site fica menor -->
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">Skate House</a>
			</div>

			<!-- Classes para tornar a navegação responsível -->
			<div class="collapse navbar-collapse" id="barra-navegacao"> 

				<!-- Aqui começa as opções do cabeçalho de navegação -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="produto-formulario.php">Adiciona produto</a></li>
					<li><a href="produto-lista.php">Produtos</a></li>
					<li><a href="sobre.php">Empresa</a></li>	
					<li><a href="cadastrar.php">Cadastre-se</a></li>
					<li><a href="logar.php">Entrar</a></li>
				</ul>
				<!-- Aqui termina as opções do cabeçalho de navegação -->
			</div>
			<!-- Aqui termina a div de tonar a navegação responsível -->
		</div>
		<!-- Fim da div container -->
	</nav>
	<!-- Aqui termina o cabeçalho de navegação -->

	<div class="container">
		<div class="principal">