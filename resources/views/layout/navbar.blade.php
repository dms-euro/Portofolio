<nav
    class="fixed bottom-3 left-1/2 -translate-x-1/2
                w-[95%] max-w-md
                border border-white/20
                rounded-full
                py-3 px-6
                bg-slate-950
                text-white
                z-50">
    <div class="flex justify-between items-center">
        <!-- HOME -->
        <a href="{{ route('admin.profil.index') }}" class="relative group flex flex-col items-center">
            <i class="fas fa-home text-2xl text-gray-300"></i>
                <!-- Garis indikator aktif -->
            <div class="absolute -bottom-2.5 w-6 h-1 bg-gradient-to-r from-cyan-400 to-blue-400 rounded-full animate-pulse"></div>
        </a>

        <!-- SEARCH -->
        <a href="{{ route('admin.sertifikat.index') }}" class="relative group flex flex-col items-center">
            <i class="fas fa-search text-2xl text-gray-300"></i>
        </a>

        <!-- SERVICE -->
        <a href="{{ route('admin.service.index') }}" class="relative group flex flex-col items-center">
            <i class="fas fa-cog text-2xl text-gray-300"></i>
        </a>

        <!-- KONTAK -->
        <a href="{{ route('admin.kontak.index') }}" class="relative group flex flex-col items-center">
            <i class="fas fa-envelope text-2xl text-gray-300"></i>
        </a>
    </div>
</nav>
