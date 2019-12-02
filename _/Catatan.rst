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
