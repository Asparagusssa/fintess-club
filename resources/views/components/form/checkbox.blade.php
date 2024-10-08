@props(['id'])

<label class="bg-white flex items-center gap-2">
    <input type="checkbox" class="checkbox checkbox-secondary" name="remember" id="{{ $id }}">
    <label for="{{ $id }}" class="text-text select-none">Запомнить меня</label>
</label>
