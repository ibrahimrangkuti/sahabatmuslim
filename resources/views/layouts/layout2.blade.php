<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Al Qur'an Digital - Sahabat Muslim</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="shortcut icon" href="{{ asset('images/logo-sahabatmuslim.png') }}" type="image/x-icon">
</head>

<body>
    @include('components.sidebar')

    @yield('content')

    <script src="{{ asset('js/myscript.js') }}"></script>
</body>

</html>
