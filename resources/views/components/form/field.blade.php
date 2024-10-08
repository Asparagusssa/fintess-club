@props(['name' => ''])
<div>
    <label class="input focus:outline-secondary focus-within:outline-secondary input-bordered bg-white flex items-center gap-2">
        {{ $slot }}
    </label>
    @error($name)
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>
