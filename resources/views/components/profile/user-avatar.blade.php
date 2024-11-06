@if(Auth::user()->photo)
    <div class="relative inline-flex items-center justify-center w-full h-full overflow-hidden rounded-full">
        <img src="{{ asset('storage/' . Auth::user()->photo) }}"
             class="w-full h-full object-cover rounded-full"
             alt="{{ Auth::user()->name }} {{ Auth::user()->surname }}">
    </div>
@else
    <div
        class="relative inline-flex items-center justify-center w-full h-full overflow-hidden bg-secondary/30 rounded-full">
        <span
            class="font-medium text-gray-600">{{ mb_substr(Auth::user()->name, 0, 1, 'UTF-8') . mb_substr(Auth::user()->surname, 0, 1, 'UTF-8') }}</span>
    </div>
@endif

