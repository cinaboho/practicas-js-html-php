<!DOCTYPE html>
<html>
<head>
    <title>Formulario con almacenamiento en local y envío a MySQL</title>
    <script src="script.js"></script>
</head>
<body>
    <h2>Formulario con almacenamiento en local y envío a MySQL</h2>

    <form id="myForm" method="post" onsubmit="guardarEnLocal()">
        <label for="dato">Dato:</label>
        <input type="text" name="datos" id="datos" required><br><br>
        <!-- <button  type="button" onclick="enviarDatosAlServidor()">Guardar</button> -->
        <input type="submit" name="register" >
    </form>
        <?php
        include("guardar_en_mysql.php");
        ?>
</body>
</html>
