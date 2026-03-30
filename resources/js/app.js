import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {

    // Scroll-triggered animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.animate-fade-up').forEach(el => observer.observe(el));

    // Live counter for "Analiz Edilen Araç"
    const liveCounter = document.getElementById('live-counter');
    if (liveCounter) {
        const epoch = new Date('2025-09-01T00:00:00+03:00').getTime();
        const perMinute = 10;
        let current = Math.floor((Date.now() - epoch) / 60000) * perMinute;
        liveCounter.textContent = current.toLocaleString('tr-TR');

        setInterval(() => {
            const bump = Math.floor(Math.random() * 6) + 5;
            current += bump;
            liveCounter.textContent = current.toLocaleString('tr-TR');
        }, 60000);
    }

    // Counter animation for other stats
    function animateCounters() {
        document.querySelectorAll('[data-count]').forEach(el => {
            const target = parseInt(el.dataset.count);
            const suffix = el.dataset.suffix || '';
            const duration = 2000;
            const start = performance.now();

            function update(now) {
                const elapsed = now - start;
                const progress = Math.min(elapsed / duration, 1);
                const eased = 1 - Math.pow(1 - progress, 3);
                el.textContent = Math.floor(target * eased).toLocaleString('tr-TR') + suffix;
                if (progress < 1) requestAnimationFrame(update);
            }

            requestAnimationFrame(update);
        });
    }

    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                statsObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });

    const statsSection = document.getElementById('stats');
    if (statsSection) statsObserver.observe(statsSection);

    // Mobile menu toggle
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // FAQ accordion
    document.querySelectorAll('[data-faq-toggle]').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector('[data-faq-icon]');
            const isOpen = !content.classList.contains('hidden');

            document.querySelectorAll('[data-faq-content]').forEach(c => c.classList.add('hidden'));
            document.querySelectorAll('[data-faq-icon]').forEach(i => { i.textContent = '+'; i.classList.remove('rotate-45'); });

            if (!isOpen) {
                content.classList.remove('hidden');
                icon.textContent = '+';
                icon.classList.add('rotate-45');
            }
        });
    });

    // Lead form submission
    const leadForm = document.getElementById('lead-form');
    if (leadForm) {
        leadForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const submitBtn = leadForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            const successMsg = document.getElementById('form-success');
            const errorMsg = document.getElementById('form-error');

            submitBtn.disabled = true;
            submitBtn.textContent = 'Gönderiliyor...';
            successMsg?.classList.add('hidden');
            errorMsg?.classList.add('hidden');

            try {
                const response = await fetch(leadForm.action, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    },
                    body: JSON.stringify({
                        name: leadForm.querySelector('[name="name"]').value,
                        phone: leadForm.querySelector('[name="phone"]').value,
                    }),
                });

                const data = await response.json();

                if (response.ok) {
                    successMsg?.classList.remove('hidden');
                    leadForm.reset();
                } else {
                    const messages = data.errors ? Object.values(data.errors).flat().join(' ') : 'Bir hata oluştu.';
                    if (errorMsg) {
                        errorMsg.textContent = messages;
                        errorMsg.classList.remove('hidden');
                    }
                }
            } catch {
                if (errorMsg) {
                    errorMsg.textContent = 'Bağlantı hatası. Lütfen tekrar deneyin.';
                    errorMsg.classList.remove('hidden');
                }
            } finally {
                submitBtn.disabled = false;
                submitBtn.textContent = originalText;
            }
        });
    }

    // Sticky nav shadow on scroll
    const nav = document.getElementById('main-nav');
    if (nav) {
        window.addEventListener('scroll', () => {
            nav.classList.toggle('shadow-lg', window.scrollY > 10);
        });
    }

});
