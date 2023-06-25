function guardarEnLocal() {
    if (navigator.onLine) {
        // Enviar formulario directamente a MySQL
        enviarDatosAlServidor()
    } else {
        // Almacenar en Local Storage
        var datos = document.getElementById('datos');
        if(datos.value!=""){
            localStorage.datos=datos.value;
        }
    }
}

// Comprobar la conexión a Internet cuando la página se carga
window.addEventListener('load', function() {
    if (navigator.onLine) {
        enviarDatosAlServidor();
    }
});

// Comprobar la conexión a Internet cuando hay cambios en la conexión
window.addEventListener('online', enviarDatosAlServidor);

function enviarDatosAlServidor() {
    var datos = localStorage.getItem("datos")
    if (datos!="") {
        // Enviar dato a la página PHP para guardar en MySQL
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "guardar_en_mysql.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("datos=" + datos);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             alert("El dato se ha guardado en la base de datos MySQL.");
                localStorage.removeItem("datos");
            }
        };
    }
}
