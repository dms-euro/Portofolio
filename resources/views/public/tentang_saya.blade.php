@extends('public_layout.main')
@section('desktop-content')
    <div class="max-w-7xl mx-auto px-6 md:px-12 py-12 space-y-32">
        <!-- ================= PROFILE ================= -->
        <div class="grid md:grid-cols-2 gap-16 items-center" data-aos="fade-up">

            <!-- FOTO CARD - Enhanced -->
            <div class="relative group mx-auto">
                <!-- Outer Glow Ring -->
                <div
                    class="absolute -inset-4 rounded-[3rem] bg-gradient-to-r from-blue-500/30 via-purple-500/30 to-cyan-500/30 blur-xl animate-pulse">
                </div>

                <!-- Main Card -->
                <div
                    class="glass-card w-[320px] h-[440px] relative rounded-[2.5rem]
                        bg-gradient-to-br from-white/15 to-white/5 backdrop-blur-2xl
                        border border-white/30 shadow-2xl
                        shadow-blue-500/10 overflow-hidden
                        transition-all duration-700 group-hover:scale-[1.02]
                        group-hover:shadow-blue-500/20
                        animate-[floating_6s_ease-in-out_infinite]">

                    <!-- Shine Effect -->
                    <div class="absolute inset-0 pointer-events-none">
                        <div
                            class="absolute top-0 left-0 w-1/2 h-full bg-gradient-to-r from-transparent via-white/30 to-transparent opacity-60 animate-[shine_4s_linear_infinite]">
                        </div>
                    </div>

                    <!-- Inner Photo Container -->
                    <div class="absolute inset-4 rounded-[2rem] overflow-hidden">
                        <img src="{{ asset('img/Dimas.jpg') }}"
                            class="w-full h-full object-cover scale-110 group-hover:scale-125 transition-transform duration-700" />
                    </div>

                    <!-- Decorative Corner Elements -->
                    <div
                        class="absolute top-0 left-0 w-16 h-16 border-t-2 border-l-2 border-blue-400/50 rounded-tl-[2.5rem]">
                    </div>
                    <div
                        class="absolute bottom-0 right-0 w-16 h-16 border-b-2 border-r-2 border-purple-400/50 rounded-br-[2.5rem]">
                    </div>
                </div>
            </div>

            <!-- INFO CARD - Enhanced -->
            <div class="relative group">
                <!-- Background Glow -->
                <div
                    class="absolute -inset-3 rounded-3xl bg-gradient-to-r from-blue-500/20 to-purple-500/20 blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>

                <div
                    class="glass-card rounded-3xl p-10 relative
                        bg-gradient-to-br from-white/12 to-white/6 backdrop-blur-2xl
                        border border-white/25 shadow-xl
                        transition-all duration-500 group-hover:border-white/40
                        group-hover:shadow-2xl">

                    <!-- Corner Accents -->
                    <div class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-cyan-400/50 rounded-tl-3xl">
                    </div>
                    <div class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-blue-400/50 rounded-br-3xl">
                    </div>

                    <h1 class="text-5xl font-bold mb-4 tracking-tight">
                        <span class="text-stroke">Dimas</span>
                        <span
                            class="bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent animate-[floating_4s_ease-in-out_infinite] inline-block">Euro</span>
                    </h1>

                    <div class="text-2xl text-gray-300 mb-2 font-light">
                        <i class="fas fa-star text-yellow-400 mr-2"></i>
                        Web Developer
                    </div>

                    <p class="text-gray-400 mb-10 leading-relaxed text-lg">
                        Hai☺️ Saya adalah seorang web developer yang menikmati proses mengubah ide menjadi
                        <span class="text-blue-300 font-medium">website yang hidup</span>.
                        Fokusku bukan cuma pada teknologi, tapi juga pada
                        <span class="text-purple-300 font-medium">pengalaman pengguna</span>
                        agar setiap halaman terasa nyaman, cepat, dan enak dilihat.
                    </p>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 mb-10">
                        <div class="text-center">
                            <div
                                class="text-3xl font-bold bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">
                                {{ date('Y') - 2023 }}+
                            </div>
                            <div class="text-sm text-gray-400 mt-1">Tahun</div>
                        </div>

                        <div class="text-center">
                            <div
                                class="text-3xl font-bold bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
                                50+</div>
                            <div class="text-sm text-gray-400 mt-1">Proyek</div>
                        </div>
                        <div class="text-center">
                            <div
                                class="text-3xl font-bold bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent">
                                24/7
                            </div>
                            <div class="text-sm text-gray-400 mt-1">Belajar & Berkembang</div>
                        </div>

                    </div>
                    <!-- BADGES - Personal & Skill Based -->
                    <div class="flex flex-wrap gap-3">

                        <!-- Badge 1: Web Development -->
                        <span
                            class="px-5 py-3 rounded-full bg-gradient-to-r from-blue-500/20 to-blue-600/20
                    backdrop-blur border border-blue-400/30 text-sm flex items-center gap-3
                    hover:from-blue-500/30 hover:to-blue-600/30 hover:border-blue-400/50
                    hover:scale-105 transition-all duration-300 group/badge">
                            <i
                                class="fa-solid fa-code text-blue-400 text-lg group-hover/badge:rotate-12 transition-transform"></i>
                            <span>Web Developer (Laravel & PHP)</span>
                        </span>

                        <!-- Badge 2: UI & Learning -->
                        <span
                            class="px-5 py-3 rounded-full bg-gradient-to-r from-purple-500/20 to-pink-600/20
                    backdrop-blur border border-purple-400/30 text-sm flex items-center gap-3
                    hover:from-purple-500/30 hover:to-pink-600/30 hover:border-purple-400/50
                    hover:scale-105 transition-all duration-300 group/badge">
                            <i
                                class="fa-solid fa-laptop-code text-purple-400 text-lg group-hover/badge:rotate-12 transition-transform"></i>
                            <span>Learning Modern Web</span>
                        </span>

                        <!-- Badge 3: Coffee -->
                        <span
                            class="px-5 py-3 rounded-full bg-gradient-to-r from-amber-500/20 to-orange-600/20
                        backdrop-blur border border-amber-400/30 text-sm flex items-center gap-3
                        hover:from-amber-500/30 hover:to-orange-600/30 hover:border-amber-400/50
                        hover:scale-105 transition-all duration-300 group/badge">
                            <i
                                class="fa-solid fa-mug-hot text-amber-400 text-lg group-hover/badge:rotate-12 transition-transform"></i>
                            <span>Like Americano</span>
                        </span>

                        <!-- Badge 4: Study -->
                        <span
                            class="px-5 py-3 rounded-full bg-gradient-to-r from-emerald-500/20 to-green-600/20
                    backdrop-blur border border-emerald-400/30 text-sm flex items-center gap-3
                    hover:from-emerald-500/30 hover:to-green-600/30 hover:border-emerald-400/50
                    hover:scale-105 transition-all duration-300 group/badge">
                            <i
                                class="fa-solid fa-book-open text-emerald-400 text-lg group-hover/badge:rotate-12 transition-transform"></i>
                            <span>Always Study</span>
                        </span>

                    </div>

                </div>
            </div>
        </div>

        <!-- ================= TECH STACK ================= -->
        <div class="relative mb-8" data-aos="fade-up" data-aos-delay="200">

            <!-- Header -->
            <div class="flex justify-center mb-12">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">
                    <i class="fas fa-layer-group mr-3"></i>Tech Stack
                </h2>
            </div>

            <div
                class="relative overflow-hidden rounded-3xl p-10
    bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-2xl
    border border-white/20">

                <!-- ================= ROW 1 ================= -->
                <div class="overflow-hidden group mb-12">
                    <div class="flex w-[200%] animate-marquee group-hover:[animation-play-state:paused]">

                        <!-- SET A -->
                        <div class="flex w-1/2 justify-around items-center text-6xl">
                            <i class="fa-brands fa-html5 text-orange-500"></i>
                            <i class="fa-brands fa-css3-alt text-blue-500"></i>
                            <i class="fa-brands fa-js text-yellow-400"></i>
                            <i class="fa-brands fa-php text-indigo-400"></i>
                            <i class="fa-solid fa-database text-sky-400"></i>
                            <i class="fa-solid fa-hashtag text-purple-400"></i> <!-- C# -->
                        </div>

                        <!-- SET B -->
                        <div class="flex w-1/2 justify-around items-center text-6xl">
                            <i class="fa-brands fa-html5 text-orange-500"></i>
                            <i class="fa-brands fa-css3-alt text-blue-500"></i>
                            <i class="fa-brands fa-js text-yellow-400"></i>
                            <i class="fa-brands fa-php text-indigo-400"></i>
                            <i class="fa-solid fa-database text-sky-400"></i>
                            <i class="fa-solid fa-hashtag text-purple-400"></i>
                        </div>

                    </div>
                </div>


                <!-- ================= ROW 2 ================= -->
                <div class="overflow-hidden group">
                    <div class="flex w-[200%] animate-marqueeReverse group-hover:[animation-play-state:paused]">

                        <!-- SET A -->
                        <div class="flex w-1/2 justify-around items-center text-6xl">
                            <i class="fa-brands fa-bootstrap text-purple-500"></i>
                            <i class="bx bxl-tailwind-css text-cyan-400"></i>
                            <i class="fa-brands fa-laravel text-red-500"></i>
                            <i class="fa-solid fa-fire text-orange-500"></i> <!-- REST API -->
                            <i class="bx bxl-flutter text-sky-400"></i>
                            <i class="fa-brands fa-github"></i>
                        </div>

                        <!-- SET B -->
                        <div class="flex w-1/2 justify-around items-center text-6xl">
                            <i class="fa-brands fa-bootstrap text-purple-500"></i>
                            <i class="bx bxl-tailwind-css text-cyan-400"></i>
                            <i class="fa-brands fa-laravel text-red-500"></i>
                            <i class="fa-solid fa-fire text-orange-500"></i>
                            <i class="bx bxl-flutter text-sky-400"></i>
                            <i class="fa-brands fa-github"></i>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ================= CERTIFICATE ================= -->
            <div class="mt-6 relative" data-aos="fade-up" data-aos-delay="300">
                <!-- Section Header -->
                <div class="flex items-center justify-center mb-12">
                    <div class="relative">
                        <div
                            class="absolute -inset-4 bg-gradient-to-r from-purple-500/20 to-pink-500/20 blur-xl rounded-full">
                        </div>
                        <h2
                            class="text-3xl font-bold relative bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
                            <i class="fas fa-award mr-3"></i>
                            Sertifikat & Penghargaan
                        </h2>
                    </div>
                </div>

                <div
                    class="glass-card rounded-3xl p-10 relative
                    bg-gradient-to-br from-white/12 to-white/6 backdrop-blur-2xl
                    border border-white/25 shadow-xl">

                    <div class="grid md:grid-cols-3 gap-8">

                        @foreach ($sertifikat as $s)
                            <div class="relative group cursor-pointer h-full" data-modal-target="certModal"
                                data-modal-toggle="certModal">

                                <!-- Glow Effect -->
                                <div
                                    class="pointer-events-none absolute -inset-3
                                    bg-gradient-to-r from-blue-500/30 to-cyan-500/30
                                    rounded-3xl blur-2xl
                                    opacity-0 group-hover:opacity-100
                                    transition-opacity duration-500">
                                </div>

                                <!-- Card -->
                                <div
                                    class="relative h-full rounded-2xl overflow-hidden
                                    border border-white/20
                                    bg-slate-900
                                    group-hover:border-white/50
                                    transition-all duration-500
                                    group-hover:shadow-[0_0_50px_rgba(59,130,246,0.4)]">

                                    <!-- Image -->
                                    <img src="{{ asset('storage/' . $s->sertifikat) }}" alt="{{ $s->judul_sertifikat }}"
                                        class="w-full h-64 object-cover
                            group-hover:scale-110
                            transition-transform duration-700" />

                                    <!-- Overlay -->
                                    <div
                                        class="absolute inset-0
                                        bg-gradient-to-t from-black/90 via-black/30 to-transparent
                                        opacity-0 group-hover:opacity-100
                                        transition-opacity duration-500">

                                        <div class="absolute bottom-0 p-6 w-full">
                                            <h3 class="text-lg font-semibold text-white mb-1">
                                                {{ $s->judul_sertifikat }}
                                            </h3>

                                            <p class="text-sm text-gray-300 line-clamp-2">
                                                {{ $s->deskripsi_sertifikat }}
                                            </p>

                                            <div class="text-xs text-gray-400 mt-3 flex items-center gap-2">
                                                <i class="fas fa-calendar"></i>
                                                {{ $s->tanggal_sertifikat }}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('mobile-content')
        <div class="mb-8">
            <!-- PROFILE SECTION MOBILE -->
            <div class="mb-8" data-aos="fade-up">
                <!-- Photo Card Mobile -->
                <div class="relative group mx-auto mb-6 max-w-xs">
                    <div
                        class="absolute -inset-3 rounded-[2rem] bg-gradient-to-r from-blue-500/30 to-purple-500/30 blur-lg">
                    </div>

                    <div
                        class="relative rounded-2xl overflow-hidden border-2 border-white/20
                    bg-gradient-to-br from-white/15 to-white/5 backdrop-blur-xl">
                        <img src="{{ asset('img/Dimas.jpg') }}" class="w-full h-80 object-cover" />

                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                </div>

                <!-- INFO CARD - Enhanced -->
                <div class="relative group">
                    <!-- Background Glow -->
                    <div
                        class="absolute -inset-3 rounded-3xl bg-gradient-to-r from-blue-500/20 to-purple-500/20 blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <div
                        class="glass-card rounded-3xl p-10 relative
                        bg-gradient-to-br from-white/12 to-white/6 backdrop-blur-2xl
                        border border-white/25 shadow-xl
                        transition-all duration-500 group-hover:border-white/40
                        group-hover:shadow-2xl">

                        <!-- Corner Accents -->
                        <div class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-cyan-400/50 rounded-tl-3xl">
                        </div>
                        <div
                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-blue-400/50 rounded-br-3xl">
                        </div>

                        <h1 class="text-5xl font-bold mb-4 tracking-tight">
                            <span class="text-stroke">Dimas</span>
                            <span
                                class="bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent animate-[floating_4s_ease-in-out_infinite] inline-block">Euro</span>
                        </h1>

                        <div class="text-2xl text-gray-300 mb-2 font-light">
                            <i class="fas fa-star text-yellow-400 mr-2"></i>
                            Web Developer
                        </div>

                        <p class="text-gray-400 mb-10 leading-relaxed text-lg">
                            Hai☺️ Saya adalah seorang web developer yang menikmati proses mengubah ide menjadi
                            <span class="text-blue-300 font-medium">website yang hidup</span>.
                            Fokusku bukan cuma pada teknologi, tapi juga pada
                            <span class="text-purple-300 font-medium">pengalaman pengguna</span>
                            agar setiap halaman terasa nyaman, cepat, dan enak dilihat.
                        </p>

                        <!-- Stats -->
                        <div class="grid grid-cols-3 gap-6 mb-10">
                            <div class="text-center">
                                <div
                                    class="text-3xl font-bold bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">
                                    {{ date('Y') - 2023 }}+
                                </div>
                                <div class="text-sm text-gray-400 mt-1">Tahun</div>
                            </div>

                            <div class="text-center">
                                <div
                                    class="text-3xl font-bold bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
                                    50+</div>
                                <div class="text-sm text-gray-400 mt-1">Proyek</div>
                            </div>
                            <div class="text-center">
                                <div
                                    class="text-3xl font-bold bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent">
                                    24/7
                                </div>
                                <div class="text-sm text-gray-400 mt-1">Belajar & Berkembang</div>
                            </div>

                        </div>
                        <!-- BADGES - Personal & Skill Based -->
                        <div class="flex flex-wrap gap-3">

                            <!-- Badge 1: Web Development -->
                            <span
                                class="px-5 py-3 rounded-full bg-gradient-to-r from-blue-500/20 to-blue-600/20
                    backdrop-blur border border-blue-400/30 text-sm flex items-center gap-3
                    hover:from-blue-500/30 hover:to-blue-600/30 hover:border-blue-400/50
                    hover:scale-105 transition-all duration-300 group/badge">
                                <i
                                    class="fa-solid fa-code text-blue-400 text-lg group-hover/badge:rotate-12 transition-transform"></i>
                                <span>Web Developer (Laravel & PHP)</span>
                            </span>

                            <!-- Badge 2: UI & Learning -->
                            <span
                                class="px-5 py-3 rounded-full bg-gradient-to-r from-purple-500/20 to-pink-600/20
                    backdrop-blur border border-purple-400/30 text-sm flex items-center gap-3
                    hover:from-purple-500/30 hover:to-pink-600/30 hover:border-purple-400/50
                    hover:scale-105 transition-all duration-300 group/badge">
                                <i
                                    class="fa-solid fa-laptop-code text-purple-400 text-lg group-hover/badge:rotate-12 transition-transform"></i>
                                <span>Learning Modern Web</span>
                            </span>

                            <!-- Badge 3: Coffee -->
                            <span
                                class="px-5 py-3 rounded-full bg-gradient-to-r from-amber-500/20 to-orange-600/20
                        backdrop-blur border border-amber-400/30 text-sm flex items-center gap-3
                        hover:from-amber-500/30 hover:to-orange-600/30 hover:border-amber-400/50
                        hover:scale-105 transition-all duration-300 group/badge">
                                <i
                                    class="fa-solid fa-mug-hot text-amber-400 text-lg group-hover/badge:rotate-12 transition-transform"></i>
                                <span>Like Americano</span>
                            </span>

                            <!-- Badge 4: Study -->
                            <span
                                class="px-5 py-3 rounded-full bg-gradient-to-r from-emerald-500/20 to-green-600/20
                    backdrop-blur border border-emerald-400/30 text-sm flex items-center gap-3
                    hover:from-emerald-500/30 hover:to-green-600/30 hover:border-emerald-400/50
                    hover:scale-105 transition-all duration-300 group/badge">
                                <i
                                    class="fa-solid fa-book-open text-emerald-400 text-lg group-hover/badge:rotate-12 transition-transform"></i>
                                <span>Always Study</span>
                            </span>

                        </div>

                    </div>
                </div>
            </div>

            <!-- TECH STACK MOBILE -->
            <div class="mb-8" data-aos="fade-up" data-aos-delay="100">
                <h2 class="text-xl font-bold mb-6 text-center">
                    <i class="fas fa-layer-group mr-2 text-blue-400"></i>
                    Tech Stack
                </h2>

                <div
                    class="rounded-2xl p-6 bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-xl border border-white/20">

                    <!-- MARQUEE MOBILE (TANPA JEDA) -->
                    <div class="overflow-hidden group">
                        <div class="flex w-[200%] animate-marquee group-hover:[animation-play-state:paused]">

                            <!-- SET A -->
                            <div class="flex w-1/2 justify-around items-center text-6xl">
                                <i class="fa-solid fa-database text-sky-400"></i> <!-- C# -->
                                <i class="fa-brands fa-bootstrap text-purple-500"></i>
                                <i class="bx bxl-tailwind-css text-cyan-400"></i>
                                <i class="fa-brands fa-laravel text-red-500"></i>
                                <i class="fa-solid fa-fire text-orange-500"></i> <!-- REST API -->
                                <i class="bx bxl-flutter text-sky-400"></i>
                                <i class="fa-brands fa-github"></i>
                            </div>

                            <!-- SET B -->
                            <div class="flex w-1/2 justify-around items-center text-6xl">
                                <i class="fa-solid fa-database text-sky-400"></i>
                                <i class="fa-brands fa-bootstrap text-purple-500"></i>
                                <i class="bx bxl-tailwind-css text-cyan-400"></i>
                                <i class="fa-brands fa-laravel text-red-500"></i>
                                <i class="fa-solid fa-fire text-orange-500"></i> <!-- REST API -->
                                <i class="bx bxl-flutter text-sky-400"></i>
                                <i class="fa-brands fa-github"></i>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- CERTIFICATE MOBILE -->
            <div data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-xl font-bold mb-6 text-center">
                    <i class="fas fa-award mr-2 text-purple-400"></i>
                    Sertifikat
                </h2>

                <div
                    class="rounded-2xl p-6 bg-gradient-to-br from-white/12 to-white/6 backdrop-blur-xl border border-white/25">
                    <div class="space-y-4">
                        @foreach ($sertifikat as $s)
                            <div class="relative group cursor-pointer h-full" data-modal-target="certModal"
                                data-modal-toggle="certModal">

                                <!-- Glow Effect -->
                                <div
                                    class="pointer-events-none absolute -inset-3
                                    bg-gradient-to-r from-blue-500/30 to-cyan-500/30
                                    rounded-3xl blur-2xl
                                    opacity-0 group-hover:opacity-100
                                    transition-opacity duration-500">
                                </div>

                                <!-- Card -->
                                <div
                                    class="relative h-full rounded-2xl overflow-hidden
                                    border border-white/20
                                    bg-slate-900
                                    group-hover:border-white/50
                                    transition-all duration-500
                                    group-hover:shadow-[0_0_50px_rgba(59,130,246,0.4)]">

                                    <!-- Image -->
                                    <img src="{{ asset('storage/' . $s->sertifikat) }}" alt="{{ $s->judul_sertifikat }}"
                                        class="w-full h-64 object-cover
                            group-hover:scale-110
                            transition-transform duration-700" />

                                    <!-- Overlay -->
                                    <div
                                        class="absolute inset-0
                                        bg-gradient-to-t from-black/90 via-black/30 to-transparent
                                        opacity-0 group-hover:opacity-100
                                        transition-opacity duration-500">

                                        <div class="absolute bottom-0 p-6 w-full">
                                            <h3 class="text-lg font-semibold text-white mb-1">
                                                {{ $s->judul_sertifikat }}
                                            </h3>

                                            <p class="text-sm text-gray-300 line-clamp-2">
                                                {{ $s->deskripsi_sertifikat }}
                                            </p>

                                            <div class="text-xs text-gray-400 mt-3 flex items-center gap-2">
                                                <i class="fas fa-calendar"></i>
                                                {{ $s->tanggal_sertifikat }}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @push('scripts')
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        keyframes: {
                            marquee: {
                                '0%': {
                                    transform: 'translateX(0)'
                                },
                                '100%': {
                                    transform: 'translateX(-50%)'
                                },
                            },
                            marqueeReverse: {
                                '0%': {
                                    transform: 'translateX(-50%)'
                                },
                                '100%': {
                                    transform: 'translateX(0)'
                                },
                            },
                        },
                        animation: {
                            marquee: 'marquee 25s linear infinite',
                            marqueeReverse: 'marqueeReverse 30s linear infinite',
                            shimmer: 'shimmer 2s linear infinite',
                            floating: 'floating 6s ease-in-out infinite',
                            pulseGlow: 'pulseGlow 2.5s ease-in-out infinite',
                        }
                    }
                }
            }
        </script>
    @endpush
