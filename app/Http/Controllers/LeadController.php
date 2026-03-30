<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Services\TelegramService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(Request $request, TelegramService $telegram): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => ['required', 'string', 'max:20', 'regex:/^(\+90|0)?[0-9]{10}$/'],
        ]);

        $lead = Lead::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'ip_address' => $request->ip(),
        ]);

        $telegram->sendMessage(
            "<b>🚗 Yeni Başvuru!</b>\n\n"
            . "<b>Ad Soyad:</b> {$lead->name}\n"
            . "<b>Telefon:</b> {$lead->phone}\n"
            . "<b>Tarih:</b> {$lead->created_at->format('d.m.Y H:i')}"
        );

        return response()->json(['success' => true, 'message' => 'Başvurunuz alındı!']);
    }
}
