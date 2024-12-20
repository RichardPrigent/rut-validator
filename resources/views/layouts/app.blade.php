<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar RUN Chile</title>
    @vite('resources/css/app.css')
    @livewireStyles
    <link href="https://fonts.googleapis.com/css2?family=Arciform&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-50">
    @livewire('header')
    @yield('content')
    @livewire('footer')
    @livewireScripts
    @vite('resources/js/app.js')
</body>

</html>
