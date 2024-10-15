<div {{ $attributes->merge(['class' => request()->is(substr($attributes->get('href'), 22)) ? 'border-b-2 border-primary' : 'border-b-2 border-transparent hover:border-primary/70 transition duration-200' ]) }}>
    <a {{ $attributes }}>
        {{ $slot }}
    </a>
</div>
