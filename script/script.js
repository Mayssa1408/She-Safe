/* js pour le header */ 
document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger-menu');
    const navbar = document.querySelector('.navbar');

    // Toggle le menu actif sur mobile
    hamburger.addEventListener('click', () => {
        navbar.classList.toggle('active');
    });
});
