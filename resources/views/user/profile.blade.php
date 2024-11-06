<x-user-layout class="grid grid-cols-1 sm:grid-cols-2 gap-2">
    <div class=" rounded-xl w-full p-3 bg-white shadow-md">
        <p>Имя: {{ Auth::user()->name }}</p>
        <p>Фамилия: {{ Auth::user()->surname }}</p>
        <p>Email: {{ Auth::user()->email }}</p>
        <p>Пол: {{ Auth::user()->sex == 'male' ? 'Мужской' : 'Женский' }}</p>

        <x-form.form method="POST" action="{{ route('user.add-photo') }}" enctype="multipart/form-data" class="my-5">
            <p class="mb-2">{{ Auth::user()->photo ? 'Изменить фото профиля' : 'Добавить фото профиля' }}:</p>
            <div class="flex flex-col items-center justify-between 2xl:space-x-2 w-full 2xl:flex-row">
                <x-form.input type="file" name="photo" id="photo" class="file-input file-input-secondary file:text-white w-full 2xl:w-fit mb-1"/>
                <x-form.button class="btn btn-secondary w-full 2xl:w-fit text-[1rem]">
                    {{ Auth::user()->photo ? 'Изменить' : 'Добавить' }}
                </x-form.button>
            </div>
            @error('photo')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </x-form.form>

        <a class="link link-primary" href="{{ route('user.reset-password') }}">Изменить пароль</a>
    </div>

    <div class="border border-gray-300 rounded-xl w-full p-3">
        <p>Текущий абонемент: {{ Auth::user()->ActiveSubscriptions->first()->name ?? 'Без абонемента' }}</p>
    </div>

</x-user-layout>
