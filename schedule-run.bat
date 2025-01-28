@echo off
:loop
    rem Lấy thời gian thực và in ra
    set currentTime=%time%

    rem In ra thời gian hiện tại (tuỳ chọn, giúp bạn kiểm tra)
    echo Current time: %currentTime%

    rem Đợi 60 giây (1 phút)
    timeout /t 60

    rem Thực thi lệnh artisan sau khi đợi 1 phút
    php artisan schedule:run

    rem Quay lại và tiếp tục kiểm tra
    goto loop
