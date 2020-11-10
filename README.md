# Tugas Praktikum Pemograman Integratif (BookApp)
Nama : Fauzidan Iqbal Ghiffari \n
NIM  : 185150707111003 \n
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

# Tugas 2 (Challenge Praktikum)
Challenge yang diberikan adalah untuk membuat CRUD untuk data author pada projek bookapp

## Membuat Tabel Baru Melalui Migrate dan Seeder
Tahap ini melakukan pembuatan tabel baru yaitu tabel author yang dimulai dari script pembuatan tabel diterminal, ketika file php pembuatan tabel muncul, dibuatlah atribut untuk tabel author seperti id, name, gender, biography. ketika sudah disesuaikan makan jalankan migrate dan tabel sudah ada di database. Kemudian lakukan seeding untuk mengisi data ke dalam tabel author

## Membuat Model Tabel Author
Membuat model author untuk menentukan atribut apa saja yang dapat dimasukkan ke database.

## Membuat Logika di Controller
Disini membuat semua logika yang berkaitan dengan proses CRUD pada data author, dimulai dari logika untuk view, view dengan id, insert, update, dan delete serta membuat feedback message ketika data tidak ditemukan.

## Membuat Routing dan Menjalankan API
Disini membuat semua routing untuk controller yang telah dibuat agar request dapat diproses. Membuat routing dimulai dari GET, POST, PUT dan DELETE. Ketika semua routing telah dibuat maka API dapat digunakan dengan cara menggunakan URL untuk menentukan request apa yang diinginkan memalui postman. Screenshot dapat dilihat pada PDF yang saya kumpulkan

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
