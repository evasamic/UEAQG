// Función para cargar los datos desde el servidor (usando AJAX o fetch)
document.addEventListener('DOMContentLoaded', function () {
    fetch('ModificarBasicaE.php', {  // Esta URL debe ser la ruta que sirva los datos desde tu backend (PHP)
        method: 'GET'
    })
    .then(response => response.json())
    .then(data => {
        if (data) {
            document.getElementById('titulo').value = data.TituloBE;
            document.getElementById('texto1').value = data.Parrafo1BE;
            document.getElementById('texto2').value = data.Parrafo2BE;
            document.getElementById('texto3').value = data.Parrafo3BE;
            document.getElementById('imagen-basicae').src = data.ImagenBE || "img/BasicaElemental.png";  // Imagen predeterminada
            document.getElementById('imagen-horario1basicae').src = data.ImagenHorario1BE || "img/2A.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario2basicae').src = data.ImagenHorario2BE || "img/2B.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario3basicae').src = data.ImagenHorario3BE || "img/2C.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario4basicae').src = data.ImagenHorario4BE || "img/3A.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario5basicae').src = data.ImagenHorario5BE || "img/3B.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario6basicae').src = data.ImagenHorario6BE || "img/3C.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario7basicae').src = data.ImagenHorario7BE || "img/4A.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario8basicae').src = data.ImagenHorario8BE || "img/4B.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario9basicae').src = data.ImagenHorario9BE || "img/4C.jpg";  // Imagen predeterminada
        }
    })
    .catch(error => console.error('Error al cargar los datos:', error));
});

// Función para manejar el cambio de imagen
function cambiarImagenBE() {
    const inputFile = document.getElementById('img-basicae');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-basicae').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario1BE() {
    const inputFile = document.getElementById('img-horario1basicae');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario1basicae').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario2BE() {
    const inputFile = document.getElementById('img-horario2basicae');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario2basicae').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario3BE() {
    const inputFile = document.getElementById('img-horario3basicae');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario3basicae').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario4BE() {
    const inputFile = document.getElementById('img-horario4basicae');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario4basicae').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario5BE() {
    const inputFile = document.getElementById('img-horario5basicae');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario5basicae').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario6BE() {
    const inputFile = document.getElementById('img-horario6basicae');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario6basicae').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario7BE() {
    const inputFile = document.getElementById('img-horario7basicae');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario7basicae').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario8BE() {
    const inputFile = document.getElementById('img-horario8basicae');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario8basicae').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario9BE() {
    const inputFile = document.getElementById('img-horario9basicae');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario9basicae').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

// Manejar el envío del formulario para guardar los cambios
document.getElementById('form-modificar').addEventListener('submit', function (event) {
    event.preventDefault();  // Evitar que el formulario se envíe de la manera tradicional

    const formData = new FormData(this);
    fetch('ModificarBasicaE.php', {  // Esta URL debe ser la ruta en tu servidor que actualiza los datos en la BDD
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
