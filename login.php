<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
	<title>Bem vindo ao Projeto</title>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body>
	

	</script>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #FFDD37;">
			<a class="navbar-brand" href=""><strong>Projeto</strong></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>										
				</ul>
			</div>
		</nav>
	</header>
	
	<div class="container">
		<center>
			<div class="jumbotron" style="margin-top: 20px;">
				<h5>Bem vindo a página de Login!</h5>
				<form id="formLogin" style="margin-top: 20px;" method="post" action="login_pdo.php">
					<label for="#user" style="margin-top: 10px;">Nome de Usuário</label>
					<input id="user" class="form-control" type="text" name="cxlogin" placeholder="Usuário" style="margin-top: 10px;">
					<label for="#senha" style="margin-top: 10px;">Digite a Senha</label>
					<input id="senha" class="form-control" type="password" name="cxsenha" placeholder="Senha" style="margin-top: 10px;">
					<br>					
					<button class="btn btn-primary btn-block btn-dark" type="submit" style="margin-top: 10px;">Entrar</button>
					<br>
					<div align="right">
					<a href="#">Esqueceu a senha?</a>
					</div>
				</form>
			</div>
		</center>
	</div>
	<footer>
		<nav align="center" class="navbar fixed-bottom navbar-light" style="background-color: #FFDD37;">
			HomeSafe 2018, Todos os direitos reservados.
		</nav>
	</footer>
</body>
</html>
