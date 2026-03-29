@props(['label', 'name', 'type' => 'text'])

<div class="mb-4">
    <label for="{{ $name }}" class="block text-sm font-medium mb-1">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name) }}" required {{ $attributes }}
        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-indigo-200">

    @error($name)
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>
