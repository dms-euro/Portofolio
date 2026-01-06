<aside class="text-center w-64 border-r border-gray-500 fixed left-0 top-0 h-screen p-6 hidden lg:block bg-slate-950">
    <!-- Nama di atas -->
    <div class="mb-10" data-aos="fade-right" data-aos-delay="10">
        <h1 class="text-3xl font-bold bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">
            UROO.DEV
        </h1>
    </div>

    <!-- Container untuk posisi tengah -->
    <div class="flex flex-col h-[calc(100vh-16rem)] justify-center">
        <nav class="space-y-6">
            <a href="{{ route('admin.profil.index') }}" class="flex items-center justify-center lg:justify-start text-white space-x-4 p-4 rounded-xl hover:bg-slate-800/50 transition-all group"
                data-aos="fade-right" data-aos-delay="100">
                <div class="absolute right-0 top-1/2 -translate-y-1/2 w-1 h-8 bg-gradient-to-b from-cyan-400 to-blue-400 rounded-l-full"></div>
                <i class="fas fa-home text-2xl group-hover:scale-110 transition-transform"></i>
                <span class="font-medium text-lg">Beranda</span>
            </a>

            <a href="{{ route('admin.sertifikat.index') }}" class="flex items-center justify-center lg:justify-start text-white space-x-4 p-4 rounded-xl hover:bg-slate-800/50 transition-all group"
                data-aos="fade-right" data-aos-delay="150">
                <i class="fas fa-user text-2xl group-hover:scale-110 transition-transform"></i>
                <span class="font-medium text-lg">Saya</span>
            </a>

            <a href="{{ route('admin.service.index') }}" class="flex items-center justify-center lg:justify-start text-white space-x-4 p-4 rounded-xl hover:bg-slate-800/50 transition-all group"
                data-aos="fade-right" data-aos-delay="200">
                <i class="fas fa-cog text-2xl group-hover:scale-110 transition-transform"></i>
                <span class="font-medium text-lg">Service</span>
            </a>

            <a href="{{ route('admin.kontak.index') }}" class="flex items-center justify-center lg:justify-start text-white space-x-4 p-4 rounded-xl hover:bg-slate-800/50 transition-all group"
                data-aos="fade-right" data-aos-delay="250">
                <i class="fas fa-envelope text-2xl group-hover:scale-110 transition-transform"></i>
                <span class="font-medium text-lg">Kontak</span>
            </a>
        </nav>
    </div>

    <!-- Profile di bawah -->
    <div class="absolute bottom-6 left-6 right-6" data-aos="fade-up" data-aos-delay="300">
        <div class="flex items-center text-white space-x-3 p-3 rounded-full bg-slate-800/30 hover:bg-slate-800/50 transition-all">
            <div class="relative">
                <div class="w-10 h-10 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center text-white font-bold">
                    D
                </div>
            </div>
            <div>
                <span class="flex items-center gap-1 font-medium">
                    <span>dms_euro</span>
                    <i class="fa-solid fa-circle-check text-blue-400 text-xs"></i>
                </span>
                <p class="text-xs text-gray-400">Online</p>
            </div>
        </div>
    </div>
</aside>
