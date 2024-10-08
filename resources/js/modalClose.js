const Authform = document.getElementById('closeAuthForm');
const buttonOpenLoginModal = document.getElementById('openLoginModal');

buttonOpenLoginModal.addEventListener('click', () => {
    Authform.submit();
})
