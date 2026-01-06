@extends('layout.main')
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
                        <img src="https://i.pravatar.cc/600?img=15"
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
                        Web Developer & Designer
                    </div>

                    <p class="text-gray-400 mb-10 leading-relaxed text-lg">
                        Spesialis dalam pengembangan web modern dengan fusi antara
                        <span class="text-blue-300 font-medium">teknologi terdepan</span> dan
                        <span class="text-purple-300 font-medium">desain futuristik</span>.
                        Membangun pengalaman digital yang tidak hanya fungsional tapi juga memukau secara
                        visual.
                    </p>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 mb-10">
                        <div class="text-center">
                            <div
                                class="text-3xl font-bold bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">
                                5+</div>
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
                                100%</div>
                            <div class="text-sm text-gray-400 mt-1">Kepuasan</div>
                        </div>
                    </div>

                    <!-- BADGES - Enhanced -->
                    <div class="flex flex-wrap gap-3">
                        <span
                            class="px-5 py-3 rounded-full bg-gradient-to-r from-blue-500/20 to-blue-600/20
                           backdrop-blur border border-blue-400/30 text-sm flex items-center gap-3
                           hover:from-blue-500/30 hover:to-blue-600/30 hover:border-blue-400/50
                           hover:scale-105 transition-all duration-300 group/badge">
                            <i
                                class="fa-solid fa-code text-blue-400 text-lg group-hover/badge:rotate-12 transition-transform"></i>
                            <span>Laravel & PHP Expert</span>
                        </span>
                        <span
                            class="px-5 py-3 rounded-full bg-gradient-to-r from-purple-500/20 to-pink-600/20
                           backdrop-blur border border-purple-400/30 text-sm flex items-center gap-3
                           hover:from-purple-500/30 hover:to-pink-600/30 hover:border-purple-400/50
                           hover:scale-105 transition-all duration-300 group/badge">
                            <i
                                class="fa-solid fa-wand-magic-sparkles text-purple-400 text-lg group-hover/badge:rotate-12 transition-transform"></i>
                            <span>UI Futuristik</span>
                        </span>
                        <span
                            class="px-5 py-3 rounded-full bg-gradient-to-r from-indigo-500/20 to-indigo-600/20
                           backdrop-blur border border-indigo-400/30 text-sm flex items-center gap-3
                           hover:from-indigo-500/30 hover:to-indigo-600/30 hover:border-indigo-400/50
                           hover:scale-105 transition-all duration-300 group/badge">
                            <i
                                class="fa-solid fa-moon text-indigo-400 text-lg group-hover/badge:rotate-12 transition-transform"></i>
                            <span>Dark Theme Specialist</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ================= TECH STACK ================= -->
        <div class="relative" data-aos="fade-up" data-aos-delay="200">

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
                        <div class="flex w-1/2 justify-around text-6xl">
                            <i class="fa-brands fa-html5 text-orange-500"></i>
                            <i class="fa-brands fa-css3-alt text-blue-500"></i>
                            <i class="fa-brands fa-js text-yellow-400"></i>
                            <i class="fa-brands fa-php text-indigo-400"></i>
                            <i class="fa-brands fa-laravel text-red-500"></i>
                            <i class="fa-brands fa-github"></i>
                        </div>

                        <!-- SET B (DUPLIKAT PERSIS) -->
                        <div class="flex w-1/2 justify-around text-6xl">
                            <i class="fa-brands fa-html5 text-orange-500"></i>
                            <i class="fa-brands fa-css3-alt text-blue-500"></i>
                            <i class="fa-brands fa-js text-yellow-400"></i>
                            <i class="fa-brands fa-php text-indigo-400"></i>
                            <i class="fa-brands fa-laravel text-red-500"></i>
                            <i class="fa-brands fa-github"></i>
                        </div>

                    </div>
                </div>

                <!-- ================= ROW 2 ================= -->
                <div class="overflow-hidden group">
                    <div class="flex w-[200%] animate-marqueeReverse group-hover:[animation-play-state:paused]">

                        <!-- SET A -->
                        <div class="flex w-1/2 justify-around text-5xl">
                            <i class="fa-brands fa-bootstrap text-purple-500"></i>
                            <i class="fa-brands fa-react text-cyan-400"></i>
                            <i class="fa-brands fa-node-js text-green-500"></i>
                            <i class="fa-solid fa-database text-gray-400"></i>
                            <i class="fa-brands fa-css3 text-teal-400"></i>
                        </div>

                        <!-- SET B -->
                        <div class="flex w-1/2 justify-around text-5xl">
                            <i class="fa-brands fa-bootstrap text-purple-500"></i>
                            <i class="fa-brands fa-react text-cyan-400"></i>
                            <i class="fa-brands fa-node-js text-green-500"></i>
                            <i class="fa-solid fa-database text-gray-400"></i>
                            <i class="fa-brands fa-css3 text-teal-400"></i>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- ================= CERTIFICATE ================= -->
        <div class="relative" data-aos="fade-up" data-aos-delay="300">
            <!-- Section Header -->
            <div class="flex items-center justify-center mb-12">
                <div class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-purple-500/20 to-pink-500/20 blur-xl rounded-full">
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
                <!-- ADD -->
                <div class="text-center mt-2">
                    <!-- Modal toggle -->
                    <button data-modal-target="sertifikatModal" data-modal-toggle="sertifikatModal"
                        class="text-white bg-blue-400/40 box-border rounded-full border border-transparent hover:bg-blue-700 focus:ring-4 focus:ring-blue-500 shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none"
                        type="button">
                        Tambah Sertifikat <i class="fas fa-plus ml-2"></i>
                    </button>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    @foreach ($sertifikat as $s)
                        <div class="relative group cursor-pointer" data-modal-target="certModal"
                            data-modal-toggle="certModal">
                            <!-- Glow Effect -->
                            <div
                                class="absolute -inset-2 bg-gradient-to-r from-blue-500/30 to-cyan-500/30 rounded-3xl blur-xl
                          opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <div
                                class="relative rounded-2xl overflow-hidden border-2 border-white/20
                          group-hover:border-white/50 transition-all duration-500
                          group-hover:shadow-[0_0_60px_rgba(59,130,246,0.4)]">
                                <img src="{{ asset('storage/' . $s->sertifikat) }}"
                                    class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700" />

                                <!-- Overlay -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent
                            opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                    <div class="absolute bottom-0 p-6 w-full">
                                        <div class="text-lg font-semibold mb-2">{{ $s->judul_sertifikat }}</div>
                                        <div class="text-sm text-gray-300">{{ $s->deskripsi_sertifikat }}</div>
                                        <div class="text-xs text-gray-400 mt-4">
                                            <i class="fas fa-calendar mr-2"></i>{{ $s->tanggal_sertifikat }}
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
                <div class="absolute -inset-3 rounded-[2rem] bg-gradient-to-r from-blue-500/30 to-purple-500/30 blur-lg">
                </div>

                <div
                    class="relative rounded-2xl overflow-hidden border-2 border-white/20
                    bg-gradient-to-br from-white/15 to-white/5 backdrop-blur-xl">
                    <img src="https://i.pravatar.cc/600?img=15" class="w-full h-80 object-cover" />

                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                </div>
            </div>

            <!-- Info Card Mobile -->
            <div
                class="rounded-2xl p-6 mb-6 bg-gradient-to-br from-white/12 to-white/6 backdrop-blur-xl border border-white/25">
                <h1 class="text-3xl font-bold mb-3">
                    <span class="text-white">Dimas</span>
                    <span class="bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">Euro</span>
                </h1>

                <div class="text-lg text-gray-300 mb-3">
                    <i class="fas fa-star text-yellow-400 mr-2"></i>
                    Full Stack Developer
                </div>

                <p class="text-gray-400 mb-6">
                    Spesialis pengembangan web dengan fokus pada teknologi modern dan desain futuristik.
                </p>

                <!-- Stats Mobile -->
                <div class="grid grid-cols-3 gap-4 mb-6">
                    <div class="text-center bg-white/5 p-3 rounded-xl">
                        <div class="text-xl font-bold text-blue-400">5+</div>
                        <div class="text-xs text-gray-400 mt-1">Tahun</div>
                    </div>
                    <div class="text-center bg-white/5 p-3 rounded-xl">
                        <div class="text-xl font-bold text-purple-400">50+</div>
                        <div class="text-xs text-gray-400 mt-1">Proyek</div>
                    </div>
                    <div class="text-center bg-white/5 p-3 rounded-xl">
                        <div class="text-xl font-bold text-green-400">100%</div>
                        <div class="text-xs text-gray-400 mt-1">Kepuasan</div>
                    </div>
                </div>

                <!-- Badges Mobile -->
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-2 rounded-full bg-blue-500/20 text-blue-300 text-xs flex items-center gap-2">
                        <i class="fa-solid fa-code text-xs"></i>
                        Laravel
                    </span>
                    <span class="px-3 py-2 rounded-full bg-purple-500/20 text-purple-300 text-xs flex items-center gap-2">
                        <i class="fa-solid fa-wand-magic-sparkles text-xs"></i>
                        UI
                    </span>
                    <span class="px-3 py-2 rounded-full bg-indigo-500/20 text-indigo-300 text-xs flex items-center gap-2">
                        <i class="fa-solid fa-moon text-xs"></i>
                        Dark Theme
                    </span>
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
                        <div class="flex w-1/2 justify-around text-2xl opacity-70">
                            <i class="fa-brands fa-bootstrap text-purple-500"></i>
                            <i class="fa-brands fa-react text-cyan-400"></i>
                            <i class="fa-brands fa-node-js text-green-500"></i>
                            <i class="fa-solid fa-database text-gray-400"></i>
                        </div>

                        <!-- SET B (DUPLIKAT PERSIS) -->
                        <div class="flex w-1/2 justify-around text-2xl opacity-70">
                            <i class="fa-brands fa-bootstrap text-purple-500"></i>
                            <i class="fa-brands fa-react text-cyan-400"></i>
                            <i class="fa-brands fa-node-js text-green-500"></i>
                            <i class="fa-solid fa-database text-gray-400"></i>
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
                <!-- ADD -->
                <div class="text-center mt-2">
                    <!-- Modal toggle -->
                    <button data-modal-target="sertifikatModal" data-modal-toggle="sertifikatModal"
                        class="text-white bg-blue-400/40 box-border rounded-full border border-transparent hover:bg-blue-700 focus:ring-4 focus:ring-blue-500 shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none"
                        type="button">
                        Tambah Sertifikat <i class="fas fa-plus ml-2"></i>
                    </button>
                </div>
                <div class="space-y-4 mt-2">
                    @foreach ($sertifikat as $s)
                        <div class="relative rounded-xl overflow-hidden border border-white/20">
                            <img src="{{ asset('storage/' . $s->sertifikat) }}" class="w-full h-40 object-cover" />
                            <div
                                class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent">
                                <div class="font-semibold">{{ $s->judul_sertifikat }}</div>
                                <div class="text-xs text-gray-300">{{ $s->deskripsi_sertifikat }} •
                                    {{ $s->tanggal_sertifikat }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
@push('modals')
    <!-- Main modal -->
    <div id="sertifikatModal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex items-center justify-center w-full h-full bg-black/50 backdrop-blur-sm">

        <div class="relative w-full max-w-lg mx-4">
            <!-- Modal content -->
            <div class="relative bg-slate-900 rounded-2xl shadow border border-gray-700">

                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b border-gray-700">
                    <h3 class="text-lg font-semibold text-white">
                        Tambah Sertifikat
                    </h3>
                    <button type="button" data-modal-hide="sertifikatModal" class="text-gray-400 hover:text-white">
                        ✕
                    </button>
                </div>

                <!-- Modal body -->
                <form action="{{ route('admin.sertifikat.store') }}" class="p-4 space-y-4" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <!-- Judul Sertifikat -->
                    <div>
                        <label class="block text-sm text-gray-300 mb-1">
                            Judul Sertifikat
                        </label>
                        <input type="text" name="judul_sertifikat"
                            class="w-full px-3 py-2 rounded-lg bg-slate-800 border border-gray-700
                               text-white focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="Contoh: Sertifikat Web Developer" required>
                    </div>

                    <!-- Deskripsi Sertifikat -->
                    <div>
                        <label class="block text-sm text-gray-300 mb-1">
                            Deskripsi Sertifikat
                        </label>
                        <textarea name="deskripsi_sertifikat" rows="3"
                            class="w-full px-3 py-2 rounded-lg bg-slate-800 border border-gray-700
                               text-white focus:ring-2 focus:ring-blue-500 focus:outline-none resize-none"
                            placeholder="Deskripsi singkat sertifikat"></textarea>
                    </div>

                    <!-- File Sertifikat -->
                    <div>
                        <label class="block text-sm text-gray-300 mb-1">
                            File Sertifikat
                        </label>
                        <input type="file" name="sertifikat"
                            class="w-full text-sm text-gray-300
                               file:bg-blue-600/30 file:border-0 file:text-white
                               file:px-4 file:py-2 file:rounded-lg
                               hover:file:bg-blue-600/50"
                            accept="image/*,.pdf" required>
                    </div>

                    <!-- Tanggal Sertifikat -->
                    <div>
                        <label class="block text-sm text-gray-300 mb-1">
                            Tanggal Sertifikat
                        </label>
                        <input type="date" name="tanggal_sertifikat"
                            class="w-full px-3 py-2 rounded-lg bg-slate-800 border border-gray-700
                               text-white focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            required>
                    </div>

                    <!-- Action -->
                    <div class="flex justify-end gap-2 pt-4 border-t border-gray-700">
                        <button type="button" data-modal-hide="sertifikatModal"
                            class="px-4 py-2 text-sm rounded-lg bg-gray-700 text-white hover:bg-gray-600">
                            Batal
                        </button>

                        <button type="submit"
                            class="px-5 py-2 text-sm rounded-lg bg-gradient-to-r from-blue-600 to-cyan-600
                                text-white font-medium hover:opacity-90">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endpush
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
