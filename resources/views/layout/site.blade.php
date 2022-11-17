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
    <script src="https://kit.fontawesome.com/a7a49a6bd8.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div class="wrapper z-10 h-fit w-full " style=" background: rgb(255,255,255);
background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(209,209,209,0.9780112728685224) 30%, rgba(93,166,94,0.9) 60%, rgba(35,134,36,0.8) 100%);             ">
        <video id="background-video" class="h-screen w-screen object-cover   fixed inset-0 -z-50" autoplay loop muted poster="{{ Vite::asset('resources/media/video.mp4') }}">
            <source src="{{ Vite::asset('resources/media/video.mp4') }}" type="video/mp4">
        </video>
        @include('components.header')
        <main class="page-body" id="top">
            @yield('content')
        </main>
        @include('components.footer')
    </div>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

</body>
