<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewYearGreeting extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct() {}

    public function build()
    {
        return $this->subject('Chúc Mừng Năm Mới!')
            ->view('emails.new_year_greeting'); // Sử dụng view để tạo nội dung email
    }
}
