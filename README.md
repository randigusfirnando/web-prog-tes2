# Cara install project web-prog-tes2

#### Dibuat dengan :
* [Laravel 7.x](https://laravel.com/docs/8.x)

### Dibuat oleh :
* Randi Gusfirnando

## Tata Cara Menggunakan Project web-prog-tes2 ini
* [Mengunduh repository ke dalam komputer](#mengunduh-repository)
* [Membuat Vendor](#membuat-vendor)
* [Merubah .env](#merubah-.env)
* [Membuat Table Migration Laravel](#membuat-table-migration-laravel)
* [Menjalankan Project Menggunakan Laragon](#menjalankan-project-menggunakan-laragon)
* [Cara Lain Menjalankan Project](#cara-lain-menjalankan-project)
* [Tampilan Dari project ini](#tampilan-dari-project-ini)

### Mengunduh Repository
Unduh repository ke dalam komputer menggunakan perintah `git clone`. Url
repository dapat dilihat di dalam repository yang diinginkan.
```
git clone https://github.com/randigusfirnando/web-prog-tes2.git
```
### Membuat Vendor
Membuat vendor menggunakan perintah `composer install` atau `composer update`

### Merubah .env
* Duplikat example.env
* Ganti nama hasil duplikat tersebut menjadi .env
* Buat APP_KEY dengan perintah `php artisan key:generate`

### Membuat Table Migration Laravel
* Membuat database dengan nama sesuka anda di MySQL
* Mengganti `DB_DATABASE='nama_database'` dengan nama database yang anda buat di MySQL
* Lakukan migrasi dengan perintah `php artisan migrate` atau bisa menggunakan perintah 'php artisan migrate:fresh'
* setelah itu lakukan 'php artisan db:seed'

### Menjalankan Project Menggunakan Laragon
* Jalankan Laragon
* Jalankan Laravel dengan perintah `php artisan serve`

### Cara Lain Menjalankan Project
* Jalankan XAMPP 
* Jalankan Laravel dengan perintah `php artisan serve`
* Kemudian buka di website di `http://localhost:8000/`

### Tampilan Dari project ini
![unknown_2021 12 01-00 23](https://user-images.githubusercontent.com/61822060/144096753-dc524f60-8efd-43ce-b80c-b2ecd19fd8ef.png)

