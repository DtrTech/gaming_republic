<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class SendTelegramAlertJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected string $message;

    public $tries = 3;
    public $backoff = 10;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function handle(): void
    {
        $token  = config('services.telegram.bot_token');
        $chatId = config('services.telegram.chat_id');

        Http::post("https://api.telegram.org/bot{$token}/sendMessage", [
            'chat_id' => $chatId,
            'text'    => $this->message,
            'parse_mode' => 'HTML',
        ]);
    }
}
