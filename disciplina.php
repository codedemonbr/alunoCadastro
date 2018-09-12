<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Disciplina Recebido</title>
</head>
<body>
	<?php
	$nome = $_POST['nome'];
	$sigla = $_POST['sigla'];
	$carga  = $_POST['carga'];


	echo "<h2>Received data:</h2> <br>";
	echo "<br>------------------------------------------------------------------------------<br>";
	echo "Nome Disciplina: " . $nome;
	echo "<br>";

	echo "Sigla Disciplina: " . $sigla;
	echo "<br>";

	echo "Carga Disciplina: " . $carga;
	echo "<br>";

	echo "<br>------------------------------------------------------------------------------<br>";

	//Parametros para conexao banco de dados
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
	

	$sql = "insert into disciplinas (nomeDisciplina, sigla, cargaHoraria) values ('" . $nome . "', '" . $sigla . "', '" . $carga . "');";
	$result = $conn->query($sql);

	$sql = "SELECT * FROM disciplinas";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<br> ID: ". $row["id"]. " - Nome da Disciplina: ". $row["nomeDisciplina"]. " - Sigla: " . $row["sigla"] . " - Carga: " . $row["cargaHoraria"] . "<br>";
		}
	} else {
		echo "0 results";
	}
	
	$conn->close();

	?>
</body>
</html>