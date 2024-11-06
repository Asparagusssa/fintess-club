<!doctype html>
<html lang="ru" class="overflow-x-hidden">

<x-layout.head/>

<body>
<!-- ========== HEADER ========== -->
<header class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-[48] w-full bg-white border-b py-2.5 lg:ps-[260px]">
    <nav class="px-4 sm:px-6 flex basis-full items-center w-full mx-auto">
        <div class="me-5 lg:me-0 lg:hidden">
            <!-- Logo -->
            <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="{{ route('home') }}">
                <p>Качалкино</p>
            </a>
            <!-- End Logo -->
        </div>

        <div class="w-full flex items-center justify-end ms-auto gap-x-1 md:gap-x-3">

            <div class="flex-auto hidden lg:block">
                <p>Баланс: {{ number_format(Auth::user()->balance->amount, 0, '', ' ') }} Руб</p>
            </div>

            <div class="flex flex-row items-center justify-end gap-1">

                <button type="button" class="size-[38px] relative inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
                    <span class="sr-only">Notifications</span>
                </button>

                <div class="relative inline-flex">
                    <div class="size-[38px]">
                        <x-profile.user-avatar/>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<div class="-mt-px">
    <!-- Breadcrumb -->
    <div class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 lg:px-8 lg:hidden">
        <div class="flex items-center py-2 space-x-2">
            <!-- Navigation Toggle -->
            <button type="button" id="sidebarToggle" class="size-8 flex justify-center items-center gap-x-2 border border-gray-200 text-gray-800 hover:text-gray-500 rounded-lg focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none">
                <span class="sr-only">Открыть меню</span>
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M15 3v18"/><path d="m8 9 3 3-3 3"/></svg>
            </button>
            <!-- End Navigation Toggle -->

            <div class="flex-auto">
                <p>Баланс: {{ number_format(Auth::user()->balance->amount, 0, '', ' ') }} Руб</p>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
</div>

<!-- Sidebar -->
<div id="sidebar" class="-translate-x-full transition-all duration-300 transform
  w-[260px] h-full
  fixed inset-y-0 start-0 z-[60]
  bg-white border-e border-gray-200
  lg:block lg:translate-x-0 lg:end-auto lg:bottom-0">
    <div class="relative flex flex-col h-full max-h-full">
        <div class="px-6 pt-4">
            <!-- Logo -->
            <a class="flex-none rounded-xl text-2xl text-secondary inline-block font-semibold focus:outline-none focus:opacity-80" href="{{ route('home') }}">
                <p>Качалкино</p>
            </a>
            <!-- End Logo -->
        </div>

        <!-- Content -->
        <div class="h-full overflow-y-auto">
            <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap">
                <ul class="flex flex-col space-y-1">
                    <x-profile.nav-link href="{{ route('user.profile') }}">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        Профиль
                    </x-profile.nav-link>

                    <x-profile.nav-link href="{{ route('user.wallet') }}">
                        <svg class="shrink-0 size-4"
                             aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M11.074 4 8.442.408A.95.95 0 0 0 7.014.254L2.926 4h8.148ZM9 13v-1a4 4 0 0 1 4-4h6V6a1 1 0 0 0-1-1H1a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h17a1 1 0 0 0 1-1v-2h-6a4 4 0 0 1-4-4Z"/>
                            <path
                                d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z"/>
                        </svg>
                        Баланс
                    </x-profile.nav-link>

                    <x-profile.nav-link href="{{ route('user.settings') }}">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 478.703 478.703" xml:space="preserve"><g><g><path d="M454.2,189.101l-33.6-5.7c-3.5-11.3-8-22.2-13.5-32.6l19.8-27.7c8.4-11.8,7.1-27.9-3.2-38.1l-29.8-29.8 c-5.6-5.6-13-8.7-20.9-8.7c-6.2,0-12.1,1.9-17.1,5.5l-27.8,19.8c-10.8-5.7-22.1-10.4-33.8-13.9l-5.6-33.2 c-2.4-14.3-14.7-24.7-29.2-24.7h-42.1c-14.5,0-26.8,10.4-29.2,24.7l-5.8,34c-11.2,3.5-22.1,8.1-32.5,13.7l-27.5-19.8 c-5-3.6-11-5.5-17.2-5.5c-7.9,0-15.4,3.1-20.9,8.7l-29.9,29.8c-10.2,10.2-11.6,26.3-3.2,38.1l20,28.1 c-5.5,10.5-9.9,21.4-13.3,32.7l-33.2,5.6c-14.3,2.4-24.7,14.7-24.7,29.2v42.1c0,14.5,10.4,26.8,24.7,29.2l34,5.8 c3.5,11.2,8.1,22.1,13.7,32.5l-19.7,27.4c-8.4,11.8-7.1,27.9,3.2,38.1l29.8,29.8c5.6,5.6,13,8.7,20.9,8.7c6.2,0,12.1-1.9,17.1-5.5 l28.1-20c10.1,5.3,20.7,9.6,31.6,13l5.6,33.6c2.4,14.3,14.7,24.7,29.2,24.7h42.2c14.5,0,26.8-10.4,29.2-24.7l5.7-33.6 c11.3-3.5,22.2-8,32.6-13.5l27.7,19.8c5,3.6,11,5.5,17.2,5.5l0,0c7.9,0,15.3-3.1,20.9-8.7l29.8-29.8c10.2-10.2,11.6-26.3,3.2-38.1 l-19.8-27.8c5.5-10.5,10.1-21.4,13.5-32.6l33.6-5.6c14.3-2.4,24.7-14.7,24.7-29.2v-42.1 C478.9,203.801,468.5,191.501,454.2,189.101z M451.9,260.401c0,1.3-0.9,2.4-2.2,2.6l-42,7c-5.3,0.9-9.5,4.8-10.8,9.9 c-3.8,14.7-9.6,28.8-17.4,41.9c-2.7,4.6-2.5,10.3,0.6,14.7l24.7,34.8c0.7,1,0.6,2.5-0.3,3.4l-29.8,29.8c-0.7,0.7-1.4,0.8-1.9,0.8 c-0.6,0-1.1-0.2-1.5-0.5l-34.7-24.7c-4.3-3.1-10.1-3.3-14.7-0.6c-13.1,7.8-27.2,13.6-41.9,17.4c-5.2,1.3-9.1,5.6-9.9,10.8l-7.1,42 c-0.2,1.3-1.3,2.2-2.6,2.2h-42.1c-1.3,0-2.4-0.9-2.6-2.2l-7-42c-0.9-5.3-4.8-9.5-9.9-10.8c-14.3-3.7-28.1-9.4-41-16.8 c-2.1-1.2-4.5-1.8-6.8-1.8c-2.7,0-5.5,0.8-7.8,2.5l-35,24.9c-0.5,0.3-1,0.5-1.5,0.5c-0.4,0-1.2-0.1-1.9-0.8l-29.8-29.8 c-0.9-0.9-1-2.3-0.3-3.4l24.6-34.5c3.1-4.4,3.3-10.2,0.6-14.8c-7.8-13-13.8-27.1-17.6-41.8c-1.4-5.1-5.6-9-10.8-9.9l-42.3-7.2 c-1.3-0.2-2.2-1.3-2.2-2.6v-42.1c0-1.3,0.9-2.4,2.2-2.6l41.7-7c5.3-0.9,9.6-4.8,10.9-10c3.7-14.7,9.4-28.9,17.1-42 c2.7-4.6,2.4-10.3-0.7-14.6l-24.9-35c-0.7-1-0.6-2.5,0.3-3.4l29.8-29.8c0.7-0.7,1.4-0.8,1.9-0.8c0.6,0,1.1,0.2,1.5,0.5l34.5,24.6 c4.4,3.1,10.2,3.3,14.8,0.6c13-7.8,27.1-13.8,41.8-17.6c5.1-1.4,9-5.6,9.9-10.8l7.2-42.3c0.2-1.3,1.3-2.2,2.6-2.2h42.1 c1.3,0,2.4,0.9,2.6,2.2l7,41.7c0.9,5.3,4.8,9.6,10,10.9c15.1,3.8,29.5,9.7,42.9,17.6c4.6,2.7,10.3,2.5,14.7-0.6l34.5-24.8 c0.5-0.3,1-0.5,1.5-0.5c0.4,0,1.2,0.1,1.9,0.8l29.8,29.8c0.9,0.9,1,2.3,0.3,3.4l-24.7,34.7c-3.1,4.3-3.3,10.1-0.6,14.7 c7.8,13.1,13.6,27.2,17.4,41.9c1.3,5.2,5.6,9.1,10.8,9.9l42,7.1c1.3,0.2,2.2,1.3,2.2,2.6v42.1H451.9z"/><path d="M239.4,136.001c-57,0-103.3,46.3-103.3,103.3s46.3,103.3,103.3,103.3s103.3-46.3,103.3-103.3S296.4,136.001,239.4,136.001 z M239.4,315.601c-42.1,0-76.3-34.2-76.3-76.3s34.2-76.3,76.3-76.3s76.3,34.2,76.3,76.3S281.5,315.601,239.4,315.601z"/></g></g></svg>
                        Настройки
                    </x-profile.nav-link>

                    <x-profile.nav-link href="{{ route('user.reset-password') }}">
                        <img class="size-4" src="{{ Vite::asset('resources/images/svg/key.svg') }}" alt="key">
                        Сменить пароль
                    </x-profile.nav-link>

                    <x-mobile.line class="bg-gray-300 h-[1px]"/>
                    <li>
                        <x-form.form action="{{ route('logout') }}" method="POST" class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100">
                            <img class="size-4" src="{{ Vite::asset('/resources/images/svg/logout.svg') }}  " alt="logout">
                            <button type="submit" class="w-full h-full text-left">Выход</button>
                        </x-form.form>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- End Content -->
    </div>
</div>
<!-- End Sidebar -->

<!-- Content -->
<div class="w-full lg:ps-64">
    <div class="p-4 sm:p-6 mb-20 md:mb-0 {{ $attributes->get('class') }}">
        {{ $slot }}
        <x-mobile.bottom-menu/>
    </div>
</div>
<!-- End Content -->
<!-- ========== END MAIN CONTENT ========== -->
</body>
<script>
    const sidebar = document.getElementById('sidebar');
    const backdrop = document.createElement('div');
    backdrop.classList.add('fixed', 'inset-0', 'bg-black', 'bg-opacity-50', 'z-50', 'hidden');
    document.body.appendChild(backdrop);

    document.getElementById('sidebarToggle').addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
        backdrop.classList.toggle('hidden');
    })

    backdrop.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        backdrop.classList.add('hidden');
    })
</script>
</html>
