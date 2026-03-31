<?php

use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/api/leads', [LeadController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('leads.store');

Route::get('/leads/mark-all-reached', function (Illuminate\Http\Request $request) {
    if ($request->query('token') !== config('services.telegram.chat_id')) {
        abort(403);
    }

    $count = App\Models\Lead::where('reached_out', false)->update(['reached_out' => true]);

    return response("<h1>✅ {$count} başvuru 'ulaşıldı' olarak işaretlendi.</h1>", 200, ['Content-Type' => 'text/html; charset=utf-8']);
})->name('leads.mark-all-reached');

Route::get('/sitemap.xml', function () {
    $content = '<?xml version="1.0" encoding="UTF-8"?>';
    $content .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    $content .= '<url><loc>' . config('app.url') . '</loc><lastmod>' . date('Y-m-d') . '</lastmod><changefreq>weekly</changefreq><priority>1.0</priority></url>';
    $content .= '</urlset>';

    return response($content, 200, ['Content-Type' => 'application/xml']);
});
