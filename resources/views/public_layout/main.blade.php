<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Dimas Euro</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>

<body class="bg-slate-950 text-white overflow-x-hidden">
    {{-- desktop view --}}
    <div class="hidden md:flex min-h-screen bg-slate-950">
        @include('public_layout.sidebar')

        <main class="ml-64 flex-1 p-6">
            @yield('desktop-content')
        </main>
    </div>

    {{-- mobile view --}}
    <div class="md:hidden">
        <main class="p-4 pb-20">
            @yield('mobile-content')
        </main>
        @include('public_layout.navbar')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: false,
            offset: 50,
            mirror: true,
        });
    </script>
    @stack('modals')
    @stack('scripts')
</body>

</html>
