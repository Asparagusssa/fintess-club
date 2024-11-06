<!doctype html>
<html lang="ru" class="overflow-x-hidden">

<x-layout.head/>

<body class="bg-base-100 text-text min-h-screen font-rubik">
    <div class="md:px-10 px-5">
        <x-layout.header/>
        <main class="mt-24 max-w-[986px] mx-auto text-balance">
            {{ $slot }}
        </main>
    </div>

    <x-mobile.menu/>

    @auth
        <x-mobile.bottom-menu/>
    @endauth

    @guest
        <div id="bottomAuth" class="fixed z-[45] w-[95%] h-16 max-w-lg -translate-x-1/2 bg-secondary text-base-100 rounded-full {{ request()->routeIs('home') ? 'bottom-[-5rem] transition-all duration-500' : 'bottom-3' }}  left-1/2 sm:hidden flex items-center justify-center">
            <p class="w-full h-full flex items-center justify-center" onclick="authModal.showModal()">Зарегистрироваться</p>
        </div>
    @endguest

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
