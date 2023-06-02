const hamburgerMenu = document.querySelector('.hamburgermenu');
const navlinks = document.querySelector('ul');

hamburgerMenu.addEventListener('click', () => {
    if (navlinks.classList.contains('hidden')) {
        navlinks.classList.add('flex');
        navlinks.classList.remove('hidden');
    }else {
        navlinks.classList.remove('flex');
        navlinks.classList.add('hidden');
    }
});