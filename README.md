# Tugas Praktikum Pemograman Integratif (BookApp)
Nama : Fauzidan Iqbal Ghiffari
NIM  : 185150707111003
*Disclaimer : kalo projek saya tidak berkerja, tolong hubungi saya kak. soalnya saya takut ada yang kereplace/overwrite karna push lewat 2 cara. Projek ini mengignore .env dan vendor

# Tugas 1 (Tugas Praktikum)
Tugas ini merupakan bagian dari praktikum modul 5 dimana projek ini diminta membuat rute tambahan agar dapat mengakses detail buku berdasarkan id buku.

## Mengkonfigurasi environtment
Tahap ini termasuk menambahkan key pada file environtment dan mengaktifkan eloquent, facades dan envirotment lainnya. Tahap ini juga termasuk membuat database di phpmyadmin yang mengharuskan menyalakan database untuk mengakses API.

## Migrate Tabel dan Seeding Tabel
Tahap ini melakukan pembuatan tabel lewat terminal menggunakan perintah artisan, kemudian pada file php yang baru dibuat menentukan definisi tabel seperti tipedata dan nama attribut. Setelah selesai jalankan perintah artisan migrate untuk membuat tabelnya.

Setelah tabel terbuat, maka lakukan seeding untuk mengisi tabelnya. Isian dapat dilakukan dengan mengisi fungsi insert lalu jalankan perintah seed untuk mengisi datanya.

## Membuat Model Tabel
Tahap ini adalah membuat model dari tabelnya, pada variabel fillable dapat diisi attribut apa aja yang dapat ditambahkan nilainya.

## Menjalankan Aplikasi dan Memanggil Data
Tahap ini tambahkan dulu logika untuk memanggil semua data dan logika untuk memperoleh data berdasarkan idnya saya pada controller. pada tahap ini saya juga menambahkan logika untuk melakukan proses lainnya (CRUD : Create View Update Delete) biar lengkap. Setelah membuat controller maka terkakhir buat routingnya di file web.php. setelah membuat routingnya, hidupkan servernya dan masukkan urlnya melalui postman. Untuk percobaan, saya lakukan GET untuk memanggil semua data dan GET untuk mengambil data berdasarkan id saja. Screenshot dapat dilihat di PDF yang saya kumpulkan

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
