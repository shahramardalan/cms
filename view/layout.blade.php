<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/build/app.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <title>My CMS App</title>
</head>

<body>
    @if(isset($_SESSION['error']))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative max-w-lg m-auto mt-4" role="alert">
        <span class="block sm:inline">{{$_SESSION['error']}}</span>
    </div>

    @endif

    @if(isset($_SESSION['success']))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative max-w-lg m-auto mt-4" role="alert">
        <span class="block sm:inline">{{$_SESSION['success']}}</span>
    </div>

    @endif

    @yield('content')

</body>

</html>