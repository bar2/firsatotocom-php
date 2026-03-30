<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fırsat Oto — Türkiye'nin Araç Analiz Motoru</title>
    <meta name="description" content="Fırsat Oto ile araç piyasa analizi, otomatik ilan değerlendirmesi ile uygun ilan analizi. Galeriler ve bireysel alıcılar için fırsat araçları analiz platformu.">
    <meta name="keywords" content="araç analiz, araç değerleme, oto, fırsat, uygun ilan, araç fiyat tahmini, Türkiye">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ config('app.url') }}">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:title" content="Fırsat Oto — Türkiye'nin Uygun Araç Analiz Motoru">
    <meta property="og:description" content="Araç piyasa analizi, hasar kaydı sorgulama ve fiyat tahmini. Galeriler ve bireysel alıcılar için güvenilir araç değerleme.">
    <meta property="og:locale" content="tr_TR">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Fırsat Oto — Türkiye'nin Araç Analiz Motoru">
    <meta name="twitter:description" content="Araç piyasa analizi, hasar kaydı sorgulama ve fiyat tahmini.">

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

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-800 bg-white antialiased">
    @yield('content')
</body>
</html>
