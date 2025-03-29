document.addEventListener("DOMContentLoaded", function () {
    // Obtener todos los elementos de los submenús
    const submenus = document.querySelectorAll('.submenu');

    submenus.forEach(function (submenu) {
        const submenuItems = submenu.querySelector('.submenu-items');

        // Abrir el submenú cuando el ratón pasa sobre el item
        submenu.addEventListener('mouseenter', function () {
            submenuItems.style.display = 'block';
            submenuItems.style.opacity = 1;
            submenuItems.style.maxHeight = '300px'; // Desplegar el submenú
        });

        // Cerrar el submenú cuando el ratón sale de la opción
        submenu.addEventListener('mouseleave', function () {
            submenuItems.style.display = 'none';
            submenuItems.style.opacity = 0;
            submenuItems.style.maxHeight = '0'; // Colapsar el submenú
        });
    });

    // Redirigir al hacer clic en el botón de cerrar sesión
    const logoutButton = document.getElementById('logout');
    logoutButton.addEventListener('click', function () {
        window.location.href = 'Recursos.html'; // Redirige a Recursos.html
    });
});
