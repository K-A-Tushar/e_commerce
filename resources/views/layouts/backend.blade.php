<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/backend.js'])
</head>

<body>
    <div>
        <div class="container bg-info">
            @yield('content')
        </div>
    </div>
    </script>
</body>

</html>
