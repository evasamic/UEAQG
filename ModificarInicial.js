// Función para cargar los datos desde el servidor (usando AJAX o fetch)
document.addEventListener('DOMContentLoaded', function () {
    fetch('ModificarInicial.php', {  // Esta URL debe ser la ruta que sirva los datos desde tu backend (PHP)
        method: 'GET'
    })
    .then(response => response.json())
    .then(data => {
        if (data) {
            document.getElementById('titulo').value = data.TituloInicial;
            document.getElementById('texto1').value = data.Parrafo1Inicial;
            document.getElementById('texto2').value = data.Parrafo2Inicial;
            document.getElementById('texto3').value = data.Parrafo3Inicial;
            document.getElementById('imagen-inicial').src = data.ImagenInicial || "img/Preparatoria.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario1inicial').src = data.ImagenHorario1Inicial || "img/Inicial1.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario2inicial').src = data.ImagenHorario2Inicial || "img/Inicial2.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario3inicial').src = data.ImagenHorario3Inicial || "img/Inicial3.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario4inicial').src = data.ImagenHorario4Inicial || "img/Inicial4.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario5inicial').src = data.ImagenHorario5Inicial || "img/Inicial5.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario6inicial').src = data.ImagenHorario6Inicial || "img/Inicial6.jpg";  // Imagen predeterminada
        }
    })
    .catch(error => console.error('Error al cargar los datos:', error));
});

// Función para manejar el cambio de imagen
function cambiarImagenInicial() {
    const inputFile = document.getElementById('img-inicial');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-inicial').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario1Inicial() {
    const inputFile = document.getElementById('img-horario1inicial');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario1inicial').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario2Inicial() {
    const inputFile = document.getElementById('img-horario2inicial');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario2inicial').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario3Inicial() {
    const inputFile = document.getElementById('img-horario3inicial');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario3inicial').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario4Inicial() {
    const inputFile = document.getElementById('img-horario4inicial');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario4inicial').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario5Inicial() {
    const inputFile = document.getElementById('img-horario5inicial');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario5inicial').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario6Inicial() {
    const inputFile = document.getElementById('img-horario6inicial');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario6inicial').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

// Manejar el envío del formulario para guardar los cambios
document.getElementById('form-modificar').addEventListener('submit', function (event) {
    event.preventDefault();  // Evitar que el formulario se envíe de la manera tradicional

    const formData = new FormData(this);
    fetch('ModificarInicial.php', {  // Esta URL debe ser la ruta en tu servidor que actualiza los datos en la BDD
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
