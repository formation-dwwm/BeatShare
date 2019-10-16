require('../css/sidenav.css');

let $navLeaver = document.getElementById('nav-dropdown-leaver');
let $dropdown = document.getElementById('nav-dropdown');
let $hamburger = document.getElementById('nav-icon3');

$navLeaver.addEventListener('click', () => {
    $dropdown.setAttribute('class', 'dropdown-not-loaded');
    setTimeout(() => {
        $dropdown.setAttribute('class', 'not-loaded');
    }, 500)
});

$hamburger.addEventListener('click', () => {
    $dropdown.setAttribute('class', 'dropdown-loaded');
});