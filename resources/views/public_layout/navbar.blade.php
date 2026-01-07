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
        <a href="{{ route('profil.index') }}"
            class="relative group flex flex-col items-center
            {{ request()->routeIs('profil.*') ? 'text-white' : 'text-gray-400' }}">
            <i
                class="fas fa-home text-2xl
        {{ request()->routeIs('profil.*') ? 'text-white' : 'text-gray-300' }}"></i>

            @if (request()->routeIs('profil.*'))
                <!-- Garis indikator aktif -->
                <div
                    class="absolute -bottom-2.5 w-6 h-1
                    bg-gradient-to-r from-cyan-400 to-blue-400
                    rounded-full animate-pulse">
                </div>
            @endif
        </a>

        <!-- SEARCH / SERTIFIKAT -->
        <a href="{{ route('sertifikat.index') }}"
            class="relative group flex flex-col items-center
            {{ request()->routeIs('sertifikat.*') ? 'text-white' : 'text-gray-400' }}">
            <i
                class="fas fa-search text-2xl
        {{ request()->routeIs('sertifikat.*') ? 'text-white' : 'text-gray-300' }}"></i>

            @if (request()->routeIs('sertifikat.*'))
                <div
                    class="absolute -bottom-2.5 w-6 h-1
                    bg-gradient-to-r from-cyan-400 to-blue-400
                    rounded-full animate-pulse">
                </div>
            @endif
        </a>

        <!-- SERVICE -->
        <a href="{{ route('service.index') }}"
            class="relative group flex flex-col items-center
            {{ request()->routeIs('service.*') ? 'text-white' : 'text-gray-400' }}">
            <i
                class="fas fa-cog text-2xl
        {{ request()->routeIs('service.*') ? 'text-white' : 'text-gray-300' }}"></i>

            @if (request()->routeIs('service.*'))
                <div
                    class="absolute -bottom-2.5 w-6 h-1
                    bg-gradient-to-r from-cyan-400 to-blue-400
                    rounded-full animate-pulse">
                </div>
            @endif
        </a>

        <!-- KONTAK -->
        <a href="{{ route('kontak.index') }}"
            class="relative group flex flex-col items-center
            {{ request()->routeIs('kontak.*') ? 'text-white' : 'text-gray-400' }}">
            <i
                class="fas fa-envelope text-2xl
        {{ request()->routeIs('kontak.*') ? 'text-white' : 'text-gray-300' }}"></i>

            @if (request()->routeIs('kontak.*'))
                <div
                    class="absolute -bottom-2.5 w-6 h-1
                    bg-gradient-to-r from-cyan-400 to-blue-400
                    rounded-full animate-pulse">
                </div>
            @endif
        </a>
    </div>
</nav>
