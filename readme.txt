Auth Login :

email : arkamaya@gmail.com
password : admin

Cara Deploy :

- kunjungi github dengan link berikut : https://github.com/mazfaa/project-management_arkamaya
- Pada klik tombol dropdown Code, klik download zip
- Simpan folder nya sesuai keinginan, lalu ekstrak
- Setelah diekstrak, masuk atau klik folder project-management_arkamaya-main, lalu klik kanan mouse pada background putih lalu pilih git bash here, jika tidak ada, anda dapat menggunakan cmd lalu copy url path folder nya di atas.
- Setelah terbuka terminal nya maka tuliskan perintah 'composer install' (jika error atau not found, silahkan install composer nya terlebih dahulu)
- Ubah nama file .env.example menjadi .env
- Buka file .env pada bagian DB_DATABASE, ubah nilainya menjadi db_project_azfa
- Buat database dengan nama db_project_azfa pada localhost/phpmyadmin  pada browser jangan lupa untuk menyalakan xampp nya dan klik tombol start pada mysql dan apache nya
- setelah itu di terminal tuliskan perintah 'php artisan key:generate'
- setelah itu tuliskan perintah 'php artisan migrate'
- setelah itu tuliskan perintah 'php artisan db:seed'
- setelah itu tuliskan perintah 'php artisan serve', lalu akan muncul link untuk menuju website nya biasanya akan muncul [http://127.0.0.1:8000]
- Copy url tersebut (http://127.0.0.1:8000) paste pada browser dan enter
- login dengan email dan password : arkamaya@gmail.com admin