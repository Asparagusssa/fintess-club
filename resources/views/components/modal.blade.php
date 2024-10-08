@props(['id' => ''])

@if($id == 'authModal')
<dialog id="authModal" class="modal">
    <div class="modal-box bg-white space-y-5 ">
        <h1 class="text-text text-3xl text-center font-bold">Регистрация</h1>

        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-[1rem] top-[1rem] focus-visible:outline-0">✕
            </button>
        </form>
        <x-form.form id="register" method="POST" action="/register">
            <x-form.field name="name">
                <img class="h-4 w-4 opacity-60" src="{{ Vite::asset('/resources/images/svg/person.svg') }}" alt="person">
                <x-form.input value="{{ old('name') }}" name="name" type="text" placeholder="Имя" required/>
            </x-form.field>

            <x-form.field name="surname">
                <img class="h-4 w-4 opacity-60" src="{{ Vite::asset('/resources/images/svg/person.svg') }}" alt="person">
                <x-form.input value="{{ old('surname') }}" name="surname" type="text" placeholder="Фамилия" required/>
            </x-form.field>

            <div>
                <div class="flex space-x-2 justify-center">
                    <img class="h-6 w-6 opacity-60" src="{{ Vite::asset('/resources/images/svg/male.svg') }}" alt="male">
                    <x-form.input type="radio" name="sex" class="radio radio-info" value="male" checked="checked" />
                    <x-form.input type="radio" name="sex" class="radio radio-error" value="female" />
                    <img class="h-6 w-6 opacity-60" src="{{ Vite::asset('/resources/images/svg/female.svg') }}" alt="female">
                </div>
                @error('sex')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <x-form.field name="email">
                <img class="h-4 w-4 opacity-60" src="{{ Vite::asset('/resources/images/svg/email.svg') }}" alt="email">
                <x-form.input value="{{ old('email') }}" name="email" type="email" placeholder="Email" required/>
            </x-form.field>

            <x-form.field>
                <img class="h-4 w-4 opacity-60" src="{{ Vite::asset('/resources/images/svg/key.svg') }}" alt="key">
                <x-form.input name="password" type="password" placeholder="Пароль" required/>
            </x-form.field>

            <x-form.field name="password">
                <img class="h-4 w-4 opacity-60" src="{{ Vite::asset('/resources/images/svg/key.svg') }}" alt="key">
                <x-form.input name="password_confirmation" type="password" placeholder="Подтверждение пароля" required/>
            </x-form.field>

            <x-form.checkbox name="remember" id="rememberAuth">Запомнить меня</x-form.checkbox>

            <x-form.button>Зарегистрироваться</x-form.button>
        </x-form.form>

        <p>Уже есть аккаунт? <a id="openLoginModal" href="#" class="link link-primary" onclick="loginModal.showModal()">Войти</a></p>

    </div>
    <form id="closeAuthForm" method="dialog" class="modal-backdrop bg-black opacity-40">
        <button>close</button>
    </form>
</dialog>
    @if($errors->has('name') || $errors->has('surname') || $errors->has('email') || $errors->has('password') || $errors->has('sex'))
        <script>
            const authModal = document.getElementById('authModal');
            authModal.showModal();
        </script>
    @endif
@endif


@if($id == 'loginModal')
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
@endif
@php
@endphp
