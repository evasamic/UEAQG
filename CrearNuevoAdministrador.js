/// Función para cargar administradores en la tabla
function cargarAdministrador() {
    fetch("CrearNuevoAdministrador.php?accion=listar")
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
                tabla.innerHTML += "<tr><td colspan='5'>No hay administradores registrados.</td></tr>";
                return;
            }

            data.forEach(administrador => {
                let fila = `
                    <tr>
                        <td>${administrador.CedulaAdmin}</td>
                        <td>${administrador.ApellidosAdmin}</td>
                        <td>${administrador.NombresAdmin}</td>
                        <td>${administrador.UsuarioAdmin}</td>
                        <td>
                            <button class="btn-editar" onclick="editarAdministrador(${administrador.idAdmin})">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn-eliminar" onclick="eliminarAdministrador(${administrador.idAdmin})">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>`;
                tabla.innerHTML += fila;
            });
        })
        .catch(error => {
            console.error("Error al cargar administradores:", error);
        });
}


// Función para eliminar administrador
function eliminarAdministrador(idAdmin) {
    if (confirm("¿Estás seguro de que deseas eliminar este administrador?")) {
        fetch(`EliminarAdministrador.php?idAdmin=${idAdmin}`, {
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
            cargarAdministrador(); // Recargar la lista de administradores
        })
        .catch(error => {
            console.error("Error al eliminar administrador:", error);
            alert("Hubo un error al eliminar el administrador.");
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
            fetch("CrearNuevoAdministrador.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.success);
                    form.reset();
                    cargarAdministrador(); // Recargar la lista de administradores
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

    // Cargar los administradores registrados al inicio
    cargarAdministrador();

    // Redirigir al hacer clic en el botón de Cerrar Sesión
    document.getElementById("logout").addEventListener("click", function() {
        window.location.href = "Recursos.html"; // Redirige a Recursos.html
    });
});

// Función para redirigir a EditarAdministrador.html con los datos del administrador
function editarAdministrador(idAdmin) {
    window.location.href = `EditarAdministrador.html?idAdmin=${idAdmin}`;
}

