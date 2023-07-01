<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title }} | Rad</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.0-dist/css/bootstrap.min.css') }}">
    {{-- {{$styles}} --}}
</head>
<body>
    <x-navbar></x-navbar>
    <div class="container pt-4">
        {{$slot}}
    </div>
    <script src="{{ asset('bootstrap-5.3.0-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap-5.3.0-dist/js/bootstrap.bundle.js') }}"></script>
</body>
</html>