<dialog id="loginModal" class="modal">
    <div class="modal-box bg-white space-y-5 ">
        <h1 class="text-text text-3xl text-center font-bold">Вход</h1>

        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-[1rem] top-[1rem] focus-visible:outline-0">✕
            </button>
        </form>
        <x-form.form method="POST" action="/login">

            <x-form.field name="login_email">
                <img class="h-4 w-4 opacity-60" src="{{ Vite::asset('/resources/images/svg/email.svg') }}" alt="email">
                <x-form.input name="login_email" type="email" placeholder="Email" required/>
            </x-form.field>

            <x-form.field name="login_password">
                <img class="h-4 w-4 opacity-60" src="{{ Vite::asset('/resources/images/svg/key.svg') }}" alt="key">
                <x-form.input name="login_password" type="password" placeholder="Пароль" required/>
            </x-form.field>

            <x-form.checkbox name="remember" id="rememberLogin">Запомнить меня</x-form.checkbox>
            <x-form.button>Войти</x-form.button>
        </x-form.form>

        <p>Еще нет аккаунта? <a class="link link-primary open-modal" onclick="authModal.showModal()">Зарегистрироваться</a></p>

    </div>
    <form method="dialog" class="modal-backdrop bg-black opacity-40">
        <button>close</button>
    </form>
</dialog>
@if($errors->has('login_email') || $errors->has('login_password'))
    <script>
        const loginModal = document.getElementById('loginModal');
        loginModal.showModal();
    </script>
@endif
