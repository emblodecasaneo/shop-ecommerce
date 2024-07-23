<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title inertia> {{ config('app.name', 'Laravel')}}</title>
    @vite('resources/js/app.js') @inertiaHead
</head>
<body class="bg-gray-100 font-sans text-center">
    @inertia
</body>
</html>
