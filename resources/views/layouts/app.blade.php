<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sahabat Muslim</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen">
    <main class="flex-grow">
        @include('components.navbar')
        @yield('content')
    </main>

    @include('components.footer')

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        // Typed JS
        var typed = new Typed(".typed", {
            strings: ["doa harian", "hadist pilihan", "inspirasi Islami"],
            typeSpeed: 100,
        });
    </script>
</body>

</html>
