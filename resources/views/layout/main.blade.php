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
</head>

<body class="bg-slate-950 text-white overflow-x-hidden">
    {{-- desktop view --}}
    <div class="hidden md:flex min-h-screen bg-slate-950">
        @include('layout.sidebar')

        <main class="ml-64 flex-1 p-6">
            @yield('desktop-content')
        </main>
    </div>

    {{-- mobile view --}}
    <div class="md:hidden">
        <main class="p-4 pb-20">
            @yield('mobile-content')
        </main>
        @include('layout.navbar')
    </div>

    <!-- MODAL STORY -->
    <div id="storyModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50
            justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-slate-900">

                <!-- Header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-slate-700">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Story Baru
                    </h3>
                    <button type="button"
                        class="text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8
                    inline-flex justify-center items-center dark:hover:bg-slate-700 dark:hover:text-white"
                        data-modal-hide="storyModal">
                        ✕
                    </button>
                </div>

                <!-- Body -->
                <div class="p-4 space-y-4">
                    <form action="{{ route('admin.cerita.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Judul -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                <i class="fas fa-pen mr-2 text-blue-400"></i>Judul
                            </label>
                            <div class="relative">
                                <input type="text" placeholder="Masukkan nama story" name="judul"
                                    class="w-full px-4 py-3 bg-slate-800/50 border border-gray-700 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                                    id="judul-input">
                                <div class="absolute right-3 top-3">
                                    <i class="fas fa-pencil text-gray-400"></i>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2 mt-2">
                                    <i class="fas fa-camera mr-2 text-blue-400"></i>Gambar
                                </label>
                                <input type="file" name="gambar"
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg
                            cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none
                            dark:bg-slate-800 dark:border-slate-600">
                            </div>
                            <!-- Footer -->
                            <div class="flex items-center p-4 border-t rounded-b dark:border-slate-700">
                                <button type="submit"
                                    class="text-white bg-purple-600 hover:bg-purple-700
                    focus:ring-4 focus:outline-none focus:ring-purple-300
                    font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    Upload
                                </button>

                                <button data-modal-hide="storyModal" type="button"
                                    class="ml-3 text-gray-700 bg-gray-200 hover:bg-gray-300
                    rounded-lg text-sm px-5 py-2.5 dark:bg-slate-700 dark:text-white">
                                    Batal
                                </button>
                            </div>
                    </form>
                </div>

            </div>
        </div>
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
    @stack('scripts')
</body>

</html>
