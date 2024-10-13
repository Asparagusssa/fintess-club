    <a {{ $attributes->merge(['class' => request()->is(substr($attributes->get('href'), 1)) ? 'bg-black/20 py-4 rounded-xl' : 'py-4 rounded-xl hover:bg-black/10']) }}>
        {{ $slot }}
    </a>
    <x-mobile.line class="bg-white h-[2px]" />
