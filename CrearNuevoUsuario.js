/// Función para cargar usuarios en la tabla
function cargarUsuarios() {
    fetch("CrearNuevoUsuario.php?accion=listar")
        .then(response => response.json())
        .then(data => {
            const tabla = document.getElementById("tabla-usuarios");
            if (!tabla) {
                console.error("No se encontró la tabla de usuarios.");
                return;
            }

            tabla.innerHTML = ""; // Limpiar la tabla antes de agregar nuevos registros

            // Encabezado de la tabla
            let header = `
                <tr>
                    <th>Cédula</th>
                    <th>Apellidos</th>
                    <th>Nombres</th>
                    <th>Usuario</th>
                    <th>Acciones</th>
                </tr>`;
            tabla.innerHTML += header;

            if (data.length === 0) {
                tabla.innerHTML += "<tr><td colspan='5'>No hay usuarios registrados.</td></tr>";
                return;
            }

            data.forEach(usuario => {
                let fila = `
                    <tr>
                        <td>${usuario.CedulaUsu}</td>
                        <td>${usuario.ApellidosUsu}</td>
                        <td>${usuario.NombresUsu}</td>
                        <td>${usuario.UsuarioUsu}</td>
                        <td>
                            <button class="btn-editar" onclick="editarUsuario(${usuario.idUsu})">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn-eliminar" onclick="eliminarUsuario(${usuario.idUsu})">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>`;
                tabla.innerHTML += fila;
            });
        })
        .catch(error => {
            console.error("Error al cargar usuarios:", error);
        });
}


// Función para eliminar usuario
function eliminarUsuario(idUsu) {
    if (confirm("¿Estás seguro de que deseas eliminar este usuario?")) {
        fetch(`EliminarUsuario.php?idUsu=${idUsu}`, {
            method: "GET",
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.success); // Mostrar mensaje de éxito
            } else if (data.error) {
                alert(data.error); // Mostrar mensaje de error
            } else {
                alert('Respuesta inesperada del servidor');
            }
            cargarUsuarios(); // Recargar la lista de usuarios
        })
        .catch(error => {
            console.error("Error al eliminar usuario:", error);
            alert("Hubo un error al eliminar el usuario.");
        });
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("formRegistro");

    if (form) {
        form.addEventListener("submit", function (event) {
            event.preventDefault(); // Evitar la recarga de la página

            let formData = new FormData(this);
            formData.append("accion", "crear");

            // Validación de los campos
            const cedula = document.getElementById("cedula").value.trim();
            const apellidos = document.getElementById("apellidos").value.trim();
            const nombres = document.getElementById("nombres").value.trim();
            const usuario = document.getElementById("usuario").value.trim();
            const clave = document.getElementById("clave").value.trim();

            // Comprobación básica de campos vacíos
            if (!cedula || !apellidos || !nombres || !usuario || !clave) {
                alert("Todos los campos son obligatorios.");
                return;
            }

            // Enviar los datos del formulario
            fetch("CrearNuevoUsuario.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.success);
                    form.reset();
                    cargarUsuarios(); // Recargar la lista de usuarios
                } else {
                    alert("Error: " + data.error);
                }
            })
            .catch(error => {
                console.error("Error en la solicitud:", error);
                alert("Hubo un error en la solicitud.");
            });
        });
    } else {
        console.error("Formulario no encontrado.");
    }

    // Cargar los usuarios registrados al inicio
    cargarUsuarios();

    // Redirigir al hacer clic en el botón de Cerrar Sesión
    document.getElementById("logout").addEventListener("click", function() {
        window.location.href = "Recursos.html"; // Redirige a Recursos.html
    });
});

// Función para redirigir a EditarUsuario.html con los datos del usuario
function editarUsuario(idUsu) {
    window.location.href = `EditarUsuario.html?idUsu=${idUsu}`;
}

