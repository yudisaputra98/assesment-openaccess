<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Cara Instalasi
Berikut merupakan cara instalasi :
- Jalankan perintah `composer install` pada command untuk menginstall vendor laravel.
- Jalankan perintah `npm install` pada command untuk menginstall depedences node_modules untuk frontend.
- Seletah menginstall vendor dan node_modules jalankan perintah `php artisan migrate` pada command untuk melakukan migration pada database. Sebelum melakukan migrate pastikan koneksi sudah benar.
- Setalah itu jalankan server dengan perintah `php artisan serve`.
- Selanjutnya jalankan server frontend react dengan perintah `npm run watch`.
- Buka browser dan masukkan link `http://localhost:8000/` untuk akses program.