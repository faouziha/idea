@props(['title', 'description'])

<div class="flex min-h-[calc(100dvh-4rem)] items-center justify-center px-4">
    <div class="w-full max-w-md">
        <div class="text-center">
            <h1 class="text-3xl font-bold mb-2">{{ $title }}</h1>
            <p class="text-gray-600 mb-6">{{ $description }}</p>

            {{ $slot }}
        </div>
    </div>
</div>
