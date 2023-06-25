<?php
 $texto=" ";
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
    // Obtener el dato enviado por el formulario
    $datos = $_POST['datos'];

    // Realizar la conexión a la base de datos MySQL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bd";

    $conex = mysqli_connect("localhost","root","","bd");

    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }

    // Insertar el dato en la base de datos
    $sql = "INSERT INTO datos (datos) VALUES ('$datos')";
    

    if ($conn->query($sql) === TRUE) {
        echo "El dato se ha guardado en la base de datos MySQL correctamente.";
    } else {
        echo "Error al guardar el dato en la base de datos: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}


?>