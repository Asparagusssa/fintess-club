<x-user-layout>
        <x-form.form method="POST" action="{{ route('user.reset-password') }}" class="w-full md:max-w-lg text-center p-4 rounded-xl bg-white shadow-2xl">
            <p class="mb-4">Сброс пароля</p>
            <x-form.field name="password" class="mb-4">
                <img class="h-4 w-4 opacity-60" src="{{ Vite::asset('/resources/images/svg/key.svg') }}" alt="password">
                <x-form.input type="password" name="password" placeholder="Текущий пароль" required />
            </x-form.field>
            <x-form.field name="new-password" class="mb-4">
                <img class="h-4 w-4 opacity-60" src="{{ Vite::asset('/resources/images/svg/key.svg') }}" alt="new-password">
                <x-form.input type="password" name="new-password" placeholder="Новый пароль" required />
            </x-form.field>

            <x-form.button class="btn btn-secondary w-full">Сменить пароль</x-form.button>
        </x-form.form>
</x-user-layout>
