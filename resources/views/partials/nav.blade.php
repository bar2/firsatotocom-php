<nav id="main-nav" class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm transition-shadow duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            <!-- Logo -->
            <a href="#" class="flex items-center gap-2">
                <div class="w-8 h-8 bg-navy rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-sm">F</span>
                </div>
                <span class="text-xl font-bold text-navy">Fırsat Oto</span>
            </a>

            <!-- Desktop Nav -->
            <div class="hidden lg:flex items-center gap-8">
                <a href="#ozellikler" class="text-sm font-medium text-gray-600 hover:text-navy transition-colors">Özellikler</a>
                <a href="#nasil-calisir" class="text-sm font-medium text-gray-600 hover:text-navy transition-colors">Nasıl Çalışır</a>
                <a href="#nasil-baslarim" class="text-sm font-medium text-gray-600 hover:text-navy transition-colors">Nasıl Başlarım</a>
                <a href="#sss" class="text-sm font-medium text-gray-600 hover:text-navy transition-colors">SSS</a>
            </div>

            <!-- CTA -->
            <div class="hidden lg:block">
                <a href="#basvuru" class="inline-flex items-center px-6 py-2.5 bg-accent text-white text-sm font-semibold rounded-lg hover:bg-accent-hover transition-colors">
                    Hemen Deneyin
                </a>
            </div>

            <!-- Mobile Toggle -->
            <button id="menu-toggle" class="lg:hidden p-2 text-gray-600 hover:text-navy" aria-label="Menüyü aç">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden pb-4 border-t border-gray-100">
            <div class="flex flex-col gap-3 pt-4">
                <a href="#ozellikler" class="text-sm font-medium text-gray-600 hover:text-navy">Özellikler</a>
                <a href="#nasil-calisir" class="text-sm font-medium text-gray-600 hover:text-navy">Nasıl Çalışır</a>
                <a href="#nasil-baslarim" class="text-sm font-medium text-gray-600 hover:text-navy">Nasıl Başlarım</a>
                <a href="#sss" class="text-sm font-medium text-gray-600 hover:text-navy">SSS</a>
                <a href="#basvuru" class="inline-flex items-center justify-center px-6 py-2.5 bg-accent text-white text-sm font-semibold rounded-lg hover:bg-accent-hover transition-colors mt-2">
                    Hemen Deneyin
                </a>
            </div>
        </div>
    </div>
</nav>
