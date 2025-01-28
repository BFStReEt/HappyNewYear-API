<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\NewYearGreeting;
use Illuminate\Support\Facades\Mail;

class SendNewYearGreeting extends Command
{
    protected $signature = 'send:newyeargreeting {email}';
    protected $description = 'Send New Year Greeting Email to a specific user';

    public function handle()
    {
        $email = $this->argument('email');

        Mail::to($email)->send(new NewYearGreeting());

        $this->info("New Year Greeting email sent to {$email} successfully!");
    }
}
