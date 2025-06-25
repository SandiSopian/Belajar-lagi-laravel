<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</head>

<body>

    <x-navbar>
    </x-navbar>

    <x-header>
        {{ $title }}
    </x-header>

    <main>
        <div>
            {{ $slot }}
        </div>
    </main>
</body>

</html>