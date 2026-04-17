@props(['label','name','type'])

<div class="space-y-2">
    <label for="{{ $name }}" class="label">{{ $label }}</label>
    <input type="{{ $type }}" class="input" id ="{{ $name }}" name="{{ $name }}" value="{{ old($name) }}" {{ $attributes }}>

    @error($name)
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>