<div class="xl:w-[300px] hidden md:block  flex-grow xl:grow-0">
    <div class="dropdown flex items-center justify-end group">
{{--        <div id="dropdownMenu" tabindex="0" class="text-lg cursor-pointer flex items-center transition duration-500 {{ request()->routeIs('home') ? 'text-base-100' : 'text-black' }} border p-2 my-[-5px] rounded-xl shadow space-x-1 ">--}}
{{--            <p>Личный кабинет</p>--}}
{{--            <img class="h-4 w-4 transition duration-300 group-focus:transform group-focus:rotate-180 group-focus-within:transform group-focus-within:rotate-180" src="{{ Vite::asset('/resources/images/svg/dropdown.svg') }}"--}}
{{--                 alt="dropdown">--}}
{{--        </div>--}}
        <div id="dropdownMenu" class="flex items-center gap-x-3">

        </div>
        <div id="dropdownMenu" tabindex="0" class="flex items-center gap-x-3 cursor-pointer p-1 my-[-15px]">
            <div class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full">
                <span class="font-medium text-gray-600">
                    <div class="h-10 w-10">
                        <x-profile.user-avatar/>
                    </div>
                </span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-gray-400">
                <path  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" />
            </svg>
        </div>
        <ul tabindex="0"
            class="dropdown-content menu bg-white border-2 rounded-box z-[1] w-72 p-2 shadow top-10">
            <li class="flex flex-row items-center space-x-2 w-[16.7rem]">
                <a href="/user" class="p-2 max-w-[16.7rem]">
                    <div class="w-12 h-12 p-0">
                        <x-profile.user-avatar/>
                    </div>
                    <div>
                        <p title="{{ Auth::user()->name }} {{ Auth::user()->surname }}"
                           class="truncate w-[12.5rem]">{{ Auth::user()->name}} {{ Auth::user()->surname }}</p>
                        <p title="{{ Auth::user()->email }}"
                           class="text-black/50 truncate w-[12.5rem]">{{ Auth::user()->email }}</p>
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
                <x-form.form action="{{ route('logout') }}" method="POST" class="w-full flex justify-center p-0">
                    <button type="submit" class="w-full text-start px-4 py-2">Выход</button>
                </x-form.form>
            </li>
        </ul>
    </div>
</div>
