// Función para cargar los datos desde el servidor (usando AJAX o fetch)
document.addEventListener('DOMContentLoaded', function () {
    fetch('ModificarBasicaM.php', {  // Esta URL debe ser la ruta que sirva los datos desde tu backend (PHP)
        method: 'GET'
    })
    .then(response => response.json())
    .then(data => {
        if (data) {
            document.getElementById('titulo').value = data.TituloBM;
            document.getElementById('texto1').value = data.Parrafo1BM;
            document.getElementById('texto2').value = data.Parrafo2BM;
            document.getElementById('texto3').value = data.Parrafo3BM;
            document.getElementById('imagen-basicam').src = data.ImagenBM || "img/BasicaMlemental.png";  // Imagen predeterminada
            document.getElementById('imagen-horario1basicam').src = data.ImagenHorario1BM || "img/5A.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario2basicam').src = data.ImagenHorario2BM || "img/5B.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario3basicam').src = data.ImagenHorario3BM || "img/5C.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario4basicam').src = data.ImagenHorario4BM || "img/6A.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario5basicam').src = data.ImagenHorario5BM || "img/6B.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario6basicam').src = data.ImagenHorario6BM || "img/7A.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario7basicam').src = data.ImagenHorario7BM || "img/7B.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario8basicam').src = data.ImagenHorario8BM || "img/7C.jpg";  // Imagen predeterminada
        }
    })
    .catch(error => console.error('Error al cargar los datos:', error));
});

// Función para manejar el cambio de imagen
function cambiarImagenBM() {
    const inputFile = document.getElementById('img-basicam');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-basicam').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario1BM() {
    const inputFile = document.getElementById('img-horario1basicam');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario1basicam').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario2BM() {
    const inputFile = document.getElementById('img-horario2basicam');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario2basicam').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario3BM() {
    const inputFile = document.getElementById('img-horario3basicam');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario3basicam').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario4BM() {
    const inputFile = document.getElementById('img-horario4basicam');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario4basicam').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario5BM() {
    const inputFile = document.getElementById('img-horario5basicam');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario5basicam').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario6BM() {
    const inputFile = document.getElementById('img-horario6basicam');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario6basicam').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario7BM() {
    const inputFile = document.getElementById('img-horario7basicam');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario7basicam').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario8BM() {
    const inputFile = document.getElementById('img-horario8basicam');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario8basicam').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}


// Manejar el envío del formulario para guardar los cambios
document.getElementById('form-modificar').addEventListener('submit', function (event) {
    event.preventDefault();  // Evitar que el formulario se envíe de la manera tradicional

    const formData = new FormData(this);
    fetch('ModificarBasicaM.php', {  // Esta URL debe ser la ruta en tu servidor que actualiza los datos en la BDD
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
