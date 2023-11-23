<?php session_start(); ?>
<html>
<head>
	<title>Página inicial</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="header">
		Seja bem vindo!
	</div>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>
				
		Bem vindo <?php echo $_SESSION['name'] ?> ! <a href='logout.php'>Deslogar</a><br/>
		<br/>
		<a href='view.php'>Ver e adicionar produtos</a>
		<br/><br/>
	<?php	
	} else {
		echo "Se precisa estar logado para acessar está página.<br/><br/>";
		echo "<a href='login.php'>Logar</a> | <a href='register.php'>Registrar</a>";
	}
	?>
	<div id="footer">
		Criado por <a href="http://blog.chapagain.com.np" title="Mukesh Chapagain">Mukesh Chapagain</a>
	</div>
</body>
</html>
