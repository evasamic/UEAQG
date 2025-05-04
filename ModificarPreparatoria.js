// Función para cargar los datos desde el servidor (usando AJAX o fetch)
document.addEventListener('DOMContentLoaded', function () {
    fetch('ModificarPreparatoria.php', {  // Esta URL debe ser la ruta que sirva los datos desde tu backend (PHP)
        method: 'GET'
    })
    .then(response => response.json())
    .then(data => {
        if (data) {
            document.getElementById('titulo').value = data.TituloPrepa;
            document.getElementById('texto1').value = data.Parrafo1Prepa;
            document.getElementById('texto2').value = data.Parrafo2Prepa;
            document.getElementById('texto3').value = data.Parrafo3Prepa;
            document.getElementById('imagen-preparatoria').src = data.ImagenPrepa || "img/Preparatoria-Banner.png";  // Imagen predeterminada
            document.getElementById('imagen-horario1preparatoria').src = data.ImagenHorario1Prepa || "img/PreparatoriaA.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario2preparatoria').src = data.ImagenHorario2Prepa || "img/PreparatoriaB.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario3preparatoria').src = data.ImagenHorario2Prepa || "img/PreparatoriaC.jpg";  // Imagen predeterminada
        }
    })
    .catch(error => console.error('Error al cargar los datos:', error));
});

// Función para manejar el cambio de imagen
function cambiarImagenPreparatoria() {
    const inputFile = document.getElementById('img-preparatoria');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-preparatoria').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario1Prepa() {
    const inputFile = document.getElementById('img-horario1preparatoria');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario1preparatoria').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario2Prepa() {
    const inputFile = document.getElementById('img-horario2preparatoria');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario2preparatoria').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario3Prepa() {
    const inputFile = document.getElementById('img-horario3preparatoria');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario3preparatoria').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

// Manejar el envío del formulario para guardar los cambios
document.getElementById('form-modificar').addEventListener('submit', function (event) {
    event.preventDefault();  // Evitar que el formulario se envíe de la manera tradicional

    const formData = new FormData(this);
    fetch('ModificarPreparatoria.php', {  // Esta URL debe ser la ruta en tu servidor que actualiza los datos en la BDD
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
