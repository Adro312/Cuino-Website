let home = document.getElementById('NAV-HOME');
let developer = document.getElementById('NAV-DEV');
let menu = document.getElementById('NAV-MENU');
let review = document.getElementById('NAV-REVIEWS');
let perfil = document.getElementById('NAV-PROF');
let login = document.getElementById('Button-Sing-In');

login.addEventListener('click', () => {
    home.classList.remove('opacity-5');
});

home.addEventListener('click', () => {
    home.classList.remove('opacity-5');
});

developer.addEventListener('click', () => {
    developer.classList.remove('opacity-5');
});

menu.addEventListener('click', () => {
    menu.classList.remove('opacity-5');
});

review.addEventListener('click', () => {
    review.classList.remove('opacity-5');
});

perfil.addEventListener('click', () => {
    perfil.classList.remove('opacity-5');
});