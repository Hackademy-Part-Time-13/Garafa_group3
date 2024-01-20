document.addEventListener("DOMContentLoaded", function() {
    const navbarToggle = document.getElementById('navbarToggle');
    const navbarComponent = document.querySelector('.navbar_component');

    navbarToggle.addEventListener('click', function() {
        navbarComponent.classList.toggle('active');
    });
});