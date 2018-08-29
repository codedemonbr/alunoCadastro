<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Recebido</title>
</head>
<body>
	<?php
		$nome = $_POST['nome'];
		$prontuario = $_POST['prontuario'];
		$fone  = $_POST['fone'];
		$email = $_POST['email'];

		echo "<h2>Received data:</h2> <br>";
		echo "Nome: " . $nome;
		echo "<br>";
		echo "Prontuário: " . $prontuario;
		echo "<br>";
		echo "Telefone: " . $fone;
		echo "<br>";
		echo "E-mail: " . $email;
		echo "<br>";
	?>
</body>
</html>