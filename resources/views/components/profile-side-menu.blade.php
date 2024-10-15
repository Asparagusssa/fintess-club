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
