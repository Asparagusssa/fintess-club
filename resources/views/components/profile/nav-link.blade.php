<li>
    <a class="flex items-center gap-x-3.5 py-2 px-2.5  text-sm text-gray-800 rounded-lg hover:bg-gray-100 {{ request()->is(substr($attributes->get('href'), 22)) ? 'bg-gray-100' : '' }}" {{ $attributes }}>
        {{ $slot }}
    </a>
</li>
