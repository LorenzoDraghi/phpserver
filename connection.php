<?php
$servername = "localhost";
$username = "amministratore";
$password = "root785!";
$dbname = "voti";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysql_error());
}
$sql="use voti";
$conn->query($sql);
$sql="SELECT * FROM studenti";
$result=$conn->query($sql);

if($result->num_rows>0){
	//output data of each row
	while($row=$result->fetch_assoc()){
		echo "id: " . $row["id_studente"]. " - Nome: " . $row["nome"]. "- Cognome: " . $row["cognome"]. "- Voto: " . $row["voto"]. "<br>";
	}
}
else{
echo "0 results";
}
$conn->close();
?>
