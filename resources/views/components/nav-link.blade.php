<div {{ $attributes->merge(['class' => request()->is(substr($attributes->get('href'), 1)) ? 'border-b-2 border-primary' : 'border-b-2 border-transparent' ]) }}>
    <a {{ $attributes }}>
        {{ $slot }}
    </a>
</div>
