document.addEventListener("DOMContentLoaded", function () {
    const quienesSomosBtn = document.querySelector('.dropdown-btn:nth-of-type(1)');
    const quienesSomosDropdown = quienesSomosBtn.nextElementSibling;
    
    const ofertaBtn = document.getElementById("oferta-btn");
    const ofertaDropdown = document.getElementById("oferta-dropdown");

    function toggleDropdown(button, dropdown) {
        const isActive = dropdown.classList.contains("show");

        // Cerrar todos los dropdowns y remover estilos activos
        document.querySelectorAll('.dropdown-content').forEach(menu => menu.classList.remove('show'));
        document.querySelectorAll('.dropdown-btn').forEach(btn => btn.classList.remove('active'));

        // Si no estaba activo antes, activarlo
        if (!isActive) {
            dropdown.classList.add("show");
            button.classList.add("active");
        }
    }

    quienesSomosBtn.addEventListener("click", function (event) {
        toggleDropdown(quienesSomosBtn, quienesSomosDropdown);
        event.stopPropagation();
    });

    ofertaBtn.addEventListener("click", function (event) {
        toggleDropdown(ofertaBtn, ofertaDropdown);
        event.stopPropagation();
    });

    // Cerrar menús y quitar color rojo si se hace clic fuera
    document.addEventListener("click", function (event) {
        if (!quienesSomosBtn.contains(event.target) && !quienesSomosDropdown.contains(event.target) &&
            !ofertaBtn.contains(event.target) && !ofertaDropdown.contains(event.target)) {
            document.querySelectorAll('.dropdown-content').forEach(menu => menu.classList.remove('show'));
            document.querySelectorAll('.dropdown-btn').forEach(btn => btn.classList.remove('active'));
        }
    });
});
