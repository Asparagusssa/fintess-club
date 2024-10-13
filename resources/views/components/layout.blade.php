<!doctype html>
<html lang="ru" class="overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css','resources/js/app.js')
</head>
<body class="bg-base-100 text-text min-h-screen font-rubik">
<div class="{{ request()->routeIs('home') ? '' : 'px-10' }}">
    <nav class="p-5 flex items-center space-x-5 justify-between fixed z-50 top-0 left-0 right-0 transition-all duration-500 ease-in-out {{ request()->routeIs('home') ? 'bg-transparent' : 'bg-white shadow-md' }}">
        <div class="xl:w-[300px]">
            <a href="/">
                {{--                    <img src="{{ Vite::asset('/resources/images/logo.svg') }}" alt="logo">--}}
                <p class="text-3xl font-bold text-primary">Качалкино</p>
            </a>
        </div>
        <div class="grow justify-center hidden xl:flex">
            <div class="flex items-center space-x-5 font-bold text-lg text-primary">
                <x-nav-link href="{{ route('subscriptions') }}">Тарифы</x-nav-link>
                <x-nav-link href="{{ route('promos') }}">Акции</x-nav-link>
                <x-nav-link href="{{ route('trainers') }}">Тренеры</x-nav-link>
                <x-nav-link href="{{ route('news') }}">Новости</x-nav-link>
                <x-nav-link href="{{ route('contacts') }}">Контакты</x-nav-link>
            </div>
        </div>
        @guest
            <div class="xl:w-[300px] hidden sm:flex flex-grow xl:flex-grow-0 justify-end">
                <ul class="flex items-center justify-end text-base font-bold">
                    <li class="btn btn-primary px-5 my-[-1rem] rounded-full text-base-100 cursor-pointer text-lg"
                        onclick="authModal.showModal()">Зарегистрироваться
                    </li>
                </ul>
            </div>
        @endguest
        @auth
            <div class="xl:w-[300px] hidden md:block  flex-grow xl:grow-0">
                <div class="dropdown flex items-center justify-end group">
                    <div id="dropdownMenu" tabindex="0" class="text-lg cursor-pointer flex items-center transition duration-500 {{ request()->routeIs('home') ? 'text-base-100' : 'text-black' }} border p-2 my-[-5px] rounded-xl shadow space-x-1 ">
                        <p>Личный кабинет</p>
                        <img class="h-4 w-4 transition duration-300 group-focus:transform group-focus:rotate-180 group-focus-within:transform group-focus-within:rotate-180" src="{{ Vite::asset('/resources/images/svg/dropdown.svg') }}"
                             alt="dropdown">
                    </div>
                    <ul tabindex="0"
                        class="dropdown-content menu bg-white border-2 rounded-box z-[1] w-72 p-2 shadow top-10">
                        <li class="flex flex-row items-center space-x-2 w-[16.7rem]">
                            <a href="/user" class="p-2 max-w-[16.7rem]">
                                <div class="w-12 h-12 p-0">
                                    <img src="{{ Vite::asset('/resources/images/svg/user-avatar.svg') }}"
                                         alt="user-avatar">
                                </div>
                                <div>
                                    <p title="{{ Auth::user()->name }} {{ Auth::user()->surname }}"
                                       class="text-overflow-ellipsis w-[12.5rem]">{{ Auth::user()->name}} {{ Auth::user()->surname }}</p>
                                    <p title="{{ Auth::user()->email }}"
                                       class="text-black/50 text-overflow-ellipsis w-[12.5rem]">{{ Auth::user()->email }}</p>
                                </div>
                            </a>
                        </li>
                        <x-mobile.line class="bg-black/10 h-[1px]"/>
                        <li>
                            <a href="{{ route('user.wallet') }}" class="w-full text-start px-4 py-2">Пополнить баланс</a>
                        </li>
                        <li>
                            <a href="{{ route('user.sections') }}" class="w-full text-start px-4 py-2">Групповые тренировки</a>
                        </li>
                        <li>
                            <a href="{{ route('user.sections') }}" class="w-full text-start px-4 py-2">Настройки</a>
                        </li>
                        <x-mobile.line class="bg-black/10 h-[1px]"/>
                        <li>
                            <form action="/logout" method="POST" class="w-full flex justify-center p-0">
                                @csrf
                                <button type="submit" class="w-full text-start px-4 py-2">Выход</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        @endauth
        <div class="flex justify-end xl:hidden">
            <label class="btn btn-circle swap swap-rotate bg-transparent shadow-transparent border-0 h-auto min-h-0">
                <!-- this hidden checkbox controls the state -->
                <input id="hamburger" type="checkbox"/>

                <svg
                    id="hamburgerOpen"
                    class="swap-off {{ request()->routeIs('home') ? 'text-white transition duration-500' : '' }}"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="CurrentColor"
                    width="32"
                    height="32"
                    viewBox="0 0 512 512">
                    <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
                </svg>

                <!-- close icon -->
                <img class="swap-on fill-current" src="{{ Vite::asset('/resources/images/svg/close.svg') }}"
                     alt="close">
            </label>
        </div>


    </nav>


    <main class="{{ request()->routeIs('home') ? ' text-balance' : 'mt-24 max-w-[986px] mx-auto text-balance'}}">
        {{ $slot }}

    </main>

</div>
@auth
    <x-mobile.bottom-menu/>
@endauth

@guest
    <div id="bottomAuth" class="fixed z-[45] w-[95%] h-16 max-w-lg -translate-x-1/2 bg-secondary text-base-100 rounded-full {{ request()->routeIs('home') ? 'bottom-[-5rem] transition-all duration-500' : 'bottom-3' }}  left-1/2 sm:hidden flex items-center justify-center">
        <p class="w-full h-full flex items-center justify-center" onclick="authModal.showModal()">Зарегистрироваться</p>
    </div>
@endguest


<div id="mobileMenu"
     class="fixed z-50 flex flex-col glass inset-0 left-[100%] bg-secondary transition-all duration-300 ease-in-out overflow-auto">
    <x-mobile.menu/>
</div>

@guest
    {{--MODAL--}}
    <x-modal.authModal/>
    <x-modal.loginModal/>
    <script src="{{ Vite::asset('resources/js/modalClose.js') }}"></script>
    {{--MODAL--}}
@endguest
{{--SCRIPTS--}}
<script src="{{ Vite::asset('resources/js/menu.js') }}"></script>
{{--SCRIPTS--}}

</body>
</html>
