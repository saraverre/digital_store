<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Digital Store</title>
</head>

<body class="bg-light">

    {{ $slot }}


    <script src="{{ asset('js/app.js') }}"></script>


</body>

</html>
