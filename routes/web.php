<?php

use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/api/leads', [LeadController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('leads.store');

Route::get('/sitemap.xml', function () {
    $content = '<?xml version="1.0" encoding="UTF-8"?>';
    $content .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    $content .= '<url><loc>' . config('app.url') . '</loc><changefreq>weekly</changefreq><priority>1.0</priority></url>';
    $content .= '</urlset>';

    return response($content, 200, ['Content-Type' => 'application/xml']);
});
