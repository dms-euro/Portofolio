<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Admin | Dimas Euro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-black text-white min-h-screen flex items-center justify-center p-4 overflow-hidden">

    <!-- Background -->
    <div class="fixed inset-0 bg-gradient-to-br from-gray-900 via-black to-gray-900"></div>

    <!-- Container -->
    <div class="relative w-full max-w-md z-10" data-aos="zoom-in">
        <div
            class="absolute -inset-1 bg-gradient-to-r from-blue-500/20 to-purple-500/20
                rounded-2xl blur-xl">
        </div>

        <div
            class="relative bg-black/40 backdrop-blur-xl border border-gray-800/50
                rounded-2xl p-8 shadow-2xl">

            <!-- Header -->
            <div class="text-center mb-10" data-aos="fade-down">
                <div
                    class="mx-auto w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-purple-600
                        flex items-center justify-center mb-4">
                    <i class="fas fa-terminal text-2xl"></i>
                </div>
                <h1 class="text-3xl font-light tracking-tight">ADMIN ACCESS</h1>
                <p class="text-gray-400 text-sm mt-2">Dimas Euro • Portfolio</p>
            </div>

            <!-- Form -->
            <form class="space-y-6" data-aos="fade-up">
                <!-- Username -->
                <div class="relative">
                    <i class="fas fa-user absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <input type="text" required placeholder="Username"
                        class="w-full pl-12 pr-4 py-3 bg-black/30 border border-gray-700
                              rounded-lg focus:border-blue-500/50 focus:outline-none
                              placeholder-gray-500 transition-all">
                </div>

                <!-- Password -->
                <div class="relative">
                    <i class="fas fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <input id="password" type="password" required placeholder="Password"
                        class="w-full pl-12 pr-12 py-3 bg-black/30 border border-gray-700
                              rounded-lg focus:border-blue-500/50 focus:outline-none
                              placeholder-gray-500 transition-all">
                    <button type="button" data-target="password"
                        class="absolute right-4 top-1/2 -translate-y-1/2
                               text-gray-400 hover:text-white transition">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>

                <!-- Submit -->
                <button type="submit"
                    class="w-full py-3 rounded-lg bg-gradient-to-r from-blue-500/20 to-purple-500/20
                           border border-blue-500/30 hover:from-blue-500/30 hover:to-purple-500/30
                           hover:border-blue-500/50 transition-all font-medium">
                    <i class="fas fa-arrow-right-to-bracket mr-2"></i>
                    ACCESS SYSTEM
                </button>

                <p class="text-xs text-center text-gray-500 border-t border-gray-800 pt-4">
                    <i class="fas fa-shield-alt mr-1"></i>
                    Secured Access • Activity Logged
                </p>
            </form>

            <!-- Back -->
            <div class="text-center mt-8" data-aos="fade-up">
                <a href="index.html"
                    class="inline-flex items-center gap-2 text-sm text-gray-400 hover:text-white transition">
                    <i class="fas fa-chevron-left text-xs"></i>
                    Return to Portfolio
                </a>
            </div>
        </div>
    </div>

    <!-- Status -->
    <div class="fixed bottom-8 inset-x-0 text-center text-xs text-gray-500 z-10">
        <span class="inline-flex items-center gap-2">
            <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
            SYSTEM • ONLINE
        </span>
    </div>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 50
        });
    </script>
    <script>
        // Password toggle
        document.querySelectorAll('button[data-target]').forEach(btn => {
            btn.addEventListener('click', () => {
                const input = document.getElementById(btn.dataset.target);
                const icon = btn.querySelector('i');

                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.replace('fa-eye', 'fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.replace('fa-eye-slash', 'fa-eye');
                }
            });
        });
    </script>

</body>

</html>
