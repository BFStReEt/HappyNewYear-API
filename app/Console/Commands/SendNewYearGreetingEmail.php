<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendNewYearGreetingEmail extends Command
{
    protected $signature = 'email:send-new-year-greeting';
    protected $description = 'Gửi email chúc mừng năm mới';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $recipient = 'toidxbp02@gmail.com'; // Địa chỉ email người nhận
        $name = 'Nguyễn Anh Tới'; // Tên người nhận

        Mail::send('emails.new_year_greeting', ['name' => $name], function ($message) use ($recipient) {
            $message->to($recipient)
                ->subject('Chúc mừng năm mới 🎉');
        });

        $this->info('Email chúc mừng năm mới đã được gửi thành công!');
    }
}
