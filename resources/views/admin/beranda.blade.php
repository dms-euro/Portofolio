@extends('layout.main')
@section('desktop-content')
    <div class="desktop-main-container w-full max-w-4xl mx-auto">
        <!-- Profile Header -->
        <header
            class="relative mb-12 px-6 py-4 rounded-2xl overflow-hidden bg-cover bg-center ring-1 ring-white/40 shadow-[inset_0_0_30px_rgba(255,255,255,0.35)]"
            style=" background-image: url('{{ asset('storage/' . $profil->banner) }}'); background-position: 50% 55%;">
            <form action="{{ route('admin.profil.update', $profil) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="flex flex-col md:flex-row items-start md:items-center">
                    <!-- Profile Image Upload Section -->
                    <div class="mb-6 md:mb-0 md:mr-10 relative">
                        <!-- Current Profile Image -->
                        <div class="w-32 h-32 md:w-40 md:h-40 rounded-full story-ring p-1 mb-4">
                            <div class="w-full h-full rounded-full bg-white/10 flex items-center justify-center">
                                <div class="w-28 h-28 md:w-36 md:h-36 rounded-full bg-gradient-to-r from-blue-400 to-purple-500 flex items-center justify-center text-white text-4xl font-bold"
                                    id="profile-preview">
                                    <img src="{{ asset('storage/' . $profil->foto) }}" alt="Foto Profil"
                                        class="w-full h-full object-cover rounded-full">
                                </div>
                            </div>
                        </div>
                        <!-- Upload Buttons -->
                        <div class="space-y-3">
                            <label class="block mb-2.5 text-sm font-medium text-heading" for="file_input">Upload
                                Foto</label>
                            <input name="foto"
                                class="cursor-pointer bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full shadow-xs placeholder:text-body"
                                aria-describedby="file_input_help" id="file_input" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or
                                GIF (MAX. 800x400px).</p>

                            <label class="block mb-2.5 text-sm font-medium text-heading" for="file_input">Upload
                                Banner</label>
                            <input name="banner"
                                class="cursor-pointer bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full shadow-xs placeholder:text-body"
                                aria-describedby="file_input_help" id="file_input" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or
                                GIF (MAX. 800x400px).</p>
                        </div>
                    </div>

                    <!-- Profile Info Form -->
                    <div class="flex-1">
                        <!-- Username Field -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                <i class="fas fa-user mr-2 text-blue-400"></i>Username
                            </label>
                            <div class="relative">
                                <input type="text" value="{{ $profil->nama }}" name="nama"
                                    class="w-full px-4 py-3 bg-slate-800/50 border border-gray-700 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                                    id="username-input">
                                <div class="absolute right-3 top-3">
                                    <i class="fas fa-pencil text-gray-400"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Social Media Links -->
                        <div class="space-y-4 mb-6">
                            <!-- Instagram URL -->
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">
                                    <i class="fab fa-instagram mr-2 text-pink-400"></i>Instagram URL
                                </label>
                                <div class="relative">
                                    <input type="text" value="{{ $profil->url_instagram }}" name="url_instagram"
                                        class="w-full px-4 py-3 bg-slate-800/50 border border-gray-700 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent transition pl-10"
                                        id="instagram-url">
                                    <div class="absolute left-3 top-3">
                                        <i class="fab fa-instagram text-pink-400"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- GitHub URL -->
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">
                                    <i class="fab fa-github mr-2 text-gray-300"></i>GitHub URL
                                </label>
                                <div class="relative">
                                    <input type="text" value="{{ $profil->url_github ?? 'Link GitHub' }}"
                                        name="url_github"
                                        class="w-full px-4 py-3 bg-slate-800/50 border border-gray-700 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent transition pl-10"
                                        id="github-url">
                                    <div class="absolute left-3 top-3">
                                        <i class="fab fa-github text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Action Buttons -->
                        <div class="flex flex-wrap gap-3">
                            <!-- Save Button -->
                            <button
                                class="px-6 py-3 bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-medium rounded-xl hover:opacity-90 transition flex items-center"
                                id="save-btn" type="submit">
                                <i class="fas fa-save mr-2"></i>Simpan Perubahan
                            </button>
                            <!-- Reset Button -->
                            <button
                                class="px-6 py-3 bg-gradient-to-r from-gray-700 to-gray-800 text-white font-medium rounded-xl hover:opacity-90 transition flex items-center"
                                id="reset-btn">
                                <i class="fas fa-undo mr-2"></i>Reset
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </header>
        <!-- Highlights Stories -->
        <div class="mb-10" data-aos="fade-up">
            <h2 class="text-lg font-semibold mb-4 text-gray-900 dark:text-gray-300">
                Cerita
            </h2>
            <div class="flex gap-6 overflow-x-auto pb-2 hide-scrollbar">
                <!-- STORY BARU -->
                <button data-modal-target="storyModal" data-modal-toggle="storyModal" type="button"
                    class="flex flex-col items-center flex-shrink-0 focus:outline-none">

                    <div
                        class="w-16 h-16 rounded-full p-[2px] mb-2
                            bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-500">
                        <div
                            class="w-full h-full rounded-full bg-gray-300/80
                                    flex items-center justify-center">
                            <i class="fas fa-plus text-gray-500 hover:text-blue-500"></i>
                        </div>
                    </div>
                    <span class="text-xs text-gray-700 dark:text-gray-300">Baru</span>
                </button>
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
            <div class="flex justify-center space-x-16 relative">

                <!-- PORTOFOLIO -->
                <button data-tab="portofolio"
                    class="flex items-center py-3 border-t-2 border-transparent text-gray-400 dark:text-gray-500 transition relative group">
                    <i class="fas fa-th-large mr-2"></i>
                    <span class="text-xl font-semibold">Portofolio</span>
                    <!-- Indicator -->
                    <div
                        class="absolute -bottom-2.5 w-6 h-1 bg-gradient-to-r from-cyan-400 to-blue-400 rounded-full animate-pulse hidden">
                    </div>
                </button>

                <!-- TAMBAH -->
                <button data-tab="tambah"
                    class="flex items-center py-3 border-t-2 border-transparent text-gray-400 dark:text-gray-500 transition relative group">
                    <i class="fas fa-plus-square mr-2"></i>
                    <span class="text-xl font-semibold">Tambah</span>
                    <!-- Indicator -->
                    <div
                        class="absolute -bottom-2.5 w-6 h-1 bg-gradient-to-r from-cyan-400 to-blue-400 rounded-full animate-pulse hidden">
                    </div>
                </button>

            </div>
        </div>
        <!-- PORTOFOLIO CONTENT -->
        <div id="portofolio" class="grid grid-cols-3 gap-1 mt-4" data-aos="fade-up" data-aos-delay="200">
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
        <!-- TAMBAH -->
        <div id="tambah" class="relative">
            <div class="absolute -inset-4 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-3xl blur-xl">
            </div>

            <div
                class="relative rounded-2xl bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                    border border-gray-800 p-6 md:p-8">

                <form action="{{ route('admin.portofolio.store') }}" method="POST" id="portfolioForm"
                    class="space-y-8" enctype="multipart/form-data">
                    @csrf
                    <!-- Project Details Section -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-3 mb-6">
                            <div
                                class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-600 to-blue-700 flex items-center justify-center">
                                <i class="fas fa-info-circle text-white text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-white">Detail Proyek</h3>
                        </div>

                        <!-- Project Name -->
                        <div class="space-y-2">
                            <label for="projectName" class="block text-sm font-medium text-gray-300">
                                <i class="fas fa-tag mr-2"></i>Nama Proyek
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-heading text-gray-500"></i>
                                </div>
                                <input type="text" id="projectName" name="judul"
                                    class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-900/50 border border-gray-700
                                          text-white placeholder-gray-500 focus:outline-none focus:ring-2
                                          focus:ring-blue-500 focus:border-transparent transition-all"
                                    placeholder="Contoh: E-commerce Website" required>
                            </div>
                            <p class="text-xs text-gray-500">Masukkan nama proyek yang jelas dan deskriptif</p>
                        </div>

                        <!-- Project Description -->
                        <div class="space-y-2">
                            <label for="projectDescription" class="block text-sm font-medium text-gray-300">
                                <i class="fas fa-align-left mr-2"></i>Deskripsi Proyek
                            </label>
                            <div class="relative">
                                <div class="absolute top-3 left-3 pointer-events-none">
                                    <i class="fas fa-file-alt text-gray-500"></i>
                                </div>
                                <textarea id="projectDescription" name="deskripsi" rows="4"
                                    class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-900/50 border border-gray-700
                                             text-white placeholder-gray-500 focus:outline-none focus:ring-2
                                             focus:ring-blue-500 focus:border-transparent transition-all resize-none"
                                    placeholder="Jelaskan detail proyek, teknologi yang digunakan, dan fitur utama..." required></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Image Upload Section -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-3 mb-6">
                            <div
                                class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-600 to-pink-700 flex items-center justify-center">
                                <i class="fas fa-image text-white text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-white">Gambar Proyek</h3>
                        </div>

                        <!-- Image Preview -->
                        <div class="space-y-4">
                            <!-- Image Upload -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-300">
                                    <i class="fas fa-upload mr-2"></i>Unggah Gambar
                                </label>
                                <input name="gambar"
                                    class="cursor-pointer bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full shadow-xs placeholder:text-body"
                                    id="file_input" type="file">
                            </div>
                        </div>
                    </div>

                    <!-- Links Section -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-3 mb-6">
                            <div
                                class="w-12 h-12 rounded-xl bg-gradient-to-br from-green-600 to-emerald-700 flex items-center justify-center">
                                <i class="fas fa-link text-white text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-white">Tautan Proyek</h3>
                        </div>

                        <!-- GitHub URL -->
                        <div class="space-y-2">
                            <label for="githubUrl" class="block text-sm font-medium text-gray-300">
                                <i class="fab fa-github mr-2"></i>URL GitHub
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fab fa-github text-gray-500"></i>
                                </div>
                                <input type="url" id="githubUrl" name="url_github"
                                    class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-900/50 border border-gray-700
                                          text-white placeholder-gray-500 focus:outline-none focus:ring-2
                                          focus:ring-green-500 focus:border-transparent transition-all"
                                    placeholder="https://github.com/username/project-name" pattern="https?://.+">
                            </div>
                            <p class="text-xs text-gray-500">
                                Tautan ke repository GitHub (opsional)
                            </p>
                        </div>

                        <!-- Demo URL -->
                        <div class="space-y-2">
                            <label for="demoUrl" class="block text-sm font-medium text-gray-300">
                                <i class="fas fa-external-link-alt mr-2"></i>URL Demo
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-globe text-gray-500"></i>
                                </div>
                                <input type="url" id="demoUrl" name="url_demo"
                                    class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-900/50 border border-gray-700
                                          text-white placeholder-gray-500 focus:outline-none focus:ring-2
                                          focus:ring-purple-500 focus:border-transparent transition-all"
                                    placeholder="https://demo-project.com" pattern="https?://.+">
                            </div>
                            <p class="text-xs text-gray-500">
                                Tautan ke demo live atau deployed project (opsional)
                            </p>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="pt-6 border-t border-gray-800">
                        <div class="flex flex-col md:flex-row gap-4 justify-end">
                            <button type="button" id="resetButton"
                                class="px-6 py-3 rounded-xl border-2 border-gray-700 text-gray-300
                                       hover:bg-gray-800 hover:text-white transition-all">
                                <i class="fas fa-redo mr-2"></i>Reset Form
                            </button>

                            <button type="submit"
                                class="px-8 py-3 rounded-xl bg-gradient-to-r from-blue-600 to-purple-600
                                       text-white font-semibold hover:scale-105 transition-transform
                                       hover:shadow-[0_0_30px_rgba(99,102,241,0.5)]">
                                <i class="fas fa-save mr-2"></i>Simpan Portofolio
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('mobile-content')
    <div class="mb-8">
        <!-- Profile Header Mobile -->
        <header
            class="relative mb-12 px-6 py-4 rounded-2xl overflow-hidden bg-cover bg-center ring-1 ring-white/40 shadow-[inset_0_0_30px_rgba(255,255,255,0.35)]"
            style=" background-image: url('{{ asset('storage/' . $profil->banner) }}'); background-position: 50% 55%;">
            <form action="{{ route('admin.profil.update', $profil) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="flex flex-col items-center mb-6">
                    <!-- Profile Image -->
                    <div class="relative mb-4">
                        <div class="w-28 h-28 rounded-full story-ring p-1">
                            <div class="w-full h-full rounded-full bg-white/10 flex items-center justify-center">
                                <div class="w-24 h-24 rounded-full bg-gradient-to-r from-blue-400 to-purple-500 flex items-center justify-center text-white text-3xl font-bold"
                                    id="mobile-profile-preview">
                                    <img src="{{ asset('storage/' . $profil->foto) }}" alt="Foto Profil"
                                        class="w-full h-full object-cover rounded-full">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Upload Buttons -->
                    <div class="space-y-3">
                        <label class="block mb-2.5 text-sm font-medium text-heading" for="file_input">Upload
                            Foto</label>
                        <input name="foto"
                            class="cursor-pointer bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-full focus:ring-brand focus:border-brand block w-full shadow-xs placeholder:text-body"
                            aria-describedby="file_input_help" id="file_input" type="file">
                        <label class="block mb-2.5 text-sm font-medium text-heading" for="file_input">Upload
                            Banner</label>
                        <input name="banner"
                            class="cursor-pointer bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-full focus:ring-brand focus:border-brand block w-full shadow-xs placeholder:text-body"
                            aria-describedby="file_input_help" id="file_input" type="file">
                    </div>

                    <!-- Profile Info Form -->
                    <div class="space-y-4 mt-2">
                        <!-- Username Field -->
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-1">
                                Username
                            </label>
                            <div class="relative">
                                <input type="text" value="{{ $profil->nama }}" name="nama"
                                    class="w-full px-3 py-2 bg-slate-800/50 border border-gray-700 rounded-lg text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent text-sm"
                                    id="mobile-username-input">
                                <div class="absolute right-2 top-2">
                                    <i class="fas fa-pencil text-gray-400 text-sm"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media Links -->
                        <div class="space-y-3">
                            <!-- Instagram -->
                            <div>
                                <label class="block text-xs font-medium text-gray-300 mb-1">
                                    Instagram
                                </label>
                                <div class="relative">
                                    <i
                                        class="fab fa-instagram absolute left-2 top-1/2 transform -translate-y-1/2 text-pink-400 text-sm"></i>
                                    <input type="text" alue="{{ $profil->url_instagram }}" name="url_instagram"
                                        class="w-full px-8 py-2 bg-slate-800/50 border border-gray-700 rounded-lg text-white focus:outline-none focus:ring-1 focus:ring-pink-500 focus:border-transparent text-sm"
                                        id="mobile-instagram-url">
                                </div>
                            </div>

                            <!-- GitHub -->
                            <div>
                                <label class="block text-xs font-medium text-gray-300 mb-1">
                                    GitHub
                                </label>
                                <div class="relative">
                                    <i
                                        class="fab fa-github absolute left-2 top-1/2 transform -translate-y-1/2 text-gray-300 text-sm"></i>
                                    <input type="text" value="{{ $profil->url_github ?? 'Link GitHub' }}"
                                        name="url_github"
                                        class="w-full px-8 py-2 bg-slate-800/50 border border-gray-700 rounded-lg text-white focus:outline-none focus:ring-1 focus:ring-gray-500 focus:border-transparent text-sm"
                                        id="mobile-github-url">
                                </div>
                            </div>
                        </div>
                        <!-- Save & Reset Buttons -->
                        <div class="flex space-x-2">
                            <button
                                class="flex-1 py-2 bg-gradient-to-r from-blue-600 to-cyan-600 text-white text-sm font-medium rounded-lg hover:opacity-90 transition flex items-center justify-center"
                                id="mobile-save-btn" type="submit">
                                <i class="fas fa-save mr-1"></i>Simpan
                            </button>

                            <button
                                class="flex-1 py-2 bg-gradient-to-r from-gray-700 to-gray-800 text-white text-sm font-medium rounded-lg hover:opacity-90 transition flex items-center justify-center"
                                id="mobile-reset-btn">
                                <i class="fas fa-undo mr-1"></i>Reset
                            </button>
                        </div>
                        <!-- Status Message -->
                        <div id="mobile-status-message" class="mt-3 text-xs opacity-0 transition-opacity text-center">
                        </div>
                    </div>
        </header>
        <!-- Highlights Stories Mobile -->
        <div class="mb-10" data-aos="fade-up">
            <h2 class="text-lg font-semibold mb-4 text-gray-900 dark:text-gray-300">
                Cerita
            </h2>

            <div class="flex gap-6 overflow-x-auto pb-2 hide-scrollbar">
                <!-- STORY BARU -->
                <button data-modal-target="storyModal" data-modal-toggle="storyModal" type="button"
                    class="flex flex-col items-center flex-shrink-0 focus:outline-none">

                    <div
                        class="w-16 h-16 rounded-full p-[2px] mb-2
                            bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-500">
                        <div
                            class="w-full h-full rounded-full bg-gray-300/80
                                    flex items-center justify-center">
                            <i class="fas fa-plus text-gray-500"></i>
                        </div>
                    </div>
                    <span class="text-xs text-gray-700 dark:text-gray-300">Baru</span>
                </button>

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
        <!-- TAMBAH -->
        <div class="mt-8 relative">
            <div class="absolute -inset-4 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-3xl blur-xl">
            </div>

            <div
                class="relative rounded-2xl bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                    border border-gray-800 p-6 md:p-8">

                <form action="{{ route('admin.portofolio.store') }}" method="POST" id="portfolioForm"
                    class="space-y-8" enctype="multipart/form-data">
                    @csrf
                    <!-- Project Details Section -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-3 mb-6">
                            <div
                                class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-600 to-blue-700 flex items-center justify-center">
                                <i class="fas fa-info-circle text-white text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-white">Detail Proyek</h3>
                        </div>

                        <!-- Project Name -->
                        <div class="space-y-2">
                            <label for="projectName" class="block text-sm font-medium text-gray-300">
                                <i class="fas fa-tag mr-2"></i>Nama Proyek
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-heading text-gray-500"></i>
                                </div>
                                <input type="text" id="projectName" name="judul"
                                    class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-900/50 border border-gray-700
                                          text-white placeholder-gray-500 focus:outline-none focus:ring-2
                                          focus:ring-blue-500 focus:border-transparent transition-all"
                                    placeholder="Contoh: E-commerce Website" required>
                            </div>
                            <p class="text-xs text-gray-500">Masukkan nama proyek yang jelas dan deskriptif</p>
                        </div>

                        <!-- Project Description -->
                        <div class="space-y-2">
                            <label for="projectDescription" class="block text-sm font-medium text-gray-300">
                                <i class="fas fa-align-left mr-2"></i>Deskripsi Proyek
                            </label>
                            <div class="relative">
                                <div class="absolute top-3 left-3 pointer-events-none">
                                    <i class="fas fa-file-alt text-gray-500"></i>
                                </div>
                                <textarea id="projectDescription" name="deskripsi" rows="4"
                                    class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-900/50 border border-gray-700
                                             text-white placeholder-gray-500 focus:outline-none focus:ring-2
                                             focus:ring-blue-500 focus:border-transparent transition-all resize-none"
                                    placeholder="Jelaskan detail proyek, teknologi yang digunakan, dan fitur utama..." required></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Image Upload Section -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-3 mb-6">
                            <div
                                class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-600 to-pink-700 flex items-center justify-center">
                                <i class="fas fa-image text-white text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-white">Gambar Proyek</h3>
                        </div>

                        <!-- Image Preview -->
                        <div class="space-y-4">
                            <!-- Image Upload -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-300">
                                    <i class="fas fa-upload mr-2"></i>Unggah Gambar
                                </label>
                                <input name="gambar"
                                    class="cursor-pointer bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full shadow-xs placeholder:text-body"
                                    id="file_input" type="file">
                            </div>
                        </div>
                    </div>

                    <!-- Links Section -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-3 mb-6">
                            <div
                                class="w-12 h-12 rounded-xl bg-gradient-to-br from-green-600 to-emerald-700 flex items-center justify-center">
                                <i class="fas fa-link text-white text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-white">Tautan Proyek</h3>
                        </div>

                        <!-- GitHub URL -->
                        <div class="space-y-2">
                            <label for="githubUrl" class="block text-sm font-medium text-gray-300">
                                <i class="fab fa-github mr-2"></i>URL GitHub
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fab fa-github text-gray-500"></i>
                                </div>
                                <input type="url" id="githubUrl" name="url_github"
                                    class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-900/50 border border-gray-700
                                          text-white placeholder-gray-500 focus:outline-none focus:ring-2
                                          focus:ring-green-500 focus:border-transparent transition-all"
                                    placeholder="https://github.com/username/project-name" pattern="https?://.+">
                            </div>
                            <p class="text-xs text-gray-500">
                                Tautan ke repository GitHub (opsional)
                            </p>
                        </div>

                        <!-- Demo URL -->
                        <div class="space-y-2">
                            <label for="demoUrl" class="block text-sm font-medium text-gray-300">
                                <i class="fas fa-external-link-alt mr-2"></i>URL Demo
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-globe text-gray-500"></i>
                                </div>
                                <input type="url" id="demoUrl" name="url_demo"
                                    class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-900/50 border border-gray-700
                                          text-white placeholder-gray-500 focus:outline-none focus:ring-2
                                          focus:ring-purple-500 focus:border-transparent transition-all"
                                    placeholder="https://demo-project.com" pattern="https?://.+">
                            </div>
                            <p class="text-xs text-gray-500">
                                Tautan ke demo live atau deployed project (opsional)
                            </p>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="pt-6 border-t border-gray-800">
                        <div class="flex flex-col md:flex-row gap-4 justify-end">
                            <button type="button" id="resetButton"
                                class="px-6 py-3 rounded-xl border-2 border-gray-700 text-gray-300
                                       hover:bg-gray-800 hover:text-white transition-all">
                                <i class="fas fa-redo mr-2"></i>Reset Form
                            </button>

                            <button type="submit"
                                class="px-8 py-3 rounded-xl bg-gradient-to-r from-blue-600 to-purple-600
                                       text-white font-semibold hover:scale-105 transition-transform
                                       hover:shadow-[0_0_30px_rgba(99,102,241,0.5)]">
                                <i class="fas fa-save mr-2"></i>Simpan Portofolio
                            </button>
                        </div>
                    </div>
                </form>
            </div>
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
    <script>
        const tabButtons = document.querySelectorAll('[data-tab]');
        const tabContents = document.querySelectorAll('#portofolio, #tambah');

        tabButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const target = btn.dataset.tab;

                // Hide all contents
                tabContents.forEach(c => c.classList.add('hidden'));

                // Show selected content
                document.getElementById(target).classList.remove('hidden');

            });
        });

        // Default tab
        document.addEventListener('DOMContentLoaded', () => {
            tabButtons[0].click();
        });
    </script>
@endpush
