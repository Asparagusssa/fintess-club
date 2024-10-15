<div id="mobileMenu"
     class="fixed z-50 flex flex-col glass inset-0 left-[100%] bg-secondary transition-all duration-300 ease-in-out overflow-auto">
    <div class="p-5 bg-white shadow-md w-screen flex justify-between items-center fixed">
        @guest
            <li class="btn btn-secondary px-5 py-3 my-[-1rem] rounded-full text-base-100 cursor-pointer"
                onclick="authModal.showModal()">Зарегистрироваться
            </li>
        @endguest

        @auth
            <div class=" my-[-1rem] cursor-pointer flex items-center space-x-4 w-2/3">
                <img class="w-10 h-10 rounded-full" src="{{ Vite::asset('/resources/images/svg/user-avatar.svg') }}" alt="user-avatar">

                <p class="text-xl text-overflow-ellipsis">{{ Auth::user()->name }} {{ mb_substr(Auth::user()->surname, 0, 1, 'UTF-8') }}.</p>
            </div>
        @endauth
        <div>
            <label class="btn btn-circle swap swap-rotate bg-transparent shadow-transparent border-0 h-auto min-h-0">
                <input id="mobile-hamburger" type="checkbox" />
                <img class="swap-off fill-current" src="{{ Vite::asset('/resources/images/svg/hamburger.svg') }}" alt="hamburger">
                <img class="swap-on fill-current" src="{{ Vite::asset('/resources/images/svg/close.svg') }}" alt="close">
            </label>

        </div>
    </div>

    <div class="mb-20 mt-20 mx-2 flex-grow">
        <div class="flex flex-col font-bold text-lg text-white text-center">
            <x-mobile.nav-link href="/subscriptions">Тарифы</x-mobile.nav-link>
            <x-mobile.nav-link href="/promos">Акции</x-mobile.nav-link>
            <x-mobile.nav-link href="/trainers">Тренеры</x-mobile.nav-link>
            <x-mobile.nav-link href="/news">Новости</x-mobile.nav-link>
            <x-mobile.nav-link href="/contacts">Контакты</x-mobile.nav-link>
        </div>
    </div>

    <div class="w-full bg-white p-5 fixed bottom-0 shadow-up">
        <a href="tel:8 800 555-35-35" class="whitespace-nowrap"><span>Контактный телефон: </span><span class="text-primary">8 800 555-35-35</span></a>
    </div>
</div>

