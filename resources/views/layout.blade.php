<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script defer src="{{ asset('js/script.js') }}"></script>
    <title>Library Management</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen relative bg-[#D4CCC0] font-[Poppins]">
    <nav class="relative flex items-center justify-between px-8 h-16 bg-[#FFE9D0] sm:px-16">
        <h1 class="font-bold sm:text-xl"><a href="/">LibMgmt</a></h1>
        <ul class="hidden absolute flex-col items-center top-16 left-0 py-4 w-full space-y-3 bg-[#FFE9D0] sm:flex sm:relative sm:flex-row sm:space-y-0 sm:top-0 sm:space-x-14 sm:w-fit">
            <li class="font-semibold"><a href="/" class="hover:text-[#C45258]">Home</a></li>
            <li class="font-semibold"><a href="/" class="hover:text-[#C45258]">Books</a></li>
            <li class="font-semibold"><a href="/" class="hover:text-[#C45258]">About</a></li>
            <li class="font-semibold sm:hidden"><a href="/" class="hover:text-[#C45258]">Login</a></li>
        </ul>
        <a href="/" class="hidden items-center sm:flex">
            Login
            <span class="material-symbols-outlined cursor-pointer ml-1">
                login
            </span>
        </a>
        <span class="hamburgermenu material-symbols-outlined cursor-pointer sm:hidden">
            menu
        </span>
    </nav>
    
    @yield('content')

    <footer class="absolute bottom-0 right-0 w-full py-8 px-3">
        <p class="text-xs font-semibold text-center sm:text-base">Copyright &copy; {{ date('Y') }}. All Rights Reserved. By Kishan Magar.</p>
    </footer>
</body>
</html>