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

	$sql = "insert into aluno (nome, prontuario, telefone, email) values ('" . $nome . "', '" . $prontuario . "', '" . $fone . "', '" . $email . "');";
	$result = $conn->query($sql);

	$sql = "SELECT * FROM aluno";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<br> ID: ". $row["id"]. " - Nome: ". $row["nome"]. " - Prontuário: " . $row["prontuario"] . " - Telefone: " . $row["telefone"] . " - E-mail: " . $row["email"] . "<br>";
		}
	} else {
		echo "0 results";
	}
	/*create table if not exists aluno
(
	id int not null auto_increment primary key,
    nome varchar(50) not null,
    prontuario char(7) not null unique, 
    telefone char(13) not null,
    email varchar(30) not null
);
	*/
	$conn->close();
	?>
</body>
</html>