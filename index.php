<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Recebido</title>
</head>
<body>
	<?php
	$nome = $_POST['nome'];
	$prontuario = $_POST['prontuario'];
	$end  = $_POST['endereco'];
	$bairro  = $_POST['bairro'];
	$cidade  = $_POST['cidade'];
	$estado = $_POST['estado'];
	$cep  = $_POST['cep'];
	$telefone  = $_POST['fone'];
	$email = $_POST['email'];

	echo "<h2>Received data:</h2> <br>";
	echo "<br>------------------------------------------------------------------------------<br>";
	echo "Nome: " . $nome;
	echo "<br>";
	echo "Prontuário: " . $prontuario;
	echo "<br>";
	echo "Endereço: " . $end;
	echo "<br>";
	echo "Bairro: " . $bairro;
	echo "<br>";
	echo "Cidade: " . $cidade;
	echo "<br>";
	echo "Estado: " . $estado;
	echo "<br>";
	echo "Cep: " . $cep;
	echo "<br>";
	echo "Telefone: " . $telefone;
	echo "<br>";
	echo "E-mail: " . $email;
	echo "<br>------------------------------------------------------------------------------<br>";

	$servername = "localhost";
	$username = "root";
	$password = "ILoveJava#1";
	$dbname = "escola";

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "use escola";
	$result = $conn->query($sql);

	$sql = "insert into aluno (nome, prontuario, telefone, email, endereco, bairro, cidade, estado, cep) values ('" . $nome . "', '" . $prontuario . "', '" . $fone . "', '" . $email  . "', '" . $end  . "', '" . $bairro  . "', '" . $cidade  . "', '" . $estado  . "', '" . $cep . "');";
	$result = $conn->query($sql);

	$sql = "SELECT * FROM aluno";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<br> ID: ". $row["id"]. " - Nome: ". $row["nome"]. " - Prontuário: " . $row["prontuario"] . " - Endereço: " . $row["endereco"] . " - Bairro: " . $row["bairro"]. " - Cidade: " . $row["cidade"]. " - Estado: " . $row["estado"]." - Cep: " . $row["cep"]. " - Telefone: " . $row["telefone"] . " - E-mail: " . $row["email"] . "<br>";
		}
	} else {
		echo "0 results";
	}
	
	$conn->close();
	?>
</body>
</html>