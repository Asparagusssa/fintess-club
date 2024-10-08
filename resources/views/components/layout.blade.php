<!doctype html>
<html lang="ru" class="overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css','resources/js/app.js')
</head>
<body class="bg-base-100 text-text min-h-screen">
<div class="px-10">
    <nav class="p-5 flex items-center space-x-5 justify-between bg-white fixed top-0 left-0 right-0 shadow-md">
        <div class="xl:w-[300px] flex-grow xl:grow-0">
            <a href="/">
                {{--                    <img src="{{ Vite::asset('/resources/images/logo.svg') }}" alt="logo">--}}
                <p class="text-3xl font-bold text-primary">SportClubPenguin</p>
            </a>
        </div>
        <div class="grow justify-center hidden xl:flex">
            <ul class="flex items-center space-x-5 font-bold text-lg text-primary">
                <li>
                    <a href="#">
                        О нас
                    </a>
                </li>
                <li>
                    <a href="#">
                        Тарифы
                    </a>
                </li>
                <li>
                    <a href="#">
                        Акции
                    </a>
                </li>
                <li>
                    <a href="#">
                        Тренеры
                    </a>
                </li>
                <li>
                    <a href="#">
                        Новости
                    </a>
                </li>
                <li>
                    <a href="#">
                        Контакты
                    </a>
                </li>
            </ul>
        </div>
        @guest
            <div class="xl:w-[300px] hidden sm:block">
                <ul class="flex items-center justify-end text-base font-bold">
                    <li class="btn btn-primary px-5 my-[-1rem] rounded-full text-base-100 cursor-pointer text-lg"
                        onclick="authModal.showModal()">Зарегистрироваться
                    </li>
                </ul>
            </div>
        @endguest
        @auth
            <div class="xl:w-[300px] hidden sm:block">
                <div class="flex items-center justify-end">
                    <div class=" my-[-1rem] rounded-full cursor-pointer ">
                        <img class="w-14 h-14 hover:scale-110 transition duration-300 rounded-full" src="{{ Vite::asset('/resources/images/svg/user-avatar.svg') }}" alt="user-avatar">
                    </div>

                </div>
            </div>
        @endauth
        <div class="flex justify-end xl:hidden">
            <label class="btn btn-circle swap swap-rotate bg-transparent shadow-transparent border-0 h-auto min-h-0">
                <!-- this hidden checkbox controls the state -->
                <input id="hamburger" type="checkbox" />

                <!-- hamburger icon -->
                <img class="swap-off fill-current" src="{{ Vite::asset('/resources/images/svg/hamburger.svg') }}" alt="hamburger">

                <!-- close icon -->
                <img class="swap-on fill-current" src="{{ Vite::asset('/resources/images/svg/close.svg') }}" alt="close">
            </label>
        </div>


    </nav>


    <main class="mt-24 max-w-[986px] mx-auto text-balance">
        {{ $slot }}
    </main>

</div>

<div id="menu" class="fixed flex flex-col inset-0 left-[100%] bg-base-100 transition-all duration-300 ease-in-out overflow-auto">
    <x-mobile.menu />
</div>

@guest
    {{--MODAL--}}
    <x-modal id="authModal"/>
    <x-modal id="loginModal"/>
    <script src="{{ Vite::asset('resources/js/modalClose.js') }}"></script>
    {{--MODAL--}}
@endguest
{{--SCRIPTS--}}
    <script src="{{ Vite::asset('resources/js/menu.js') }}"></script>
{{--SCRIPTS--}}

</body>
</html>
