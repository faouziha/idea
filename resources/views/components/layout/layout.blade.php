<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    <title>Idea</title>
</head>

<body class="bg-background text-foreground">
    <x-layout.nav />
    <main class="max-w-7xl mx-auto px-6">
        {{ $slot }}
    </main>
</body>

</html>
