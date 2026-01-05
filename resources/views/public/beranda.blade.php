@extends('layout.main')
@section('desktop-content')
    <div class="desktop-main-container w-full max-w-4xl mx-auto">
        <!-- Profile Header -->
        <header
            class="relative mb-12 px-6 py-4 rounded-2xl overflow-hidden bg-cover bg-center ring-1 ring-white/40 shadow-[inset_0_0_30px_rgba(255,255,255,0.35)]"
            style=" background-image: url('{{ asset('storage/' . $profil->banner) }}'); background-position: 50% 55%;">
            <div class="flex flex-col md:flex-row items-start md:items-center">
                <!-- Profile Image with verified badge -->
                <div class="mb-4 md:mb-0 md:mr-10 relative">
                    <div class="w-28 h-28 md:w-32 md:h-32 rounded-full story-ring p-1">
                        <div class="w-full h-full rounded-full bg-white/10 flex items-center justify-center">
                            <div
                                class="w-24 h-24 md:w-28 md:h-28 rounded-full bg-gradient-to-r from-blue-400 to-purple-500 flex items-center justify-center text-white text-4xl font-bold">
                                <img src="{{ asset('storage/' . $profil->foto) }}" alt="Foto Profil"
                                    class="w-full h-full object-cover rounded-full">
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute bottom-2 right-2 md:bottom-3 md:right-3 w-6 h-6 md:w-8 md:h-8 bg-blue-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-check text-white text-xs md:text-sm"></i>
                    </div>
                </div>

                <!-- Profile Info -->
                <div class="flex-1">
                    <div class="flex flex-col md:flex-row md:items-center mb-4">
                        <div class="flex items-center mb-2 md:mb-0 md:mr-6">
                            <h1 class="text-2xl md:text-3xl text-white mr-2">{{ $profil->nama }}</h1>
                            <i class="fa-solid fa-circle-check text-blue-500 text-2xl"></i>
                        </div>
                    </div>

                    <!-- Stats -->
                    <div class="flex space-x-8 mb-4 text-white">
                        <div>
                            <span class="font-semibold">{{ $portofolio->count() }}</span>
                            <span>postingan</span>
                        </div>
                        <div>
                            <span class="font-semibold">530</span>
                            <span>pengikut</span>
                        </div>
                        <div>
                            <span class="font-semibold">86</span>
                            <span>mengikuti</span>
                        </div>
                    </div>

                    <!-- Bio -->
                    <div class="mb-3 text-white">
                        <div class="text-sm text-blue-500">
                            <a href="{{ $profil->url_instagram }}"><i class="fab fa-instagram mr-1"></i>
                                {{ $profil->url_instagram }}</a><br>
                            <a href="{{ $profil->url_github }}"><i class="fab fa-github mr-1"></i>
                                {{ $profil->url_github }}</a>
                        </div>
                    </div>

                    <!-- BUTTONS (GLASS EFFECT) -->
                    <div class="flex space-x-2 m-4">
                        <button
                            class="w-40 h-9 flex items-center justify-center bg-white/5 backdrop-blur-md border border-white/20 text-white hover:bg-white/20 rounded-xl text-sm font-medium transition duration-300">
                            Hire Me
                        </button>

                        <button
                            class="w-40 h-9 flex items-center justify-center bg-white/5 backdrop-blur-md border border-white/20 text-white hover:bg-white/20 rounded-xl text-sm font-mediumtransition duration-300">
                            Download CV
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <!-- Highlights Stories -->
        <div class="mb-10" data-aos="fade-up">
            <h2 class="text-lg font-semibold mb-4 text-gray-900 dark:text-gray-300">
                Cerita
            </h2>

            <div class="flex gap-6 overflow-x-auto pb-2 hide-scrollbar">
                @foreach ($cerita as $c)
                    <div class="flex flex-col items-center flex-shrink-0 cursor-pointer"
                        onclick="openStory('{{ asset('storage/' . $c->gambar) }}')">
                        <div
                            class="w-16 h-16 rounded-full p-[2px] mb-2
                            bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-500">
                            <img src="{{ asset('storage/' . $c->gambar) }}" alt="Foto Profil"
                                class="w-full h-full object-cover rounded-full">

                        </div>
                        <span class="text-xs text-gray-700 dark:text-gray-300">{{ $c->judul }}</span>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Posts Navigation -->
        <div class="border-t border-gray-300 dark:border-gray-700" data-aos="fade-up" data-aos-delay="100">
            <div class="flex justify-center space-x-16">
                <a href="#"
                    class="flex items-center py-3 border-t border-gray-900 dark:border-gray-300 text-gray-900 dark:text-gray-300">
                    <i class="fas fa-th-large mr-2"></i>
                    <span class="text-xl font-semibold">Portofolio</span>
                </a>
            </div>
        </div>
        <!-- Posts Grid -->
        <div class="grid grid-cols-3 gap-1 mt-4" data-aos="fade-up" data-aos-delay="200">
            @foreach ($portofolio as $p)
                <div class="aspect-square relative overflow-hidden group bg-gradient-to-r from-blue-100 to-blue-200">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <img src="{{ asset('storage/' . $p->gambar) }}" alt="Foto Profil"
                            class="w-full h-full object-cover">
                    </div>
                    <!-- OVERLAY -->
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center gap-3
                            bg-black/50 backdrop-blur-sm
                            opacity-0 group-hover:opacity-100
                            transition-all duration-300 px-3 text-center">

                        <!-- Judul Proyek -->
                        <h3 class="text-white font-bold text-lg md:text-xl">
                            {{ $p->judul }}
                        </h3>

                        <!-- Deskripsi Proyek -->
                        <p class="text-white/80 text-sm md:text-base">
                            {{ $p->deskripsi }}
                        </p>

                        <!-- Tombol -->
                        <div class="flex gap-2 mt-2">
                            <a href="{{ $p->url_github ?? '#' }}"
                                class="w-28 h-9 flex items-center justify-center gap-2
                                    rounded-lg text-xs md:text-sm font-medium text-white
                                    bg-white/20 backdrop-blur-md
                                    border border-white/30 hover:bg-white/30 transition">
                                <i class="fa-brands fa-github"></i> Repo
                            </a>

                            <a href="{{ $p->url_demo ?? '#' }}"
                                class="w-28 h-9 flex items-center justify-center gap-2
                                    rounded-lg text-xs md:text-sm font-medium text-white
                                    bg-white/20 backdrop-blur-md
                                    border border-white/30 hover:bg-white/30 transition">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i> Live
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('mobile-content')
    <div class="mb-8">
        <!-- Profile Header Mobile -->
        <header
            class="relative mb-12 px-6 py-4 rounded-2xl overflow-hidden bg-cover bg-center ring-1 ring-white/40 shadow-[inset_0_0_30px_rgba(255,255,255,0.35)]"
            style=" background-image: url('{{ asset('storage/' . $profil->banner) }}'); background-position: 50% 55%;">
            <div class="mb-6">
                <div class="flex items-start">
                    <!-- Profile Image with verified badge -->
                    <div class="mr-4 relative">
                        <div class="w-20 h-20 rounded-full story-ring p-1">
                            <div class="w-full h-full rounded-full bg-white/10 flex items-center justify-center">
                                <div
                                    class="w-16 h-16 rounded-full bg-gradient-to-r from-blue-400 to-purple-500 flex items-center justify-center text-white text-2xl font-bold">
                                    <img src="{{ asset('storage/' . $profil->foto) }}" alt="Foto Profil"
                                        class="w-full h-full object-cover rounded-full">
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute bottom-2 right-2 md:bottom-3 md:right-3 w-6 h-6 md:w-8 md:h-8 bg-blue-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-check text-white text-xs md:text-sm"></i>
                        </div>
                    </div>

                    <!-- Profile Stats -->
                    <div class="flex-1">
                        <div class="flex items-center mb-2">
                            <div class="flex items-center mr-4">
                                <h1 class="text-xl mr-2 text-white">{{ $profil->nama }}</h1>
                                <i class="fa-solid fa-circle-check text-blue-500 te xt-xl"></i>
                            </div>
                        </div>

                        <div class="flex justify-between mb-3">
                            <div class="text-center text-white">
                                <p class="font-semibold">{{ $portofolio->count() }}</p>
                                <p class="text-xs">postingan</p>
                            </div>
                            <div class="text-center text-white">
                                <p class="font-semibold">530</p>
                                <p class="text-xs">pengikut</p>
                            </div>
                            <div class="text-center text-white">
                                <p class="font-semibold">86</p>
                                <p class="text-xs">mengikuti</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bio Mobile -->
                <div class="mb-4">
                    <div class="text-sm text-blue-500">
                        <a href="{{ $profil->url_instagram }}"><i class="fab fa-instagram mr-1"></i>
                            {{ $profil->url_instagram }}</a>
                        <a href="{{ $profil->url_github }}"><i class="fab fa-github mr-1"></i>
                            {{ $profil->url_github }}</a>
                    </div>
                </div>

                <!-- Action Buttons Mobile -->
                <div class="flex space-x-2 mb-4">
                    <button
                        class="w-40 h-9 flex items-center justify-center bg-white/5 backdrop-blur-md border border-white/20 text-white hover:bg-white/20 rounded-xl text-sm font-medium transition duration-300">
                        Hire Me
                    </button>

                    <button
                        class="w-40 h-9 flex items-center justify-center bg-white/5 backdrop-blur-md border border-white/20 text-white hover:bg-white/20 rounded-xl text-sm font-mediumtransition duration-300">
                        Download CV
                    </button>
                </div>
            </div>
        </header>
        <!-- Highlights Stories Mobile -->
        <div class="mb-10" data-aos="fade-up">
            <h2 class="text-lg font-semibold mb-4 text-gray-900 dark:text-gray-300">
                Cerita
            </h2>

            <div class="flex gap-6 overflow-x-auto pb-2 hide-scrollbar">
                @foreach ($cerita as $c)
                    <div class="flex flex-col items-center flex-shrink-0 cursor-pointer"
                        onclick="openStory('{{ asset('storage/' . $c->gambar) }}')">
                        <div
                            class="w-16 h-16 rounded-full p-[2px] mb-2
                            bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-500">
                            <img src="{{ asset('storage/' . $c->gambar) }}" alt="Foto Profil"
                                class="w-full h-full object-cover rounded-full">

                        </div>
                        <span class="text-xs text-gray-700 dark:text-gray-300">{{ $c->judul }}</span>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Posts Navigation Mobile -->
        <div class="border-t border-gray-300 dark:border-gray-700" data-aos="fade-up" data-aos-delay="150">
            <div class="flex justify-around">
                <a href="#"
                    class="flex items-center py-3 border-t border-gray-900 dark:border-gray-300 text-gray-900 dark:text-gray-300">
                    <i class="fas fa-th-large mr-2"></i>
                    <span class="text-xl font-medium">Portofolio</span>
                </a>
            </div>
        </div>
        <!-- Posts Grid Mobile -->
        <div class="grid grid-cols-2 gap-1 mt-4" data-aos="fade-up" data-aos-delay="200">
            <!-- ITEM -->
            @foreach ($portofolio as $p)
                <div class="aspect-square relative overflow-hidden group bg-gradient-to-r from-blue-100 to-blue-200">

                    <!-- ICON -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <img src="{{ asset('storage/' . $p->gambar) }}" alt="Foto Profil"
                            class="w-full h-full object-cover">
                    </div>

                    <!-- OVERLAY -->
                    <div class="absolute inset-0 flex flex-col items-center justify-center gap-3
                            bg-black/50 backdrop-blur-sm
                            opacity-0 group-hover:opacity-100
                            transition-all duration-300 px-3 text-center
                            max-h-full overflow-y-auto
                            touch-manipulation"
                        onclick="this.classList.toggle('opacity-100')">

                        <!-- Judul Proyek -->
                        <h3 class="text-white font-bold text-sm md:text-lg truncate">
                            {{ $p->judul }}
                        </h3>

                        <!-- Deskripsi Proyek -->
                        <p class="text-white/80 text-xs md:text-sm overflow-y-auto max-h-20">
                            {{ $p->deskripsi }}
                        </p>

                        <!-- Tombol -->
                        <div class="flex flex-wrap gap-2 mt-2 justify-center">
                            <a href="{{ $p->url_github ?? '#' }}"
                                class="w-24 md:w-28 h-8 md:h-9 flex items-center justify-center gap-2
                                    rounded-lg text-xs md:text-sm font-medium text-white
                                    bg-white/20 backdrop-blur-md
                                    border border-white/30 hover:bg-white/30 transition">
                                <i class="fa-brands fa-github"></i> Repo
                            </a>

                            <a href="{{ $p->url_demo ?? '#' }}"
                                class="w-24 md:w-28 h-8 md:h-9 flex items-center justify-center gap-2
                                        rounded-lg text-xs md:text-sm font-medium text-white
                                        bg-white/20 backdrop-blur-md
                                        border border-white/30 hover:bg-white/30 transition">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i> Live
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        function openStory(img) {
            Swal.fire({
                imageUrl: img,
                background: 'transparent',
                backdrop: 'rgba(0,0,0,0.9)',
                showConfirmButton: false,
                showCloseButton: true,
                padding: 0,
                imageAlt: 'Story',
                customClass: {
                    popup: 'rounded-xl'
                }
            })
        }
    </script>
@endpush
