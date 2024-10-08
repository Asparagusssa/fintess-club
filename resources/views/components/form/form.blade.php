<form {{ $attributes->merge(['class' => 'space-y-4']) }}>
@csrf
    {{ $slot }}
</form>
