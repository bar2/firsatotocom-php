<?php

namespace App\Console\Commands;

use App\Models\Lead;
use App\Services\TelegramService;
use Illuminate\Console\Command;
class RemindUnreachedLeads extends Command
{
    protected $signature = 'leads:remind';
    protected $description = 'Send Telegram reminders for leads not yet reached out to';

    public function handle(TelegramService $telegram): void
    {
        $leads = Lead::where('reached_out', false)->get();

        if ($leads->isEmpty()) {
            $this->info('No unreached leads.');
            return;
        }

        $lines = $leads->map(fn ($lead) => "• {$lead->name} — {$lead->phone} ({$lead->created_at->diffForHumans()})");

        $markAllUrl = route('leads.mark-all-reached', ['token' => config('services.telegram.chat_id')]);

        $telegram->sendMessageWithButton(
            "<b>⏰ Ulaşılmamış Başvurular ({$leads->count()})</b>\n\n"
            . $lines->implode("\n")
            . "\n\n<i>Bu bildirim her saat tekrarlanır.</i>",
            'Tümünü Ulaşıldı İşaretle ✅',
            $markAllUrl
        );

        $this->info("Reminded about {$leads->count()} unreached leads.");
    }
}
