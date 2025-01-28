@echo off
rem Đặt thời gian dừng lại (định dạng HH:MM:SS)
set stopTime=00:10:05

:loop
    rem Lấy thời gian thực và in ra
    for /f "tokens=1-3 delims=:" %%a in ("%time%") do (
        set currentHour=%%a
        set currentMinute=%%b
        set currentSecond=%%c
    )
    set currentTime=%currentHour%:%currentMinute%:%currentSecond:~0,2%

    rem In ra thời gian hiện tại (tuỳ chọn, giúp bạn kiểm tra)
    echo Current time: %currentTime%

    rem So sánh thời gian hiện tại với thời gian dừng lại
    rem Nếu currentTime >= stopTime, dừng vòng lặp
    if "%currentTime%" geq "%stopTime%" goto end

    rem Đợi 1 giây
    timeout /t 1 >nul

    rem Thực thi lệnh artisan sau mỗi giây
    php artisan schedule:run

    rem Quay lại và tiếp tục kiểm tra
    goto loop

:end
    echo The script has ended at %currentTime%.
    rem Dừng lại khi đến thời gian đã chỉ định
    exit
