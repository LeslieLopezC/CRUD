<?php
// Conexión a la base de datos
// Aquí deberías incluir tu código para conectar a la base de datos MySQL

// Verificar si se recibieron los datos del formulario
if (isset($_POST['accion']) && $_POST['accion'] == 'insertar') {
    // Obtener los datos del formulario
    $nom = $_POST['nom'];
    $ape = $_POST['ape'];
    $pais = $_POST['pais'];

    
     $sql = "INSERT INTO usuarios (nombre, apellido, pais) VALUES ('$nom', '$ape', '$pais')";
    mysqli_query($conexion, $sql);

    // Enviar una respuesta al cliente
    echo "Datos insertados correctamente";
}
?>