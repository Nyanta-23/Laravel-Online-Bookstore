<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Storebook | {{ $title }}</title>
</head>

<body>

    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <x-navbar />
        {{-- <x-sidebar /> --}}
        <main>
            <x-header>{{ $title }}</x-header>

            {{-- <main class="p-4 md:ml-64 h-auto pt-20"> --}}
            <section class="p-4 md:mx-20 h-auto">
                {{ $slot }}
            </section>
        </main>
    </div>

    <script src="/js/script.js"></script>
</body>

</html>
