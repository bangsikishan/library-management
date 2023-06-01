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
    <title>Library Management</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#F2E9E4] font-[Poppins]">
    <nav class="flex items-center justify-between px-16 h-14 text-lg border-b border-gray-400">
        <h1 class="font-bold text-xl"><a href="/">LibMgmt</a></h1>
        <ul class="space-x-16">
            <li class="inline-block font-semibold"><a href="/" class="hover:text-[#C45258]">Home</a></li>
            <li class="inline-block font-semibold"><a href="/" class="hover:text-[#C45258]">Blogs</a></li>
            <li class="inline-block font-semibold"><a href="/" class="hover:text-[#C45258]">About</a></li>
        </ul>
        <a href="/">
            <span class="material-symbols-outlined cursor-pointer">
                login
            </span>
        </a>
    </nav>
    
    @yield('content')

    <footer class="mt-32 py-12">
        <p class="font-semibold text-center">Copyright &copy; {{ date('Y') }}. All Rights Reserved. By Kishan Magar.</p>
    </footer>
</body>
</html>