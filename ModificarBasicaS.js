// Función para cargar los datos desde el servidor (usando AJAX o fetch)
document.addEventListener('DOMContentLoaded', function () {
    fetch('ModificarBasicaS.php', {  // Esta URL debe ser la ruta que sirva los datos desde tu backend (PHP)
        method: 'GET'
    })
    .then(response => response.json())
    .then(data => {
        if (data) {
            document.getElementById('titulo').value = data.TituloBS;
            document.getElementById('texto1').value = data.Parrafo1BS;
            document.getElementById('texto2').value = data.Parrafo2BS;
            document.getElementById('texto3').value = data.Parrafo3BS;
            document.getElementById('imagen-basicas').src = data.ImagenBS || "img/BasicaSuperior.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario1basicas').src = data.ImagenHorario1BS || "img/8A.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario2basicas').src = data.ImagenHorario2BS || "img/8B.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario3basicas').src = data.ImagenHorario3BS || "img/8C.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario4basicas').src = data.ImagenHorario4BS || "img/9A.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario5basicas').src = data.ImagenHorario5BS || "img/9B.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario6basicas').src = data.ImagenHorario6BS || "img/9C.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario7basicas').src = data.ImagenHorario7BS || "img/10A.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario8basicas').src = data.ImagenHorario8BS || "img/10B.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario9basicas').src = data.ImagenHorario9BS || "img/10C.jpg";  // Imagen predeterminada
        }
    })
    .catch(error => console.error('Error al cargar los datos:', error));
});

// Función para manejar el cambio de imagen
function cambiarImagenBS() {
    const inputFile = document.getElementById('img-basicas');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-basicas').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario1BS() {
    const inputFile = document.getElementById('img-horario1basicas');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario1basicas').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario2BS() {
    const inputFile = document.getElementById('img-horario2basicas');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario2basicas').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario3BS() {
    const inputFile = document.getElementById('img-horario3basicas');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario3basicas').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario4BS() {
    const inputFile = document.getElementById('img-horario4basicas');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario4basicas').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario5BS() {
    const inputFile = document.getElementById('img-horario5basicas');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario5basicas').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario6BS() {
    const inputFile = document.getElementById('img-horario6basicas');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario6basicas').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario7BS() {
    const inputFile = document.getElementById('img-horario7basicas');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario7basicas').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario8BS() {
    const inputFile = document.getElementById('img-horario8basicas');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario8basicas').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario9BS() {
    const inputFile = document.getElementById('img-horario9basicas');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario9basicas').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

// Manejar el envío del formulario para guardar los cambios
document.getElementById('form-modificar').addEventListener('submit', function (event) {
    event.preventDefault();  // Evitar que el formulario se envíe de la manera tradicional

    const formData = new FormData(this);
    fetch('ModificarBasicaS.php', {  // Esta URL debe ser la ruta en tu servidor que actualiza los datos en la BDD
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('¡Datos actualizados con éxito!');
        } else {
            alert('Hubo un error al actualizar los datos.');
        }
    })
    .catch(error => {
        console.error('Error al enviar los cambios:', error);
        alert('Hubo un error en la comunicación con el servidor.');
    });
});
