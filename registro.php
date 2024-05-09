<?php
// Configuración de la conexión a la base de datos (debes modificar estos valores según tu configuración)
$servername = "academicazure.mysql.database.azure.com";
$username = "jhonni";
$password = "73812863Yoni";
$dbname = "users";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

// Crear la consulta SQL para insertar datos en la tabla de usuarios (debes adaptarla a tu estructura de base de datos)
$sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";

// Ejecutar la consulta y verificar si fue exitosa
if ($conn->query($sql) === TRUE) {
    echo "Usuario registrado correctamente";
} else {
    echo "Error al registrar el usuario: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>