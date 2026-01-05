@extends('layout.main')
@section('desktop-content')
    <div class="max-w-6xl mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-12" data-aos="fade-up">
            <h1
                class="text-5xl font-bold mb-4 bg-gradient-to-r from-blue-400 via-cyan-400 to-purple-400 bg-clip-text text-transparent">
                Hubungi Saya
            </h1>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                Mari diskusikan project Anda. Saya akan membalas pesan Anda dalam 1-2 jam kerja.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Left Column - Contact Info -->
            <div class="space-y-8">
                <!-- Contact Card -->
                <div class="rounded-2xl bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                                border border-gray-800 p-8"
                    data-aos="fade-right">
                    <div class="text-center mb-8">
                        <div class="relative mx-auto mb-4">
                            <div
                                class="w-24 h-24 rounded-full bg-gradient-to-r from-blue-500 to-purple-600
                                            flex items-center justify-center mx-auto">
                                <span class="text-white text-3xl font-bold">D</span>
                            </div>
                            <div
                                class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 rounded-full
                                          border-4 border-[#0a0e17] flex items-center justify-center">
                                <i class="fas fa-check text-white text-xs"></i>
                            </div>
                        </div>
                        <h2 class="text-2xl font-bold">Dimas Euro</h2>
                        <p class="text-gray-400">Full Stack Developer</p>
                        <div class="flex justify-center gap-2 mt-3">
                            <span class="px-3 py-1 bg-blue-500/20 text-blue-300 rounded-full text-sm">Verified</span>
                            <span class="px-3 py-1 bg-purple-500/20 text-purple-300 rounded-full text-sm">Available
                                for Work</span>
                        </div>
                    </div>

                    <!-- Contact Methods -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-colors">
                            <div class="w-12 h-12 rounded-xl bg-blue-500/20 flex items-center justify-center">
                                <i class="fas fa-envelope text-blue-400 text-xl"></i>
                            </div>
                            <div>
                                <div class="text-sm text-gray-400">Email</div>
                                <div class="font-medium">hello@dimaseuro.com</div>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-colors">
                            <div class="w-12 h-12 rounded-xl bg-green-500/20 flex items-center justify-center">
                                <i class="fab fa-whatsapp text-green-400 text-xl"></i>
                            </div>
                            <div>
                                <div class="text-sm text-gray-400">WhatsApp</div>
                                <div class="font-medium">+62 812 3456 7890</div>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-colors">
                            <div class="w-12 h-12 rounded-xl bg-cyan-500/20 flex items-center justify-center">
                                <i class="fab fa-telegram text-cyan-400 text-xl"></i>
                            </div>
                            <div>
                                <div class="text-sm text-gray-400">Telegram</div>
                                <div class="font-medium">@dms_euro</div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="mt-8">
                        <h3 class="font-semibold mb-4">Media Sosial</h3>
                        <div class="grid grid-cols-6 gap-2">
                            <a href="#"
                                class="p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors text-center">
                                <i class="fab fa-instagram text-xl text-pink-400"></i>
                            </a>
                            <a href="#"
                                class="p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors text-center">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                            <a href="#"
                                class="p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors text-center">
                                <i class="fab fa-linkedin text-xl text-blue-400"></i>
                            </a>
                            <a href="#"
                                class="p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors text-center">
                                <i class="fab fa-twitter text-xl text-sky-400"></i>
                            </a>
                            <a href="#"
                                class="p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors text-center">
                                <i class="fab fa-youtube text-xl text-red-400"></i>
                            </a>
                            <a href="#"
                                class="p-3 bg-white/5 rounded-xl hover:bg-white/10 transition-colors text-center">
                                <i class="fab fa-dribbble text-xl text-pink-500"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Quick Contact -->
                <div class="rounded-2xl p-8 bg-gradient-to-r from-blue-900/30 to-purple-900/30
                                border border-blue-500/30"
                    data-aos="fade-right" data-aos-delay="100">
                    <h3 class="text-xl font-bold mb-4">Hubungi Langsung</h3>
                    <p class="text-gray-400 mb-6">Butuh respon cepat? Gunakan salah satu opsi:</p>
                    <div class="space-y-3">
                        <button onclick="showContactAlert('telepon')"
                            class="w-full py-3 bg-blue-600 hover:bg-blue-700 rounded-lg font-medium transition-colors flex items-center justify-center">
                            <i class="fas fa-phone mr-3"></i>Telepon Sekarang
                        </button>
                        <button onclick="showContactAlert('whatsapp')"
                            class="w-full py-3 bg-green-600 hover:bg-green-700 rounded-lg font-medium transition-colors flex items-center justify-center">
                            <i class="fab fa-whatsapp mr-3"></i>Kirim WhatsApp
                        </button>
                        <button onclick="showContactAlert('email')"
                            class="w-full py-3 bg-gray-800 hover:bg-gray-700 rounded-lg font-medium transition-colors flex items-center justify-center">
                            <i class="fas fa-envelope mr-3"></i>Kirim Email
                        </button>
                    </div>
                </div>
            </div>

            <!-- Right Column - Instagram-style Message Form -->
            <div data-aos="fade-left">
                <div
                    class="rounded-2xl bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                                border border-gray-800 overflow-hidden h-full">

                    <!-- Instagram-style Header -->
                    <div class="p-6 border-b border-gray-800">
                        <div class="flex items-center gap-3">
                            <div class="relative">
                                <div
                                    class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center">
                                    <span class="text-white font-bold">D</span>
                                </div>
                            </div>
                            <div>
                                <div class="font-bold">Kirim Pesan ke dms_euro</div>
                                <div class="text-sm text-green-400 flex items-center">
                                    <div class="w-2 h-2 rounded-full bg-green-500 mr-1 animate-pulse"></div>
                                    Membalas dalam 1-2 jam
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Instagram-style Form -->
                    <form id="contactForm" class="p-6">
                        <div class="space-y-6">
                            <!-- Name Field -->
                            <div>
                                <label class="block text-sm font-medium mb-2">Nama Lengkap</label>
                                <div class="relative">
                                    <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <input type="text" placeholder="Masukkan nama Anda" required
                                        class="w-full pl-10 pr-4 py-3 bg-gray-900/50 border border-gray-700
                                                      rounded-xl focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500
                                                      placeholder-gray-500">
                                </div>
                            </div>

                            <!-- Email Field -->
                            <div>
                                <label class="block text-sm font-medium mb-2">Email</label>
                                <div class="relative">
                                    <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <input type="email" placeholder="email@anda.com" required
                                        class="w-full pl-10 pr-4 py-3 bg-gray-900/50 border border-gray-700
                                                      rounded-xl focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500
                                                      placeholder-gray-500">
                                </div>
                            </div>

                            <!-- Subject Field -->
                            <div>
                                <label class="block text-sm font-medium mb-2">Subjek</label>
                                <div class="relative">
                                    <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                        <i class="fas fa-tag"></i>
                                    </div>
                                    <select
                                        class="w-full pl-10 pr-4 py-3 bg-gray-900/50 border border-gray-700
                                                      rounded-xl focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500
                                                      appearance-none text-white">
                                        <option value="" disabled selected>Pilih subjek pesan</option>
                                        <option value="web-dev">Web Development</option>
                                        <option value="mobile-app">Mobile App Development</option>
                                        <option value="ui-ux">UI/UX Design</option>
                                        <option value="consultation">Konsultasi Project</option>
                                        <option value="other">Lainnya</option>
                                    </select>
                                    <div class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Instagram-style Message Box -->
                            <div>
                                <label class="block text-sm font-medium mb-2">Pesan</label>
                                <div class="relative">
                                    <!-- Message box styling like Instagram -->
                                    <div class="bg-gray-900/50 border border-gray-700 rounded-xl overflow-hidden">
                                        <textarea id="messageInput" placeholder="Tulis pesan Anda di sini..." rows="6" required
                                            class="w-full px-4 py-3 bg-transparent focus:outline-none
                                                             resize-none placeholder-gray-500 text-white"></textarea>

                                        <!-- Instagram-style bottom bar -->
                                        <div
                                            class="flex items-center justify-between px-4 py-3 border-t border-gray-700 bg-gray-900/30">
                                            <div class="flex items-center gap-3">
                                                <!-- Emoji button -->
                                                <button type="button" onclick="insertEmoji('😊')"
                                                    class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-white/5">
                                                    <i class="far fa-smile text-gray-400"></i>
                                                </button>
                                                <!-- Attachment button -->
                                                <button type="button"
                                                    class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-white/5">
                                                    <i class="fas fa-paperclip text-gray-400"></i>
                                                </button>
                                                <!-- Photo button -->
                                                <button type="button"
                                                    class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-white/5">
                                                    <i class="far fa-image text-gray-400"></i>
                                                </button>
                                            </div>

                                            <!-- Character count -->
                                            <div class="text-xs text-gray-500">
                                                <span id="charCount">0</span>/1000
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- File Upload (Instagram-style) -->
                            <div>
                                <div
                                    class="border-2 border-dashed border-gray-700 rounded-xl p-6 text-center hover:border-blue-500/50 transition-colors cursor-pointer">
                                    <i class="fas fa-cloud-upload-alt text-3xl text-gray-500 mb-3"></i>
                                    <p class="text-gray-400 mb-1">Upload file pendukung</p>
                                    <p class="text-xs text-gray-500">PDF, JPG, PNG (Max. 5MB)</p>
                                    <input type="file" class="hidden" id="fileUpload">
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="pt-4">
                                <button type="submit"
                                    class="w-full py-4 rounded-xl bg-gradient-to-r from-blue-600 to-purple-600
                                                   font-bold text-lg hover:opacity-90 transition-opacity
                                                   flex items-center justify-center group">
                                    <i class="fab fa-instagram mr-3 text-lg"></i>
                                    Kirim Pesan
                                    <i class="fas fa-paper-plane ml-3 group-hover:translate-x-2 transition-transform"></i>
                                </button>
                                <p class="text-xs text-center text-gray-500 mt-3">
                                    <i class="fas fa-lock mr-1"></i>
                                    Pesan Anda aman dan akan direspon secepatnya
                                </p>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Status Info -->
                <div class="mt-6 p-4 rounded-xl bg-gray-900/50 border border-gray-800">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-green-500/20 flex items-center justify-center">
                                <i class="fas fa-bolt text-green-400"></i>
                            </div>
                            <div>
                                <div class="font-medium">Respon Cepat</div>
                                <div class="text-sm text-gray-400">Biasanya dalam 1-2 jam</div>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="font-medium">Jam Kerja</div>
                            <div class="text-sm text-gray-400">09:00 - 18:00 WIB</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('mobile-content')
    <div class="mb-8">
        <!-- Header Mobile -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-3 bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">
                Hubungi Saya
            </h1>
            <p class="text-gray-400">
                Mari diskusikan project Anda
            </p>
        </div>

        <!-- Instagram-style Form Mobile -->
        <div
            class="rounded-2xl bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                    border border-gray-800 p-6 mb-6">
            <!-- Header -->
            <div class="flex items-center gap-3 mb-6">
                <div class="relative">
                    <div
                        class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center">
                        <span class="text-white font-bold">D</span>
                    </div>
                </div>
                <div>
                    <div class="font-bold">Kirim Pesan</div>
                    <div class="text-sm text-green-400 flex items-center">
                        <div class="w-2 h-2 rounded-full bg-green-500 mr-1 animate-pulse"></div>
                        Membalas dalam 1-2 jam
                    </div>
                </div>
            </div>

            <!-- Form -->
            <form id="mobileContactForm" class="space-y-4">
                <div>
                    <input type="text" placeholder="Nama Anda" required
                        class="w-full px-4 py-3 bg-gray-900/50 border border-gray-700
                                  rounded-xl focus:outline-none focus:border-blue-500
                                  placeholder-gray-500">
                </div>

                <div>
                    <input type="email" placeholder="Email" required
                        class="w-full px-4 py-3 bg-gray-900/50 border border-gray-700
                                  rounded-xl focus:outline-none focus:border-blue-500
                                  placeholder-gray-500">
                </div>

                <div>
                    <select
                        class="w-full px-4 py-3 bg-gray-900/50 border border-gray-700
                                  rounded-xl focus:outline-none focus:border-blue-500
                                  appearance-none text-white">
                        <option value="" disabled selected>Pilih subjek</option>
                        <option value="web-dev">Web Development</option>
                        <option value="mobile-app">Mobile App</option>
                        <option value="ui-ux">UI/UX Design</option>
                    </select>
                </div>

                <!-- Instagram-style Message Box Mobile -->
                <div class="bg-gray-900/50 border border-gray-700 rounded-xl overflow-hidden">
                    <textarea placeholder="Tulis pesan Anda..." rows="4" required
                        class="w-full px-4 py-3 bg-transparent focus:outline-none
                                     resize-none placeholder-gray-500 text-white"></textarea>

                    <div class="flex items-center justify-between px-3 py-2 border-t border-gray-700 bg-gray-900/30">
                        <div class="flex items-center gap-2">
                            <button type="button" class="p-2">
                                <i class="far fa-smile text-gray-400"></i>
                            </button>
                            <button type="button" class="p-2">
                                <i class="fas fa-paperclip text-gray-400"></i>
                            </button>
                            <button type="button" class="p-2">
                                <i class="far fa-image text-gray-400"></i>
                            </button>
                        </div>
                        <div class="text-xs text-gray-500">0/500</div>
                    </div>
                </div>

                <!-- Submit Button Mobile -->
                <button type="submit"
                    class="w-full py-3 rounded-xl bg-gradient-to-r from-blue-600 to-purple-600
                               font-bold mt-4 flex items-center justify-center">
                    <i class="fab fa-instagram mr-2"></i>
                    Kirim Pesan
                </button>
            </form>
        </div>

        <!-- Contact Info Mobile -->
        <div
            class="rounded-2xl bg-gradient-to-br from-gray-900/90 to-gray-950/90 backdrop-blur-xl
                    border border-gray-800 p-6 mb-6">
            <h3 class="text-lg font-bold mb-4">Kontak Langsung</h3>

            <div class="grid grid-cols-2 gap-3 mb-6">
                <button onclick="showContactAlert('email')"
                    class="p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-colors text-center">
                    <i class="fas fa-envelope text-blue-400 text-xl mb-2"></i>
                    <div class="font-medium">Email</div>
                </button>

                <button onclick="showContactAlert('whatsapp')"
                    class="p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-colors text-center">
                    <i class="fab fa-whatsapp text-green-400 text-xl mb-2"></i>
                    <div class="font-medium">WhatsApp</div>
                </button>

                <button onclick="showContactAlert('telegram')"
                    class="p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-colors text-center">
                    <i class="fab fa-telegram text-cyan-400 text-xl mb-2"></i>
                    <div class="font-medium">Telegram</div>
                </button>

                <button onclick="showContactAlert('telepon')"
                    class="p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-colors text-center">
                    <i class="fas fa-phone text-purple-400 text-xl mb-2"></i>
                    <div class="font-medium">Telepon</div>
                </button>
            </div>

            <!-- Social Media Mobile -->
            <div>
                <h4 class="font-semibold mb-3">Media Sosial</h4>
                <div class="flex justify-center gap-3">
                    <a href="#" class="p-3 bg-white/5 rounded-xl">
                        <i class="fab fa-instagram text-pink-400"></i>
                    </a>
                    <a href="#" class="p-3 bg-white/5 rounded-xl">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="p-3 bg-white/5 rounded-xl">
                        <i class="fab fa-linkedin text-blue-400"></i>
                    </a>
                    <a href="#" class="p-3 bg-white/5 rounded-xl">
                        <i class="fab fa-twitter text-sky-400"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Status Info Mobile -->
        <div class="p-4 rounded-xl bg-gray-900/50 border border-gray-800 text-center">
            <div class="flex items-center justify-center gap-2 mb-2">
                <i class="fas fa-bolt text-green-400"></i>
                <div class="font-medium">Respon Cepat</div>
            </div>
            <div class="text-sm text-gray-400">Biasanya dalam 1-2 jam kerja</div>
        </div>
    </div>
@endsection
