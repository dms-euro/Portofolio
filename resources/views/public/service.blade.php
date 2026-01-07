@extends('public_layout.main')
@section('desktop-content')
    <!-- 1. BACKGROUND FLOATING TECH ICONS -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <!-- Floating Programming Languages & Frameworks -->
        <div class="absolute top-20 left-10 text-4xl text-blue-500/10 animate-float">
            <i class="fab fa-react"></i>
        </div>
        <div class="absolute top-40 right-20 text-5xl text-purple-500/10 animate-float-delay-1">
            <i class="fab fa-laravel"></i>
        </div>
        <div class="absolute top-2/3 left-20 text-6xl text-cyan-500/10 animate-float-delay-2">
            <i class="fab fa-js"></i>
        </div>
        <div class="absolute bottom-40 right-32 text-4xl text-green-500/10 animate-float-delay-3">
            <i class="fab fa-node-js"></i>
        </div>
        <div class="absolute top-1/4 right-1/3 text-5xl text-yellow-500/10 animate-float">
            <i class="fab fa-python"></i>
        </div>
        <div class="absolute bottom-32 left-1/3 text-4xl text-red-500/10 animate-float-delay-1">
            <i class="fab fa-vuejs"></i>
        </div>
        <div class="absolute top-3/4 right-1/4 text-5xl text-indigo-500/10 animate-float-delay-2">
            <i class="fab fa-html5"></i>
        </div>
        <div class="absolute top-1/3 left-1/4 text-6xl text-teal-500/10 animate-float-delay-3">
            <i class="fab fa-css3-alt"></i>
        </div>
        <div class="absolute top-2/4 left-2/3 text-4xl text-pink-500/10 animate-float">
            <i class="fab fa-bootstrap"></i>
        </div>
        <div class="absolute bottom-20 left-10 text-5xl text-orange-500/10 animate-float-delay-2">
            <i class="fas fa-database"></i>
        </div>
        <div class="absolute top-10 right-10 text-4xl text-blue-400/10 animate-float-delay-1">
            <i class="fab fa-git-alt"></i>
        </div>
        <div class="absolute bottom-10 right-10 text-6xl text-purple-400/10 animate-float-delay-3">
            <i class="fab fa-docker"></i>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-6 md:px-12 py-12 space-y-20">

        <!-- 2. HERO SECTION - CONSOLE TYPING EFFECT -->
        <section class="relative">
            <div class="absolute -inset-4 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-3xl blur-xl"></div>

            <div
                class="relative rounded-2xl bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                            border border-gray-800 p-8 overflow-hidden">

                <!-- Console Header -->
                <div class="flex items-center gap-3 mb-6">
                    <div class="flex gap-2">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <div class="text-gray-400 text-sm">uroo-dev-8000</div>
                </div>

                <!-- Console Body (Laravel / PHP Style) -->
                <div class="font-mono text-gray-300 space-y-4">

                    <!-- Command -->
                    <div class="flex items-center">
                        <span class="text-green-400 mr-2">$</span>
                        <span>php artisan serve</span>
                    </div>

                    <!-- Output -->
                    <div class="text-cyan-400">
                        > Laravel development server started...
                    </div>

                    <div class="text-yellow-400">
                        > Server running at <span class="text-white">http://127.0.0.1:8000</span>
                    </div>

                    <!-- Typing Text -->
                    <div class="mt-8">
                        <div class="text-lg">
                            <span class="text-purple-400">Route</span>::<span class="text-yellow-400">get</span>(
                            <span class="text-green-400">'/'</span>,
                            <span class="text-blue-400">function</span> () {
                        </div>

                        <div class="ml-6 text-lg">
                            <span class="text-blue-400">return</span>
                            <span class="text-green-400">'Siap membantu membangun'</span>;
                        </div>

                        <div class="ml-6 mt-4 text-xl font-semibold">
                            <span>
                                <span class="text-blue-300">website company profile</span> /
                                <span class="text-purple-300">web application</span> /
                                <span class="text-cyan-300">REST API</span> /
                                <span class="text-green-300">custom system</span>
                            </span>
                        </div>

                        <div class="mt-4 text-gray-400">
                            // Clean code • Secure • Scalable
                        </div>

                        <div class="text-lg mt-2">
                            <span class="text-blue-400">}</span>;
                        </div>
                    </div>

                    <!-- Hire Status -->
                    <div class="mt-8">
                        <span class="text-green-400 mr-2">$</span>
                        <span class="text-white">$status</span> =
                        <span class="text-yellow-400">'available'</span>;
                    </div>

                </div>

                <!-- Let's Hire Me Section -->
                <div
                    class="mt-12 p-8 rounded-2xl bg-gradient-to-r from-blue-900/30 to-purple-900/30
            border border-blue-500/30 text-center backdrop-blur">

                    <h3
                        class="text-2xl md:text-3xl font-bold mb-4
                bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">
                        Let’s build something meaningful together
                    </h3>

                    <p class="text-gray-400 mb-8 max-w-xl mx-auto leading-relaxed">
                        Aku siap membantu mengubah ide menjadi produk digital yang rapi,
                        fungsional, dan mudah digunakan — dari tahap konsep sampai online.
                    </p>

                    <a href="{{ route('kontak.index') }}"
                        class="inline-flex items-center gap-3 px-9 py-3 rounded-full
                bg-gradient-to-r from-blue-600 to-purple-600
                text-white font-semibold text-lg
                hover:scale-105 transition-all
                hover:shadow-[0_0_40px_rgba(99,102,241,0.5)]">

                        <i class="fa-solid fa-handshake-angle"></i>
                        Hire Me
                    </a>
                </div>

            </div>
        </section>

        <!-- 3. SERVICE CARDS -->
        <!-- 3. SERVICE CARDS -->
        <section>
            <div class="text-center mb-12">
                <h2
                    class="text-4xl font-bold mb-4 bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">
                    Apa Yang Bisa Saya Kerjakan
                </h2>
                <p class="text-gray-400 max-w-3xl mx-auto">
                    Fokus saya adalah membangun aplikasi dan website yang rapi, fungsional, dan mudah digunakan.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                <!-- Card 1 - Web Development -->
                <div class="group relative">
                    <div
                        class="absolute -inset-3 bg-gradient-to-r from-blue-500/20 to-cyan-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <div
                        class="relative rounded-2xl p-8 bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                        border border-gray-800 hover:border-blue-500/50 transition-all duration-500">
                        <div class="flex items-start gap-6">
                            <div
                                class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-600 to-blue-700
                                flex items-center justify-center shadow-lg shadow-blue-500/30">
                                <i class="fas fa-code text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-4 text-white">Web Development</h3>
                                <p class="text-gray-400 mb-6">
                                    Pembuatan website dan aplikasi web menggunakan teknologi yang saya kuasai.
                                </p>
                                <div class="space-y-3">
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check text-green-500 mr-3"></i>
                                        <span>Website PHP & Laravel</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check text-green-500 mr-3"></i>
                                        <span>CRUD & Sistem Admin</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check text-green-500 mr-3"></i>
                                        <span>Website Sekolah / UMKM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 - UI Design -->
                <div class="group relative">
                    <div
                        class="absolute -inset-3 bg-gradient-to-r from-purple-500/20 to-pink-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <div
                        class="relative rounded-2xl p-8 bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                        border border-gray-800 hover:border-purple-500/50 transition-all duration-500">
                        <div class="flex items-start gap-6">
                            <div
                                class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-600 to-pink-700
                                flex items-center justify-center shadow-lg shadow-purple-500/30">
                                <i class="fas fa-paint-brush text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-4 text-white">UI Design</h3>
                                <p class="text-gray-400 mb-6">
                                    Tampilan website yang modern, rapi, dan nyaman dilihat.
                                </p>
                                <div class="space-y-3">
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check text-green-500 mr-3"></i>
                                        <span>Tailwind CSS & Bootstrap</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check text-green-500 mr-3"></i>
                                        <span>Responsive Design</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check text-green-500 mr-3"></i>
                                        <span>Landing Page Sederhana</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 - App System -->
                <div class="group relative">
                    <div
                        class="absolute -inset-3 bg-gradient-to-r from-green-500/20 to-emerald-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <div
                        class="relative rounded-2xl p-8 bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                        border border-gray-800 hover:border-green-500/50 transition-all duration-500">
                        <div class="flex items-start gap-6">
                            <div
                                class="w-16 h-16 rounded-2xl bg-gradient-to-br from-green-600 to-emerald-700
                                flex items-center justify-center shadow-lg shadow-green-500/30">
                                <i class="fas fa-database text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-4 text-white">Sistem Aplikasi</h3>
                                <p class="text-gray-400 mb-6">
                                    Aplikasi berbasis web untuk kebutuhan data dan manajemen.
                                </p>
                                <div class="space-y-3">
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check text-green-500 mr-3"></i>
                                        <span>Aplikasi Kasir</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check text-green-500 mr-3"></i>
                                        <span>Sistem Gudang</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check text-green-500 mr-3"></i>
                                        <span>Sistem Absensi</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 - Support -->
                <div class="group relative">
                    <div
                        class="absolute -inset-3 bg-gradient-to-r from-orange-500/20 to-yellow-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <div
                        class="relative rounded-2xl p-8 bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                        border border-gray-800 hover:border-orange-500/50 transition-all duration-500">
                        <div class="flex items-start gap-6">
                            <div
                                class="w-16 h-16 rounded-2xl bg-gradient-to-br from-orange-600 to-yellow-600
                                flex items-center justify-center shadow-lg shadow-orange-500/30">
                                <i class="fas fa-tools text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-4 text-white">Perbaikan & Update</h3>
                                <p class="text-gray-400 mb-6">
                                    Membantu memperbaiki atau mengembangkan website yang sudah ada.
                                </p>
                                <div class="space-y-3">
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check text-green-500 mr-3"></i>
                                        <span>Bug Fix</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check text-green-500 mr-3"></i>
                                        <span>Tambah Fitur</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check text-green-500 mr-3"></i>
                                        <span>Perapihan Tampilan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 6 - School Project -->
                <div class="group relative">
                    <div
                        class="absolute -inset-3 bg-gradient-to-r from-indigo-500/20 to-purple-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <div
                        class="relative rounded-2xl p-8 bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                        border border-gray-800 hover:border-indigo-500/50 transition-all duration-500">
                        <div class="flex items-start gap-6">
                            <div
                                class="w-16 h-16 rounded-2xl bg-gradient-to-br from-indigo-600 to-purple-700
                        flex items-center justify-center shadow-lg shadow-indigo-500/30">
                                <i class="fas fa-school text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-4 text-white">Project Sekolah</h3>
                                <p class="text-gray-400 mb-6">
                                    Membantu mengerjakan dan mengembangkan project tugas sekolah.
                                </p>
                                <div class="space-y-3">
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check text-green-500 mr-3"></i>
                                        <span>Aplikasi CRUD</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check text-green-500 mr-3"></i>
                                        <span>Laporan & Presentasi</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check text-green-500 mr-3"></i>
                                        <span>Source Code Rapi & Terstruktur</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 5 - Database & Backend -->
                <div class="group relative">
                    <div
                        class="absolute -inset-3 bg-gradient-to-r from-cyan-500/20 to-blue-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <div
                        class="relative rounded-2xl p-8 bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                        border border-gray-800 hover:border-cyan-500/50 transition-all duration-500">
                        <div class="flex items-start gap-6">
                            <div
                                class="w-16 h-16 rounded-2xl bg-gradient-to-br from-cyan-600 to-blue-700
                        flex items-center justify-center shadow-lg shadow-cyan-500/30">
                                <i class="fas fa-server text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-4 text-white">Backend & Database</h3>
                                <p class="text-gray-400 mb-6">
                                    Pengolahan data dan logika aplikasi agar berjalan dengan baik.
                                </p>
                                <div class="space-y-3">
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check text-green-500 mr-3"></i>
                                        <span>MySQL & Relasi Tabel</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check text-green-500 mr-3"></i>
                                        <span>Login & Hak Akses User</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check text-green-500 mr-3"></i>
                                        <span>CRUD & Validasi Data</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection
@section('mobile-content')
    <!-- 1. BACKGROUND FLOATING TECH ICONS -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <!-- Floating Programming Languages & Frameworks -->
        <div class="absolute top-20 left-10 text-4xl text-blue-500/10 animate-float">
            <i class="fab fa-react"></i>
        </div>
        <div class="absolute top-40 right-20 text-5xl text-purple-500/10 animate-float-delay-1">
            <i class="fab fa-laravel"></i>
        </div>
        <div class="absolute top-2/3 left-20 text-6xl text-cyan-500/10 animate-float-delay-2">
            <i class="fab fa-js"></i>
        </div>
        <div class="absolute bottom-40 right-32 text-4xl text-green-500/10 animate-float-delay-3">
            <i class="fab fa-node-js"></i>
        </div>
        <div class="absolute top-1/4 right-1/3 text-5xl text-yellow-500/10 animate-float">
            <i class="fab fa-python"></i>
        </div>
        <div class="absolute bottom-32 left-1/3 text-4xl text-red-500/10 animate-float-delay-1">
            <i class="fab fa-vuejs"></i>
        </div>
        <div class="absolute top-3/4 right-1/4 text-5xl text-indigo-500/10 animate-float-delay-2">
            <i class="fab fa-html5"></i>
        </div>
        <div class="absolute top-1/3 left-1/4 text-6xl text-teal-500/10 animate-float-delay-3">
            <i class="fab fa-css3-alt"></i>
        </div>
        <div class="absolute top-2/4 left-2/3 text-4xl text-pink-500/10 animate-float">
            <i class="fab fa-bootstrap"></i>
        </div>
        <div class="absolute bottom-20 left-10 text-5xl text-orange-500/10 animate-float-delay-2">
            <i class="fas fa-database"></i>
        </div>
        <div class="absolute top-10 right-10 text-4xl text-blue-400/10 animate-float-delay-1">
            <i class="fab fa-git-alt"></i>
        </div>
        <div class="absolute bottom-10 right-10 text-6xl text-purple-400/10 animate-float-delay-3">
            <i class="fab fa-docker"></i>
        </div>
    </div>
    <div class="mb-8">
        <section class="relative">
            <div class="absolute -inset-4 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-3xl blur-xl"></div>

            <div
                class="relative rounded-2xl bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                            border border-gray-800 p-8 overflow-hidden">

                <!-- Console Header -->
                <div class="flex items-center gap-3 mb-6">
                    <div class="flex gap-2">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <div class="text-gray-400 text-sm">uroo-dev-8000</div>
                </div>

                <!-- Console Body (Laravel / PHP Style) -->
                <div class="font-mono text-gray-300 space-y-4">

                    <!-- Command -->
                    <div class="flex items-center">
                        <span class="text-green-400 mr-2">$</span>
                        <span>php artisan serve</span>
                    </div>

                    <!-- Output -->
                    <div class="text-cyan-400">
                        > Laravel development server started...
                    </div>

                    <div class="text-yellow-400">
                        > Server running at <span class="text-white">http://127.0.0.1:8000</span>
                    </div>

                    <!-- Typing Text -->
                    <div class="mt-8">
                        <div class="text-lg">
                            <span class="text-purple-400">Route</span>::<span class="text-yellow-400">get</span>(
                            <span class="text-green-400">'/'</span>,
                            <span class="text-blue-400">function</span> () {
                        </div>

                        <div class="ml-6 text-lg">
                            <span class="text-blue-400">return</span>
                            <span class="text-green-400">'Siap membantu membangun'</span>;
                        </div>

                        <div class="ml-6 mt-4 text-xl font-semibold">
                            <span>
                                <span class="text-blue-300">website company profile</span> /
                                <span class="text-purple-300">web application</span> /
                                <span class="text-cyan-300">REST API</span> /
                                <span class="text-green-300">custom system</span>
                            </span>
                        </div>

                        <div class="mt-4 text-gray-400">
                            // Clean code • Secure • Scalable
                        </div>

                        <div class="text-lg mt-2">
                            <span class="text-blue-400">}</span>;
                        </div>
                    </div>

                    <!-- Hire Status -->
                    <div class="mt-8">
                        <span class="text-green-400 mr-2">$</span>
                        <span class="text-white">$status</span> =
                        <span class="text-yellow-400">'available'</span>;
                    </div>

                </div>

                <!-- Let's Hire Me Section -->
                <div
                    class="mt-12 p-8 rounded-2xl bg-gradient-to-r from-blue-900/30 to-purple-900/30
            border border-blue-500/30 text-center backdrop-blur">

                    <h3
                        class="text-2xl md:text-3xl font-bold mb-4
                bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">
                        Let’s build something meaningful together
                    </h3>

                    <p class="text-gray-400 mb-8 max-w-xl mx-auto leading-relaxed">
                        Aku siap membantu mengubah ide menjadi produk digital yang rapi,
                        fungsional, dan mudah digunakan — dari tahap konsep sampai online.
                    </p>

                    <a href="{{ route('kontak.index') }}"
                        class="inline-flex items-center gap-3 px-9 py-3 rounded-full
                bg-gradient-to-r from-blue-600 to-purple-600
                text-white font-semibold text-lg
                hover:scale-105 transition-all
                hover:shadow-[0_0_40px_rgba(99,102,241,0.5)]">

                        <i class="fa-solid fa-handshake-angle"></i>
                        Hire Me
                    </a>
                </div>

            </div>
        </section>

        <!-- Service Cards Mobile -->
        <section class="space-y-6 mb-10">
            <h2 class="text-2xl font-bold mb-6 text-center text-white">
                Layanan Saya
            </h2>
            <!-- Card 1 - Web Development -->
            <div class="group relative">
                <div
                    class="absolute -inset-3 bg-gradient-to-r from-blue-500/20 to-cyan-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>

                <div
                    class="relative rounded-2xl p-8 bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                        border border-gray-800 hover:border-blue-500/50 transition-all duration-500">
                    <div class="flex items-start gap-6">
                        <div
                            class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-600 to-blue-700
                                flex items-center justify-center shadow-lg shadow-blue-500/30">
                            <i class="fas fa-code text-white text-2xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-4 text-white">Web Development</h3>
                            <p class="text-gray-400 mb-6">
                                Pembuatan website dan aplikasi web menggunakan teknologi yang saya kuasai.
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Website PHP & Laravel</span>
                                </div>
                                <div class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>CRUD & Sistem Admin</span>
                                </div>
                                <div class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Website Sekolah / UMKM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 - UI Design -->
            <div class="group relative">
                <div
                    class="absolute -inset-3 bg-gradient-to-r from-purple-500/20 to-pink-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>

                <div
                    class="relative rounded-2xl p-8 bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                        border border-gray-800 hover:border-purple-500/50 transition-all duration-500">
                    <div class="flex items-start gap-6">
                        <div
                            class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-600 to-pink-700
                                flex items-center justify-center shadow-lg shadow-purple-500/30">
                            <i class="fas fa-paint-brush text-white text-2xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-4 text-white">UI Design</h3>
                            <p class="text-gray-400 mb-6">
                                Tampilan website yang modern, rapi, dan nyaman dilihat.
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Tailwind CSS & Bootstrap</span>
                                </div>
                                <div class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Responsive Design</span>
                                </div>
                                <div class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Landing Page Sederhana</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 - App System -->
            <div class="group relative">
                <div
                    class="absolute -inset-3 bg-gradient-to-r from-green-500/20 to-emerald-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>

                <div
                    class="relative rounded-2xl p-8 bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                        border border-gray-800 hover:border-green-500/50 transition-all duration-500">
                    <div class="flex items-start gap-6">
                        <div
                            class="w-16 h-16 rounded-2xl bg-gradient-to-br from-green-600 to-emerald-700
                                flex items-center justify-center shadow-lg shadow-green-500/30">
                            <i class="fas fa-database text-white text-2xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-4 text-white">Sistem Aplikasi</h3>
                            <p class="text-gray-400 mb-6">
                                Aplikasi berbasis web untuk kebutuhan data dan manajemen.
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Aplikasi Kasir</span>
                                </div>
                                <div class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Sistem Gudang</span>
                                </div>
                                <div class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Sistem Absensi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 - Support -->
            <div class="group relative">
                <div
                    class="absolute -inset-3 bg-gradient-to-r from-orange-500/20 to-yellow-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>

                <div
                    class="relative rounded-2xl p-8 bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                        border border-gray-800 hover:border-orange-500/50 transition-all duration-500">
                    <div class="flex items-start gap-6">
                        <div
                            class="w-16 h-16 rounded-2xl bg-gradient-to-br from-orange-600 to-yellow-600
                                flex items-center justify-center shadow-lg shadow-orange-500/30">
                            <i class="fas fa-tools text-white text-2xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-4 text-white">Perbaikan & Update</h3>
                            <p class="text-gray-400 mb-6">
                                Membantu memperbaiki atau mengembangkan website yang sudah ada.
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Bug Fix</span>
                                </div>
                                <div class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Tambah Fitur</span>
                                </div>
                                <div class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Perapihan Tampilan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6 - School Project -->
            <div class="group relative">
                <div
                    class="absolute -inset-3 bg-gradient-to-r from-indigo-500/20 to-purple-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>

                <div
                    class="relative rounded-2xl p-8 bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                        border border-gray-800 hover:border-indigo-500/50 transition-all duration-500">
                    <div class="flex items-start gap-6">
                        <div
                            class="w-16 h-16 rounded-2xl bg-gradient-to-br from-indigo-600 to-purple-700
                        flex items-center justify-center shadow-lg shadow-indigo-500/30">
                            <i class="fas fa-school text-white text-2xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-4 text-white">Project Sekolah</h3>
                            <p class="text-gray-400 mb-6">
                                Membantu mengerjakan dan mengembangkan project tugas sekolah.
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Aplikasi CRUD</span>
                                </div>
                                <div class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Laporan & Presentasi</span>
                                </div>
                                <div class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Source Code Rapi & Terstruktur</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 5 - Database & Backend -->
            <div class="group relative">
                <div
                    class="absolute -inset-3 bg-gradient-to-r from-cyan-500/20 to-blue-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>

                <div
                    class="relative rounded-2xl p-8 bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                        border border-gray-800 hover:border-cyan-500/50 transition-all duration-500">
                    <div class="flex items-start gap-6">
                        <div
                            class="w-16 h-16 rounded-2xl bg-gradient-to-br from-cyan-600 to-blue-700
                        flex items-center justify-center shadow-lg shadow-cyan-500/30">
                            <i class="fas fa-server text-white text-2xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-4 text-white">Backend & Database</h3>
                            <p class="text-gray-400 mb-6">
                                Pengolahan data dan logika aplikasi agar berjalan dengan baik.
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>MySQL & Relasi Tabel</span>
                                </div>
                                <div class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Login & Hak Akses User</span>
                                </div>
                                <div class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>CRUD & Validasi Data</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action Mobile -->
        <section
            class="rounded-2xl p-6 text-center bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                        border border-gray-800">
            <h3 class="text-xl font-bold mb-4 text-white">
                "Let's build something amazing!"
            </h3>
            <p class="text-gray-400 mb-6">
                Dari konsep hingga implementasi, saya siap membantu.
            </p>
            <button
                class="w-full py-3 rounded-full bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold mb-4">
                <i class="fas fa-rocket mr-2"></i>
                Let's Hire Me
            </button>
            <div class="text-xs text-gray-500">
                <i class="fas fa-bolt mr-1"></i>
                Respons cepat | Garansi revisi | Support 24/7
            </div>
        </section>
    </div>
@endsection
