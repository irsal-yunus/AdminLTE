## Laravel AdminLTE Demo export excel , csv , pdf dan print

Untuk Melakukan Instalasi Laravel-AdminLTE SBB : 

-lakukan git clone sbb : git clone https://github.com/irsal-yunus/AdminLTE.git

-lalu permision folder di server sbb : sudo chmod -R 755 laravel-adminlte ( sesuaikan dengan nama folder di webserver anda disini saya menggunakan nama laravel-adminlte)

-lalu izinkan folder storage agar dapat di write caranya sbb : chmod -R o+w laravel-adminlte/storage

-setelah itu masuk ke directory folder dan install dependency yang dibutuhkan dengan cara : composer install

-lalu copy file .env dari laptop anda ( bisa pakai .env default laravel ) ke server jika anda deploy ke server jika tidak cukup buat di laptop / pc anda...
-jalan php artisan migrate untuk membuat user secara otomatis
-jln php artisan tinker untuk mejalankan class insert product
-setelah data sudah jalan perintah php artisan serve untuk mengakses web



## Semoga Bermanfaat 
## Salam, 



