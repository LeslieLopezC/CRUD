<?php
// Conexión a la base de datos
$servername = "3306";
$username = "root";
$password = "7775";
$dbname = "bdprueba";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexión Exitosa ";
//Ejecutar consulta
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows>0){
// mostrar datos
while ($row = $result-> fetch_assoc()){
    echo "Campo 1:". $row ["campo1"]."Campo 2".$row ["campo2"]."Campo 3".$row ["campo3"]. "<br>";
}
} else {
    echo "0 resultados";

}
// Cerrar la conexión
$conexion->close();
?>