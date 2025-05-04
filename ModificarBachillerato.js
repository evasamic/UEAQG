// Función para cargar los datos desde el servidor (usando AJAX o fetch)
document.addEventListener('DOMContentLoaded', function () {
    fetch('ModificarBachillerato.php', {  // Esta URL debe ser la ruta que sirva los datos desde tu backend (PHP)
        method: 'GET'
    })
    .then(response => response.json())
    .then(data => {
        if (data) {
            document.getElementById('titulo').value = data.TituloBa;
            document.getElementById('texto1').value = data.Parrafo1Ba;
            document.getElementById('texto2').value = data.Parrafo2Ba;
            document.getElementById('texto3').value = data.Parrafo3Ba;
            document.getElementById('imagen-bachillerato').src = data.ImagenBa || "img/Bachillerato.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario1bachillerato').src = data.ImagenHorario1Ba || "img/1ABC.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario2bachillerato').src = data.ImagenHorario2Ba || "img/1BBC.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario3bachillerato').src = data.ImagenHorario3Ba || "img/1CBC.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario4bachillerato').src = data.ImagenHorario4Ba || "img/2ABC.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario5bachillerato').src = data.ImagenHorario5Ba || "img/2BBC.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario6bachillerato').src = data.ImagenHorario6Ba || "img/2CBC.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario7bachillerato').src = data.ImagenHorario7Ba || "img/3ABC.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario8bachillerato').src = data.ImagenHorario8Ba || "img/3BBC.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario9bachillerato').src = data.ImagenHorario9Ba || "img/3CBC.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario10bachillerato').src = data.ImagenHorario10Ba || "img/1ABSC.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario11bachillerato').src = data.ImagenHorario11Ba || "img/1BBSC.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario12bachillerato').src = data.ImagenHorario12Ba || "img/1CBSC.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario13bachillerato').src = data.ImagenHorario13Ba || "img/2ABSC.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario14bachillerato').src = data.ImagenHorario14Ba || "img/2BBSC.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario15bachillerato').src = data.ImagenHorario15Ba || "img/2CBSC.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario16bachillerato').src = data.ImagenHorario16Ba || "img/3ABSC.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario17bachillerato').src = data.ImagenHorario17Ba || "img/3BBSC.jpg";  // Imagen predeterminada
            document.getElementById('imagen-horario18bachillerato').src = data.ImagenHorario18Ba || "img/3CBSC.jpg";  // Imagen predeterminada
        }
    })
    .catch(error => console.error('Error al cargar los datos:', error));
});

// Función para manejar el cambio de imagen
function cambiarImagenBa() {
    const inputFile = document.getElementById('img-bachillerato');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-bachillerato').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario1Ba() {
    const inputFile = document.getElementById('img-horario1bachillerato');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario1bachillerato').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario2Ba() {
    const inputFile = document.getElementById('img-horario2bachillerato');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario2bachillerato').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario3Ba() {
    const inputFile = document.getElementById('img-horario3bachillerato');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario3bachillerato').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario4Ba() {
    const inputFile = document.getElementById('img-horario4bachillerato');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario4bachillerato').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario5Ba() {
    const inputFile = document.getElementById('img-horario5bachillerato');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario5bachillerato').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario6Ba() {
    const inputFile = document.getElementById('img-horario6bachillerato');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario6bachillerato').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario7Ba() {
    const inputFile = document.getElementById('img-horario7bachillerato');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario7bachillerato').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario8Ba() {
    const inputFile = document.getElementById('img-horario8bachillerato');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario8bachillerato').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario9Ba() {
    const inputFile = document.getElementById('img-horario9bachillerato');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario9bachillerato').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario10Ba() {
    const inputFile = document.getElementById('img-horario10bachillerato');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario10bachillerato').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario11Ba() {
    const inputFile = document.getElementById('img-horario11bachillerato');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario11bachillerato').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario12Ba() {
    const inputFile = document.getElementById('img-horario12bachillerato');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario12bachillerato').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario13Ba() {
    const inputFile = document.getElementById('img-horario13bachillerato');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario13bachillerato').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario14Ba() {
    const inputFile = document.getElementById('img-horario14bachillerato');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario14bachillerato').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario15Ba() {
    const inputFile = document.getElementById('img-horario15bachillerato');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario15bachillerato').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario16Ba() {
    const inputFile = document.getElementById('img-horario16bachillerato');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario16bachillerato').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario17Ba() {
    const inputFile = document.getElementById('img-horario17bachillerato');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario17bachillerato').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function cambiarImagenHorario18Ba() {
    const inputFile = document.getElementById('img-horario18bachillerato');
    const file = inputFile.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imagen-horario18bachillerato').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}




// Manejar el envío del formulario para guardar los cambios
document.getElementById('form-modificar').addEventListener('submit', function (event) {
    event.preventDefault();  // Evitar que el formulario se envíe de la manera tradicional

    const formData = new FormData(this);
    fetch('ModificarBachillerato.php', {  // Esta URL debe ser la ruta en tu servidor que actualiza los datos en la BDD
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
