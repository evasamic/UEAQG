document.addEventListener("DOMContentLoaded", function () {
    const quienesSomosBtn = document.querySelector('.dropdown-btn:nth-of-type(1)');
    const quienesSomosDropdown = quienesSomosBtn.nextElementSibling;
    const ofertaBtn = document.getElementById("oferta-btn");
    const ofertaDropdown = document.getElementById("oferta-dropdown");

    function toggleDropdown(button, dropdown) {
        const isActive = dropdown.classList.contains("show");

        // Cerrar todos los menús desplegables
        document.querySelectorAll('.dropdown-content').forEach(menu => menu.classList.remove('show'));
        document.querySelectorAll('.dropdown-btn').forEach(btn => btn.classList.remove('active'));

        // Si el menú no estaba activo, abrirlo
        if (!isActive) {
            dropdown.classList.add("show");
            button.classList.add("active");
        }
    }

    // Eventos para mostrar y ocultar los menús al hacer clic
    quienesSomosBtn.addEventListener("click", function (event) {
        toggleDropdown(quienesSomosBtn, quienesSomosDropdown);
        event.stopPropagation();
    });

    ofertaBtn.addEventListener("click", function (event) {
        toggleDropdown(ofertaBtn, ofertaDropdown);
        event.stopPropagation();
    });

    // Cerrar los menús si se hace clic fuera de ellos
    document.addEventListener("click", function (event) {
        if (!quienesSomosBtn.contains(event.target) && !quienesSomosDropdown.contains(event.target) &&
            !ofertaBtn.contains(event.target) && !ofertaDropdown.contains(event.target)) {
            document.querySelectorAll('.dropdown-content').forEach(menu => menu.classList.remove('show'));
            document.querySelectorAll('.dropdown-btn').forEach(btn => btn.classList.remove('active'));
        }
    });
});
