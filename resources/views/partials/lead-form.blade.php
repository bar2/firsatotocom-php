<section id="basvuru" class="py-20 lg:py-28 hero-gradient relative overflow-hidden">
    <!-- Decorative -->
    <div class="absolute top-10 right-20 w-64 h-64 bg-white/5 rounded-full animate-float"></div>
    <div class="absolute bottom-10 left-10 w-48 h-48 bg-accent/10 rounded-full animate-pulse-ring"></div>

    <div class="relative max-w-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10 animate-fade-up">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Hemen Denemeye Başla</h2>
            <p class="text-lg text-white/70">Bilgilerinizi bırakın, dakikalar içinde Fırsat Oto'yu siz de deneyin.</p>
        </div>

        <form id="lead-form" action="{{ route('leads.store') }}" method="POST" class="animate-fade-up bg-white rounded-2xl p-8 shadow-2xl">
            @csrf
            <div class="space-y-5">
                <div>
                    <label for="name" class="block text-sm font-semibold text-navy mb-2">Ad Soyad</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        required
                        placeholder="Adınız ve soyadınız"
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent transition-all"
                    >
                </div>
                <div>
                    <label for="phone" class="block text-sm font-semibold text-navy mb-2">Telefon</label>
                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        required
                        placeholder="05XX XXX XX XX"
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent transition-all"
                    >
                </div>
            </div>

            <button type="submit" class="w-full mt-6 px-8 py-4 cta-gradient text-white font-bold text-lg rounded-xl hover:opacity-90 transition-all transform hover:scale-[1.02] shadow-lg shadow-orange-500/25">
                Hemen Denemeye Başla
            </button>

            <div id="form-success" class="hidden mt-4 p-4 bg-green-50 text-green-700 rounded-xl text-center font-medium">
                Başvurunuz alındı! En kısa sürede sizi arayacağız.
            </div>
            <div id="form-error" class="hidden mt-4 p-4 bg-red-50 text-red-700 rounded-xl text-center font-medium"></div>
        </form>
    </div>
</section>
