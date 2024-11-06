<nav class="p-5 flex items-center space-x-5 justify-between fixed z-50 top-0 left-0 right-0 transition-all duration-500 ease-in-out {{ request()->routeIs('home') ? 'bg-transparent' : 'bg-white shadow-md' }}">
    <div class="xl:w-[300px]">
        <a href="/">
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
                <li id="headerAuthButton" class="btn px-5 my-[-1rem] rounded-full text-base-100 cursor-pointer text-lg transition-all duration-300 {{ request()->routeIs('home') ? 'bg-transparent text-primary border-transparent' : 'btn-primary' }}"
                    onclick="authModal.showModal()">Зарегистрироваться
                </li>
            </ul>
        </div>
    @endguest
    @auth
        <x-profile.side-menu/>
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
