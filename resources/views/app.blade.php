<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    <div class="container bg-blue-500 text-white text-center py-2">
        <header>
        Top Section
        </header>

    </div>
    <div class="container max-w-7xl mx-auto min-h-screen">
        <div class="flex flex-col">

            <div class="flex flex-col md:flex-row pt-6">
                <div class="w-full md:w-1/4 bg-blue-500 text-white text-center py-4">
                    @inertia
                </div>
                <div class="w-full md:w-3/4 bg-gray-200 text-center py-4">
                    Right Column
                </div>
            </div>
        </div>
    </div>
    <div class="bg-blue-500 text-white text-center mt-4 py-2">
        <footer >
        footer
        </footer>

    </div>

</body>

</html>
