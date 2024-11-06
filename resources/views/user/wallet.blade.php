<x-user-layout>
    @if(session()->has('success'))
        <div class="max-w-lg mx-auto">
            <div class="bg-success p-3 rounded-xl mb-5 text-center">
                {{ session('success') }}
            </div>
        </div>
    @endif
    <div class="grid grid-cols-1 xl:grid-cols-10 md:grid-cols-2 sm:gap-2 gap-y-2">
        <div class="xl:col-span-4">
            <x-form.form method="POST" action="#" class="text-center w-full p-4 rounded-xl bg-white shadow-md flex flex-col gap-2">
                <p class="">Пополнение баланса</p>
                <x-form.field name="amount" class="">
                    <img class="h-4 w-4 opacity-60" src="{{ Vite::asset('/resources/images/svg/person.svg') }}" alt="key">
                    <x-form.input type="number" name="amount" placeholder="Сумма" required />
                </x-form.field>
                <x-form.button class="btn btn-secondary w-full">Пополнить баланс</x-form.button>
            </x-form.form>
        </div>

        <div class="border border-gray-300 rounded-xl w-full p-3 shadow-md xl:col-span-6 text-center">
            <p>История платежей</p>
            @foreach($payments as $payment)
                <x-mobile.line class="bg-gray-300 h-[1px] my-2" />
                <div class="flex justify-between border-x-2 {{ $payment->type == 'Пополнение' ? 'border-success' : 'border-error' }} px-2">
                    <p class="w-36 text-left"> {{ $payment->created_at->setTimezone('+04:00')->format('d.m.y H:i') }}</p>
                    <div class="flex">
                        <p> {{ $payment->type == 'Пополнение' ? 'Пополение' : 'Списание' }}:</p>
                        <p class="w-14 text-right">  {{ $payment->amount }} ₽</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-user-layout>
