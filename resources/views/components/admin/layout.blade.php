<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Storebook | Dashboard</title>
</head>

<body>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">

        <x-admin.navbar />
        <x-admin.sidebar />

        <main class="p-2 md:ml-64 h-auto pt-20">
            {{ $slot }}
        </main>

        
    </div>

    
    <script src="/js/script.js"></script>
</body>


</html>
