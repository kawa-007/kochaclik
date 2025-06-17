<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <title>Guest Layout</title>
</head>
<body>
    {{ $slot }}
</body>
</html>
