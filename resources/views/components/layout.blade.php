<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class=" bg-black text-white font-hanken">

    <div class="px-10">
        <nav class=" flex flex-row justify-between py-4 border-b border-white/10">
            <div>
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
            </div>

            <div class=" space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            @auth

                <div class="font-bold">
                    <button form="logout" class="mr-4">Logout</button>
                    <a href="{{ route('create') }}">Post a job</a>
                </div>
            @endauth

            @guest
                <div>
                    <a href="{{ route('register') }}">Register</a>
                    <a href="{{ route('login') }}">Login</a>
                </div>
            @endguest
        </nav>

        <form action="{{ route('logout') }}" id="logout" method="POST">
            @csrf
            @method('DELETE')
        </form>
        <main class="mt-10 max-w-[986px] mx-auto">{{ $slot }}</main>

    </div>

</body>

</html>
