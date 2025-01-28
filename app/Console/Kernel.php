<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
        //     $schedule->command('send:newyeargreeting toidxbp03@gmail.com')
        //         ->timezone('Asia/Ho_Chi_Minh') // Đảm bảo múi giờ Việt Nam được sử dụng
        //         ->at('19:44'); // Thực thi vào lúc 19:40
        $schedule->command('send:newyeargreeting toidxbp03@gmail.com')
            ->everyMinute();
    }

    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');
    }
}
