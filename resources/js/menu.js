const checkbox = document.getElementById('hamburger');
const menu = document.getElementById('menu');
const mobileCheckbox = document.getElementById('mobile-hamburger');
const root = document.documentElement;

checkbox.addEventListener('change', () => {
    menu.classList.toggle('left-[100%]');
    menu.classList.toggle('left-0');
    mobileCheckbox.checked = true;
    root.classList.toggle('overflow-y-hidden');
})

mobileCheckbox.addEventListener('change', () => {
    menu.classList.toggle('left-[100%]');
    menu.classList.toggle('left-0');
    checkbox.checked = false;
    root.classList.toggle('overflow-y-hidden');
    
})
