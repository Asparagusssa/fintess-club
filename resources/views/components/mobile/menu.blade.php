<div class="p-5 bg-white shadow-md w-screen flex justify-between items-center fixed">
    @guest
        <li class="btn btn-primary px-5 py-3 my-[-1rem] rounded-full text-base-100 cursor-pointer"
            onclick="authModal.showModal()">Зарегистрироваться
        </li>
    @endguest

    @auth
        <div class=" my-[-1rem] cursor-pointer">
            <img class="w-14 h-14 hover:scale-110 transition duration-300 rounded-full" src="{{ Vite::asset('/resources/images/svg/user-avatar.svg') }}" alt="user-avatar">
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
    <div class="flex flex-col font-bold text-lg text-white text-center space-y-3">
        <x-mobile.nav-link href="#">О нас</x-mobile.nav-link>
        <x-mobile.nav-link href="#">Тарифы</x-mobile.nav-link>
        <x-mobile.nav-link href="#">Акции</x-mobile.nav-link>
        <x-mobile.nav-link href="#">Тренеры</x-mobile.nav-link>
        <x-mobile.nav-link href="#">Новости</x-mobile.nav-link>
        <x-mobile.nav-link href="#">Контакты</x-mobile.nav-link>

        @auth
            <x-mobile.nav-link class="h-16 py-0 bg-primary btn btn-primary text-lg hover:bg-primary" href="#">Профиль</x-mobile.nav-link>
        @endauth


    </div>
</div>

<div class="w-full bg-white p-5 fixed bottom-0 shadow-up">
    <a href="tel:8 800 555-35-35" class="whitespace-nowrap"><span>Контактный телефон: </span><span class="text-primary">8 800 555-35-35</span></a>
</div>


