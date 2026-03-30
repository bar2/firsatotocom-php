<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fırsat Oto — Uygun Araç Bulan İlan Takip ve Analiz Botu</title>
    <meta name="description" content="Fırsat Oto, günlük 10.000 aracı otomatik analiz ederek piyasa altı fırsatları WhatsApp ve Telegram ile anında bildirir. Galeriler ve bireysel alıcılar için ilan takip botu, fiyat düşüş bildirimi ve araç değerleme.">
    <meta name="keywords" content="ilan takip botu, sahibinden ilan takip, araç fiyat takip, uygun araç bulma, ucuz araç, kelepir araç, ikinci el araç analiz, galeri yazılımı, araç fırsat bildirimi, araç değerleme, fiyat düşüş bildirimi, oto galeri ilan takip, WhatsApp araç botu, Telegram araç bildirimi, kelepir ilan">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Fırsat Oto">
    <meta name="theme-color" content="#1B2A4A">
    <link rel="canonical" href="{{ config('app.url') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Open Graph (Facebook, LinkedIn, WhatsApp) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:site_name" content="Fırsat Oto">
    <meta property="og:title" content="Fırsat Oto — Uygun Araç Bulan İlan Takip Botu">
    <meta property="og:description" content="Günlük 10.000 aracı analiz eder, piyasa altı fırsatları WhatsApp ve Telegram ile anında bildirir. Galeriler ve alıcılar için.">
    <meta property="og:image" content="{{ config('app.url') }}/images/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/png">
    <meta property="og:locale" content="tr_TR">

    <!-- Twitter / X Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Fırsat Oto — Uygun Araç Bulan İlan Takip Botu">
    <meta name="twitter:description" content="Günlük 10.000 aracı analiz eder, piyasa altı fırsatları WhatsApp ve Telegram ile anında bildirir.">
    <meta name="twitter:image" content="{{ config('app.url') }}/images/og-image.png">

    <!-- Structured Data: Organization -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "Fırsat Oto",
        "url": "{{ config('app.url') }}",
        "description": "Türkiye'nin araç analiz ve değerleme platformu"
    }
    </script>

    <!-- Structured Data: WebSite -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "WebSite",
        "name": "Fırsat Oto",
        "url": "{{ config('app.url') }}"
    }
    </script>

    @yield('structured-data')

    <!-- Fonts (non-render-blocking) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"></noscript>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-800 bg-white antialiased">
    @yield('content')
</body>
</html>
