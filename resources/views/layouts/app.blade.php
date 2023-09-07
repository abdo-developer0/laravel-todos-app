<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos App</title>

    @livewireStyles
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <main id="app" class="app">

        @yield('content', 'no content.')
        <script src="{{asset('js/app.js')}}"></script>
    </main>
    @livewireScripts
</body>
</html>
