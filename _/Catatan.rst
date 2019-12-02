https://www.petanikode.com/topik/codeigniter

=========================================================================================================================
Step 1
=========================================================================================================================
Tedapat dua direktori penting di dalam CI: 📁 application dan 📁 system. 
Selain itu terdapat juga direktori 📁 user_guide dan beberapa file. Berikut ini penjelasannya:

📁 application => berisi semua kode aplikasi. Di dalam direktori inilah kita akan menulis semua kode aplikasi kita.
📁 system => berisi kode-kode inti dari Codeiniter. Jangan mengubah apapun di dalam direktori ini. Jika kita ingin upgrade versi, kita cukup me-replace direktori ini dengan yang baru.
📁 tests => berisi kode untuk melakukan unit testing.
📁 user_guide => berisi dokumentasi codeigniter. Kita bisa menghapus direktori ini saat web sudah jadi.
📄 .editor_config => berisi konfigurasi untuk teks editor.
📄 .gitignore => berisi daftar file dan folder yang akan diabaikan oleh Git.
📄 comspoer.json => adalah file yang berisi keterangan project dan keterangan library yang digunakan. File ini dibutuhkan oleh composer.
📖 contributing.md => adalah file yang berisi penjelasan cara berkontribusi di proyek CI. Kita bisa menghapus file ini, apabila web sudah jadi.
📖 license.txt => adalah file yang berisi keterangan lisensi dari CI.
📖 readme.rst => sama seperti file 📄 contributing.md file ini berisi penjelasan dan informasi tentang project CI. Kita juga bisa menghapus file ini saat web sudah selesai.
📄 index.php => adalah file utama dari CI. File yang akan dibuka pertamakali saat kita mengakses web.


Selanjutnya silahkan buka direktori 📁 application dan perhatikan direktori yang ada di sana.
📁 cache => berisi cache dari aplikasi.
📁 config => berisi konfigurasi aplikasi.
📄 autoload.php => tempat kita mendefinisikan autoload;
📄 config.php => konfigurasi aplikasi;
📄 constants.php => berisi konstanta;
📄 database.php => konfigurasi database aplikasi;
📄 doctypes.php => berisi definisi untuk doctype HTML;
📄 foreign_chars.php => berisi karakter dan simbol;
📄 hooks.php => berisi konfigurasi hooks;
📄 index.html => untuk mencegah direct access;
📄 memcached.php => untuk berisi konfigurasi untuk memcached;
📄 migration.php => konfigurasi untuk migrasi;
📄 mimes.php => berisi definisi tipe file;
📄 profiler.php => konfigurasi untuk profiler;
📄 routers.php => tempat kita menulis route aplikasi;
📄 smileys.php => berisi kode untuk emoji;
📄 user_agents.php => berisi definisi untuk user agents.

📁 controller => berisi kode untuk controller.
📁 core berisi => kode untuk custom core.
📁 helpers => berisi fungsi-fungsi helper.
📁 hooks => berisi kode untuk script hook.
📁 language => berisi string untuk bahasa, apabila web mendukung multibahasa.
📁 libraries => berisi library.
📁 logs => berisi logs dari aplikasi.
📁 models => berisi kode untuk model.
📁 thrid_party => berisi library dari pihak ketiga.
📁 views => berisi kode untuk view.
📄 index.html file html untuk mencegah direct access.

=========================================================================================================================
Step 2
=========================================================================================================================
# Mengenal Konsep MVC pada Codeigniter
MVC (Model, View, Controller) adalah sebuah pola desain (design pattern) arsitektur pengembangan aplikasi yang memisahkan dan mengelompokan beberapa kode sesuai degan fungsinya.

# MVC membagi aplikasi ke dalam tiga bagian fungsional: model, view, dan controller.
1.Model adalah kode-kode untuk model bisnis dan data. biasanya berhubungan langsung dengan database untuk memanipulasi data (insert, update, delete, search), menangani validasi dari bagian controller, namun tidak dapat berhubungan langsung dengan bagian view.
2.View merupakan bagian yang menangani presentation logic. berisi kode-kode untuk tampilan.
3.Controller merupakan bagian yang mengatur hubungan antara bagian model dan bagian view, controller berfungsi untuk menerima request dan data dari user kemudian menentukan apa yang akan diproses oleh aplikasi.

# Alur kerjanya seperti :
1.Mulai;
2.User mengirim request ke web;
3.File yang pertama kali dieksekusi adalah index.php;
4.Lalu dari index.php, request akan diteruskan oleh routers.php;
5.routers.php akan mencari cache di server, apabila tedapat cache maka cache itu yang akan dikirim sebagai balasan (response). Apabila tidak ada cache barulah request diteruskan ke Controller;
6.Controller akan bertanggunag jawab untuk mengambil data dari Model dan me-rendernya ke dalam View dengan menggunakan library, plugin, dan helper yang ada.
7.Hasil render (view) dikirim ke pengguna dan disimpan dalam cache, apabila fitur cache aktif;
8.Selesai.

=========================================================================================================================
Step 3
=========================================================================================================================
# Langkah-langkah yang harus dilakukan untuk menggunakan bootstrap (template SB Admin) pada Codeigniter:
1.Konfigurasi Codeigniter;
2.Download SB Admin;
3.Ekstrak SB Admin;
4.Copy file assets yang dibutuhkan;
5.Membuat Template;
6.Membuat partial template;
7.Menggunakan partial pada template;
8.Selesai…

# Menambahkan SB Admin di Codeigniter
Tugas kita berikutnya adalah menambahkan file SB Admin ke dalam proyek Codeigniter.
Caranya:
Kita tinggal copy/paste file dan folder yang dibutuhkan. Berikut ini folder yang harus kita copy:

Folder 📁 css
Folder 📁 js
Folder 📁 vendor –rename menjadi–> 📁 assets
Untuk folder 📁 vendor, kita akan ubah namanya menjadi 📁 assets agar tidak bercampur dengan folder vendor dari composer.

Folder 📁 vendor berisi library front-end dari pihak ketiga, seperti: Bootstrap, Font awesome untuk ikon, chart.js, datatables, dan jquery.

Folder 📁 sass dapat juga kita copy apabila kita ingin memodifikasi dan menggunakan sass pada project.

Namun, karena kita hanya akan memakai saja. Kita cukup copy tiga folder yang tadi.

# Kenapa tampilannya berantakan?
Ini karena CSS dan Javascript belum berhasil di-load alias Not Found.
Coba saja buka view source dari halamannya.
Kalau kita klik link CSS dan Javascriptnya, maka akan Not Found.
Kenapa bisa begini?
Ini karena alamat yang diberikan pada link tersebut belum benar. Masih mengarah ke /vendor/....

Kita harus mengubahnya agar mengarah ke /assets/..., karena tadi kita sudah mengubah nama vendor menjadi assets.

***Buka file views/overview.php lalu cari link CSS dan javascriptnya.

=========================================================================================================================
Step 4
=========================================================================================================================
# Membuat Partial Template
Partial merupakan teknik untuk membagi template menjadi bagian-bagian kecil agar mudah digunakan.

Berdasarkan gambar template SB Admin, berikut ini partial yang bisa kita buat:

📄 head.php untuk meinyimpan isi dari tag <head>;
📄 navbar.php untuk menyimpan kode navbar;
📄 sidebar.php untuk menyimpan kode menu bagian samping (sidebar);
📄 breadcrumb.php untuk menyimpan kode link breadcrumb;
📄 scrolltop.php untuk menyimpan kode tombol scrolltop;
📄 footer.php untuk menyimpan kode footer;
📄 modal.php untuk menyimpan kode modal;
📄 js.php untuk meload javascript.

***Tapi sebelum itu, silahkan buat dulu direktori baru bernama 📁 _partials di dalam 📁 views/admin/.


# Apakah nama direktorinya harus _partials?
Tidak harus, karena ada juga membarikan nama includes atau _includes.
Nama _partials menurut saya lebih jelas dan menggambarkan isinya.
Kenapa ada garis bawah (underscore) di depannya?
Ini untuk memudahkan dalam membedakan view dan partial. View akan kita load dari Controller, sedangkan partial akan kita load dari view.
Biasanya dalam penulisan kode (OOP), sesuatu yang bersifat private dan lokal kadang ditulis dengan garis bawah di depannya.

Menggunakan Partials pada Template
Kita sudah membuat semua partial yang dibutuhkan:
Langkah berikutnya, kita harus menggunakannya dalam template.

Silahkan ubah isi views/admin/overview.php
Pada kode template tersebut, kita me-load partial dengan fungsi $this->load->view().

=========================================================================================================================
Step 5
=========================================================================================================================
# CRUD (Create, Read, Update Delete) adalah fitur dasar yang harus kita buat saat bekerja dengan database.
Berikut ini daftar pekerjaannya…
TODO:
 -Membuat Database;
 -Konfigurasi Codeigntier
 -Membuat Model untuk Tabel;
 -Membuat Controller;
 -Membuat View;
 -Membuat Form Add;
 -Membuat Form Edit;
 -Membuat Fitur Hapus Data;

# Membuat Database;
Kolom yang dibutuhkan:
product_id (Primary Key) bertipe string dengan panjang 64;
name bertipe string dengan panjang 255.
price bertipe integer.
image bertipe string dengan panjang 255.
description bertipe TEXT.

# Konfigurasi Codeigniter
Silahkan buka 📄 config/database.php
Berikutnya, silahkan buka 📄 config/autoload.php.
	$autoload['libraries'] = array('database', 'session');

Ini artinya, kita akan me-load library database dan session secara otomatis.
Apa fungsinya?
Library database akan menyediakan fungsi-fungsi untuk operasi database. Kita butuh ini, karena kita akan menggunakan database dalam aplikasi;
Library session menyediakan fungsi-fungsi untuk mengakses variabel $_SESSION. Kita butuh ini untuk menampilkan flash message dan membuat login.

# Membuat Model untuk Tabel
Model merupakan class atau kode yang berhubungan dengan data.
Di dalam model, kita akan membuat pemodelan data dari database. Sehingga kita akan lebih mudah mengaksesnya.
Biasanya satu tabel, dibuatkan satu modelnya.
Silahkan buat file baru di dalam direktori 
📁 application/model/ dengan nama Product_model.php.