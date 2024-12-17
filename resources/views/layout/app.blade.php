<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="px-5 lg:container mx-auto py-10">
    @include('components.navbar')
    <div class="container mx-auto">
        @yield('content')
    </div>
</body>
</html>