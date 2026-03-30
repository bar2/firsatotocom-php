<section class="py-16 lg:py-24 bg-light overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 animate-fade-up">
            <h2 class="text-3xl lg:text-4xl font-bold text-navy mb-4">Fırsat Oto Nasıl Çalışır?</h2>
            <p class="text-lg text-gray-600">Her gün binlerce ilan analiz edilir, sadece fırsatlar size ulaşır.</p>
        </div>

        <!-- Production Line Animation -->
        <div class="lifecycle-wrapper">
            <div class="lifecycle-container">
                <!-- Track line -->
                <div class="lifecycle-track"></div>
                <div class="lifecycle-track-reject"></div>

                <!-- Stage 1: Source Box -->
                <div class="lifecycle-stage lifecycle-source">
                    <div class="lifecycle-box bg-gray-200 border-gray-300">
                        <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                    </div>
                    <span class="lifecycle-label">İlanlar</span>
                </div>

                <!-- Stage 2: Fırsat Oto Box -->
                <div class="lifecycle-stage lifecycle-engine">
                    <div class="lifecycle-box bg-navy border-navy text-white lifecycle-engine-box">
                        <span class="text-xs font-bold leading-tight text-center">Fırsat<br>Oto</span>
                    </div>
                    <span class="lifecycle-label">Analiz</span>
                </div>

                <!-- Stage 3a: Trash (rejected) -->
                <div class="lifecycle-stage lifecycle-trash">
                    <div class="lifecycle-box bg-red-50 border-red-200">
                        <svg class="w-7 h-7 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                    </div>
                    <span class="lifecycle-label text-red-400">Uygun Değil</span>
                </div>

                <!-- Stage 3b: Phone (accepted) -->
                <div class="lifecycle-stage lifecycle-phone">
                    <div class="lifecycle-box bg-green-50 border-green-300">
                        <svg class="w-7 h-7 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                    </div>
                    <span class="lifecycle-label text-green-600">Bildirim</span>
                </div>

                <!-- Cars -->
                <div class="lifecycle-car car-1">
                    <svg class="w-7 h-5" viewBox="0 0 28 20" fill="none"><rect x="2" y="6" width="24" height="10" rx="3" fill="#1B2A4A"/><rect x="6" y="2" width="16" height="8" rx="2" fill="#3B5998"/><circle cx="8" cy="17" r="2.5" fill="#374151"/><circle cx="20" cy="17" r="2.5" fill="#374151"/><rect x="7" y="3" width="5" height="5" rx="1" fill="#93c5fd" opacity="0.5"/><rect x="14" y="3" width="5" height="5" rx="1" fill="#93c5fd" opacity="0.5"/></svg>
                </div>
                <div class="lifecycle-car car-2">
                    <svg class="w-7 h-5" viewBox="0 0 28 20" fill="none"><rect x="2" y="6" width="24" height="10" rx="3" fill="#1B2A4A"/><rect x="6" y="2" width="16" height="8" rx="2" fill="#3B5998"/><circle cx="8" cy="17" r="2.5" fill="#374151"/><circle cx="20" cy="17" r="2.5" fill="#374151"/><rect x="7" y="3" width="5" height="5" rx="1" fill="#93c5fd" opacity="0.5"/><rect x="14" y="3" width="5" height="5" rx="1" fill="#93c5fd" opacity="0.5"/></svg>
                </div>
                <div class="lifecycle-car car-3">
                    <svg class="w-7 h-5" viewBox="0 0 28 20" fill="none"><rect x="2" y="6" width="24" height="10" rx="3" fill="#F97316"/><rect x="6" y="2" width="16" height="8" rx="2" fill="#FB923C"/><circle cx="8" cy="17" r="2.5" fill="#374151"/><circle cx="20" cy="17" r="2.5" fill="#374151"/><rect x="7" y="3" width="5" height="5" rx="1" fill="#fde68a" opacity="0.5"/><rect x="14" y="3" width="5" height="5" rx="1" fill="#fde68a" opacity="0.5"/></svg>
                </div>
            </div>
        </div>

        <!-- Legend (outside wrapper so it's not affected by scaling) -->
        <div class="flex items-center justify-center gap-6 mt-4 text-sm text-gray-500">
            <div class="flex items-center gap-2">
                <div class="w-4 h-3 bg-navy rounded-sm"></div>
                <span>Normal ilan</span>
            </div>
            <div class="flex items-center gap-2">
                <div class="w-4 h-3 bg-accent rounded-sm"></div>
                <span>Fırsat ilan</span>
            </div>
        </div>
    </div>
</section>
