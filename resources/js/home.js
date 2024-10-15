window.addEventListener('scroll', function() {
    const nav = document.querySelector('nav');
    const headerAuthButton = document.getElementById('headerAuthButton');
    const hamburgerOpen = document.getElementById('hamburgerOpen');
    const dropdownMenu = document.getElementById('dropdownMenu');
    const bottomAuth = document.getElementById('bottomAuth');
    const scrolled = window.scrollY > 10;

    toggleClasses(nav, scrolled, ['bg-transparent'], ['bg-white', 'shadow-md']);
    if (headerAuthButton) {
        toggleClasses(headerAuthButton, scrolled, ['bg-transparent', 'text-primary', 'border-transparent'], ['btn-primary']);
    }
    if (bottomAuth) {
        toggleClasses(bottomAuth, scrolled, ['bottom-[-5rem]'], ['bottom-3']);
    }
    if (hamburgerOpen) {
        toggleClasses(hamburgerOpen, scrolled, ['text-white'], ['text-black']);
    }
    if (dropdownMenu) {
        toggleClasses(dropdownMenu, scrolled, ['text-base-100'], ['text-black']);
    }
});

function toggleClasses(element, condition, removeClasses, addClasses) {
    if (condition) {
        element.classList.remove(...removeClasses);
        element.classList.add(...addClasses);
    } else {
        element.classList.add(...removeClasses);
        element.classList.remove(...addClasses);
    }
}

window.onload = function() {
    const nav = document.querySelector('nav');
    const headerAuthButton = document.getElementById('headerAuthButton');
    const hamburgerOpen = document.getElementById('hamburgerOpen');
    const dropdownMenu = document.getElementById('dropdownMenu');
    const bottomAuth = document.getElementById('bottomAuth');
    const scrolled = window.scrollY > 10;

    toggleClasses(nav, scrolled, ['bg-transparent'], ['bg-white', 'shadow-md']);
    if (headerAuthButton) {
        toggleClasses(headerAuthButton, scrolled, ['bg-transparent', 'text-primary', 'border-transparent'], ['btn-primary']);
    }
    if (bottomAuth) {
        toggleClasses(bottomAuth, scrolled, ['bottom-[-5rem]'], ['bottom-3']);
    }
    if (hamburgerOpen) {
        toggleClasses(hamburgerOpen, scrolled, ['text-white'], ['text-black']);
    }
    if (dropdownMenu) {
        toggleClasses(dropdownMenu, scrolled, ['text-base-100'], ['text-black']);
    }
}
