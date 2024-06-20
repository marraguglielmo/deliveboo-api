<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css'
        integrity='sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=='
        crossorigin='anonymous' />

    @vite(['resources/js/app.js'])

    <title>Layout Admin</title>
</head>

<body>
    @include('admin.partials.header')

    <main class="main-wrapper d-flex">

        @include('admin.partials.aside')

        <div class="overflow-y-auto flex-grow-1 m-4">
            @yield('content')
        </div>


    </main>
</body>

</html>
