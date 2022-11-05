<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Coach Edwin</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <!-- Styles -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
{{--<body class="bg-slate-800">
    @include('components.header')
    <main class="page-body bg-white container-sm pt-4">
        @yield('content')
    </main>
    @include('components.footer')
</body>--}}
<body>
    <div class="wrapper dark:bg-gray-800">
        @include('components.header')
        <main class="page-body dark:bg-slate-700 bg-gray-50 mt-20 container mx-auto">
        @yield('content')
        </main>
        @include('components.footer')
    </div>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>
