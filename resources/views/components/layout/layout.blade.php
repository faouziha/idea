<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Idea</title>
</head>

<body class="bg-background text-foreground">
    <x-layout.nav />
    <main class="max-w-7xl mx-auto px-6">
        {{ $slot }}
    </main>

    @session('success')
        <div class="fixed bottom-4 right-4 bg-primary text-white px-4 py-3 rounded-lg" x-data="{ show: true }"
            x-init="setTimeout(() => { $nextTick(() => { show = false }) }, 3000)" x-show="show"
            x-transition.opacity.duration.300ms>
            {{ $value }}
        </div>
    @endsession
</body>

</html>
