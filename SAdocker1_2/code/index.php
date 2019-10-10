<?php
//phpinfo();

$servername = "192.168.0.11";
$username = "byrich";
$password = "1234";
$dbname = "lab_sa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "usuario: " . $row["nombre"]. " - correo: " . $row["correo"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>