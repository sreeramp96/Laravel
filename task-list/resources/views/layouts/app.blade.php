<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 Task List App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
        .btn{
        @apply rounded-md px-2 py-1 text-center text-slate-700 font-medium shadow-sm ring-slate-700/10 hover:bg-slate-50,
    }
    .link{
        @apply font-medium text-gray-700 underline decoration-pink-500
    }
    </style>
    {{-- blade-formatter-disable --}}
    @yield('styles')
</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
    <h1 class="mb-4 text-2xl">@yield('title')</h1>
    <div>
        @if (session()->has('success'))
        <div>{{session('success')}}</div>
        @endif
        @yield('content')
    </div>
</body>

</html>