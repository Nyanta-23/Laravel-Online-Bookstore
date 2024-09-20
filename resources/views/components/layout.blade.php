<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="user-id" content="{{ Auth::check() ? Auth::user()->id : false }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="/css/style.css">

    <title>Storebook | {{ $title }}</title>
</head>

<body>

    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <x-navbar />

        <main>
            <x-header>{{ $title }}</x-header>

            <section class="p-4 md:mx-20 h-auto">
                {{ $slot }}
            </section>
        </main>
    </div>

    <script type="text/javascript" src="/js/script.js"></script>
</body>

</html>
