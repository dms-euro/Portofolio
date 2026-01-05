@extends('layout.main')
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
                    <div class="text-gray-400 text-sm">terminal — bash — 80×24</div>
                </div>

                <!-- Console Body -->
                <div class="font-mono text-gray-300 space-y-4">
                    <div class="flex items-center">
                        <span class="text-green-400 mr-2">$</span>
                        <span>npm run dev</span>
                    </div>

                    <div class="text-cyan-400">
                        > Starting development server...
                    </div>

                    <div class="text-yellow-400">
                        > Server running at <span class="text-white">http://localhost:3000</span>
                    </div>

                    <!-- Typing Text -->
                    <div class="mt-8">
                        <div class="text-lg">
                            <span class="text-blue-400">console</span>.<span class="text-yellow-400">log</span>(
                            <span class="text-green-400">"Siap melayani Anda membuat "</span>
                            );
                        </div>

                        <div class="mt-4 text-xl font-semibold">
                            <span
                                class="inline-block overflow-hidden whitespace-nowrap border-r-4 border-blue-400 animate-typing animate-blink">
                                <span class="text-blue-300">web landing page</span> /
                                <span class="text-purple-300">web app</span> /
                                <span class="text-cyan-300">mobile application</span> /
                                <span class="text-green-300">custom software</span>
                            </span>
                        </div>

                        <div class="mt-4 text-gray-400">
                            // Dengan teknologi terkini dan performa optimal
                        </div>
                    </div>

                    <!-- Hire Me Button -->
                    <div class="mt-8">
                        <span class="text-green-400 mr-2">$</span>
                        <span class="text-white">hiring_status</span> =
                        <span class="text-yellow-400">"available"</span>;
                    </div>
                </div>

                <!-- Let's Hire Me Section -->
                <div
                    class="mt-10 p-6 rounded-xl bg-gradient-to-r from-blue-900/30 to-purple-900/30
                                border border-blue-500/30 text-center">
                    <h3
                        class="text-2xl font-bold mb-4 bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">
                        "Let's build something amazing together!"
                    </h3>
                    <p class="text-gray-400 mb-6">
                        Dari konsep hingga implementasi, saya siap membantu mewujudkan visi digital Anda.
                    </p>
                    <button
                        class="px-8 py-3 rounded-full bg-gradient-to-r from-blue-600 to-purple-600
                                       text-white font-semibold text-lg hover:scale-105 transition-transform
                                       hover:shadow-[0_0_40px_rgba(99,102,241,0.5)]">
                        <i class="fas fa-handshake mr-2"></i>
                        Let's Hire Me
                    </button>
                </div>
            </div>
        </section>

        <!-- 3. SERVICE CARDS -->
        <section>
            <div class="text-center mb-12">
                <h2
                    class="text-4xl font-bold mb-4 bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">
                    Apa Yang Bisa Saya Kerjakan
                </h2>
                <p class="text-gray-400 max-w-3xl mx-auto">
                    Berikut adalah detail lengkap layanan yang saya tawarkan dengan solusi end-to-end
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
                                <i class="fas fa-laptop-code text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-4 text-white">Web Development</h3>
                                <p class="text-gray-400 mb-6">
                                    Membangun website responsif, modern, dan performa tinggi menggunakan teknologi terbaru.
                                </p>
                                <div class="space-y-3">
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>Custom Website dengan React/Next.js</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>Backend API dengan Laravel/Node.js</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>Optimasi SEO dan Performa</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>Integrasi Payment Gateway</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 - UI/UX Design -->
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
                                <i class="fas fa-palette text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-4 text-white">UI/UX Design</h3>
                                <p class="text-gray-400 mb-6">
                                    Desain antarmuka yang menarik dan pengalaman pengguna yang intuitif.
                                </p>
                                <div class="space-y-3">
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>Wireframing dan Prototyping</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>User Research & User Testing</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>Design System Development</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>Mobile App UI Design</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 - Mobile Apps -->
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
                                <i class="fas fa-mobile-alt text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-4 text-white">Mobile Applications</h3>
                                <p class="text-gray-400 mb-6">
                                    Aplikasi mobile native dan hybrid untuk berbagai platform.
                                </p>
                                <div class="space-y-3">
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>React Native Development</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>Flutter Apps Development</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>Push Notification Integration</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>App Store Deployment</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 - E-commerce -->
                <div class="group relative">
                    <div
                        class="absolute -inset-3 bg-gradient-to-r from-yellow-500/20 to-orange-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <div
                        class="relative rounded-2xl p-8 bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                                    border border-gray-800 hover:border-yellow-500/50 transition-all duration-500">
                        <div class="flex items-start gap-6">
                            <div
                                class="w-16 h-16 rounded-2xl bg-gradient-to-br from-yellow-600 to-orange-700
                                            flex items-center justify-center shadow-lg shadow-yellow-500/30">
                                <i class="fas fa-shopping-cart text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-4 text-white">E-commerce Solutions</h3>
                                <p class="text-gray-400 mb-6">
                                    Platform jual beli online dengan fitur lengkap dan terintegrasi.
                                </p>
                                <div class="space-y-3">
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>Online Store Development</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>Payment Gateway Integration</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>Inventory Management System</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>Analytics Dashboard</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 5 - Cloud & DevOps -->
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
                                <i class="fas fa-cloud text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-4 text-white">Cloud & DevOps</h3>
                                <p class="text-gray-400 mb-6">
                                    Deployment, scaling, dan maintenance aplikasi di cloud.
                                </p>
                                <div class="space-y-3">
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>Cloud Infrastructure Setup</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>CI/CD Pipeline Automation</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>Docker & Kubernetes</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>Performance Monitoring</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 6 - Maintenance -->
                <div class="group relative">
                    <div
                        class="absolute -inset-3 bg-gradient-to-r from-red-500/20 to-pink-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <div
                        class="relative rounded-2xl p-8 bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                                    border border-gray-800 hover:border-red-500/50 transition-all duration-500">
                        <div class="flex items-start gap-6">
                            <div
                                class="w-16 h-16 rounded-2xl bg-gradient-to-br from-red-600 to-pink-700
                                            flex items-center justify-center shadow-lg shadow-red-500/30">
                                <i class="fas fa-tools text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-4 text-white">Maintenance & Support</h3>
                                <p class="text-gray-400 mb-6">
                                    Dukungan berkelanjutan untuk aplikasi yang sudah berjalan.
                                </p>
                                <div class="space-y-3">
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>Bug Fixing & Updates</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>Security Updates</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>Performance Optimization</span>
                                    </div>
                                    <div class="flex items-center text-gray-300">
                                        <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                        <span>24/7 Technical Support</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. CALL TO ACTION - LET'S HIRE ME -->
        <section class="relative">
            <div
                class="absolute -inset-4 bg-gradient-to-r from-blue-500/10 via-purple-500/10 to-cyan-500/10 rounded-3xl blur-xl">
            </div>

            <div
                class="relative rounded-2xl p-12 text-center bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                            border border-gray-800">
                <div class="max-w-3xl mx-auto">
                    <h2
                        class="text-4xl font-bold mb-6 bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">
                        "Kata-kata yang menginspirasi, solusi yang terpercaya"
                    </h2>

                    <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                        Dalam setiap baris kode, ada cerita. Dalam setiap desain, ada emosi.
                        Saya tidak hanya membuat aplikasi, saya membangun pengalaman yang bermakna.
                    </p>

                    <div class="space-y-4 text-gray-400 mb-10">
                        <p>✨ <span class="text-white">Komitmen</span> terhadap kualitas dan deadline</p>
                        <p>🚀 <span class="text-white">Inovasi</span> dalam setiap solusi</p>
                        <p>🤝 <span class="text-white">Kolaborasi</span> yang transparan</p>
                        <p>🎯 <span class="text-white">Hasil</span> yang melebihi ekspektasi</p>
                    </div>

                    <div class="flex flex-col md:flex-row gap-6 justify-center items-center">
                        <button
                            class="px-10 py-4 rounded-full bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold text-lg hover:scale-105 transition-transform hover:shadow-[0_0_50px_rgba(99,102,241,0.6)] group">
                            <i class="fas fa-rocket mr-3 group-hover:rotate-45 transition-transform"></i>
                            Let's Hire Me
                        </button>

                        <a href="kontak.html"
                            class="px-10 py-4 rounded-full border-2 border-blue-500/50 text-blue-400 font-bold text-lg hover:bg-blue-500/10 transition-all">
                            <i class="fas fa-comment-dots mr-3"></i>
                            Konsultasi Gratis
                        </a>
                    </div>

                    <div class="mt-8 text-sm text-gray-500">
                        <i class="fas fa-clock mr-2"></i>
                        Respons dalam 1-2 jam kerja | Garansi revisi | Support 24/7
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
        <!-- Hero Section Mobile -->
        <section class="mb-10 mt-4">
            <div
                class="rounded-2xl bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
            border border-gray-800 p-6 mb-6">
                <div class="font-mono text-sm">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="flex gap-1">
                            <div class="w-2 h-2 rounded-full bg-red-500"></div>
                            <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                            <div class="w-2 h-2 rounded-full bg-green-500"></div>
                        </div>
                        <span class="text-gray-400">terminal</span>
                    </div>

                    <div class="space-y-2 text-gray-300">
                        <div class="flex items-center">
                            <span class="text-green-400 mr-1">$</span>
                            <span>dev --service</span>
                        </div>

                        <div class="text-cyan-400">> Ready to serve...</div>

                        <div class="mt-4">
                            <div class="text-blue-300 font-semibold">
                                Siap membuat:
                            </div>
                            <div class="mt-2">
                                <div class="text-purple-300">• Web Landing Page</div>
                                <div class="text-cyan-300">• Web Application</div>
                                <div class="text-green-300">• Mobile Apps</div>
                                <div class="text-yellow-300">• Custom Software</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="mt-6 p-4 rounded-xl bg-gradient-to-r from-blue-900/30 to-purple-900/30
                            border border-blue-500/30 text-center">
                    <button
                        class="w-full py-3 rounded-full bg-gradient-to-r from-blue-600 to-purple-600 text-white font-medium">
                        <i class="fas fa-handshake mr-2"></i>
                        Let's Hire Me
                    </button>
                </div>
            </div>
        </section>

        <!-- Service Cards Mobile -->
        <section class="space-y-6 mb-10">
            <h2 class="text-2xl font-bold mb-6 text-center text-white">
                Layanan Saya
            </h2>

            <!-- Mobile Card 1 -->
            <div
                class="rounded-2xl p-6 bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
            border border-gray-800">
                <div class="flex items-start gap-4">
                    <div
                        class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-600 to-blue-700
                                flex items-center justify-center">
                        <i class="fas fa-laptop-code text-white"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold mb-2 text-white">Web Development</h3>
                        <p class="text-sm text-gray-400 mb-3">
                            Website responsif dengan teknologi modern
                        </p>
                        <div class="space-y-1 text-xs">
                            <div class="flex items-center text-gray-300">
                                <i class="fas fa-check text-green-500 mr-2 text-xs"></i>
                                <span>Custom React/Next.js</span>
                            </div>
                            <div class="flex items-center text-gray-300">
                                <i class="fas fa-check text-green-500 mr-2 text-xs"></i>
                                <span>Backend API</span>
                            </div>
                            <div class="flex items-center text-gray-300">
                                <i class="fas fa-check text-green-500 mr-2 text-xs"></i>
                                <span>SEO Optimization</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Card 2 -->
            <div
                class="rounded-2xl p-6 bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                        border border-gray-800">
                <div class="flex items-start gap-4">
                    <div
                        class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-600 to-pink-700
                                flex items-center justify-center">
                        <i class="fas fa-palette text-white"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold mb-2 text-white">UI/UX Design</h3>
                        <p class="text-sm text-gray-400 mb-3">
                            Desain antarmuka yang menarik
                        </p>
                        <div class="space-y-1 text-xs">
                            <div class="flex items-center text-gray-300">
                                <i class="fas fa-check text-green-500 mr-2 text-xs"></i>
                                <span>Wireframing</span>
                            </div>
                            <div class="flex items-center text-gray-300">
                                <i class="fas fa-check text-green-500 mr-2 text-xs"></i>
                                <span>User Testing</span>
                            </div>
                            <div class="flex items-center text-gray-300">
                                <i class="fas fa-check text-green-500 mr-2 text-xs"></i>
                                <span>Design System</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Card 3 -->
            <div
                class="rounded-2xl p-6 bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                        border border-gray-800">
                <div class="flex items-start gap-4">
                    <div
                        class="w-12 h-12 rounded-xl bg-gradient-to-br from-green-600 to-emerald-700
                                flex items-center justify-center">
                        <i class="fas fa-mobile-alt text-white"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold mb-2 text-white">Mobile Apps</h3>
                        <p class="text-sm text-gray-400 mb-3">
                            Aplikasi iOS & Android
                        </p>
                        <div class="space-y-1 text-xs">
                            <div class="flex items-center text-gray-300">
                                <i class="fas fa-check text-green-500 mr-2 text-xs"></i>
                                <span>React Native</span>
                            </div>
                            <div class="flex items-center text-gray-300">
                                <i class="fas fa-check text-green-500 mr-2 text-xs"></i>
                                <span>Flutter Apps</span>
                            </div>
                            <div class="flex items-center text-gray-300">
                                <i class="fas fa-check text-green-500 mr-2 text-xs"></i>
                                <span>App Deployment</span>
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
