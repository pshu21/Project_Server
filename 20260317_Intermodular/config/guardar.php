<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "pj_inter";

// Conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recoger datos
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Insertar (con prepared statement para seguridad)
$stmt = $conn->prepare("INSERT INTO contactos (nombre, email, telefono, mensaje) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nombre, $email, $telefono, $mensaje);

if ($stmt->execute()) {
    echo "<div class='alert alert-success'>Datos guardados correctamente</div>";
} else {
    echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
}

$stmt->close();
$conn->close();

?>



