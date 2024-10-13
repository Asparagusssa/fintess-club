// const Authform = document.getElementById('closeAuthForm');
// const buttonOpenLoginModal = document.getElementById('openLoginModal');
//
// buttonOpenLoginModal.addEventListener('click', () => {
//     Authform.submit();
// })


const buttonOpenLoginModal = document.querySelectorAll('.open-modal');
const closeModalForm = document.querySelectorAll('.modal-backdrop');

let count = 0;

buttonOpenLoginModal.forEach(button => {
    button.addEventListener('click', (e) => {
        ++count % 2 ? closeModalForm[0].submit() : closeModalForm[1].submit();
    });
});
