# Panduan CodeIgniter 4
* [Intro CodeIngiter 4](#a-intro-codeigniter-4)
* [Install CodeIgniter 4](#b-installasi-codeigniter-4)
* [Konsep MVC (10)](#c-konsep-mvc)
* [Konfigurasi Database (11)](#d-konfigurasi-database)
* [Membuat Tampilan Menarik Menggunakan Bootstrap (13)](#e-membuat-tampilan-menarik-menggunakan-bootstrap)
* [Insert Data ke database (14)](#f-insert-data-ke-database)
* [Update dan Delete pada Database (15)](#g-update-dan-delete-pada-database)



# A. Intro Codeigniter 4

> CodeIgniter is a powerful PHP framework with a very small footprint,
> built for developers who need a simple and elegant toolkit to create full-featured web applications.
> -- [CodeIgniter](https://codeigniter.com/)

* Tujuan dari Web Framework?
  + Mempercepat dan mempermudah proses pengembangan aplikasi web
    
    kerangka kerja yang terstruktur dan terorganisir,  struktur dan aturan yang jelas untuk mengembangkan aplikasi web,
    pengembang tidak perlu lagi membuat struktur dan aturan yang sama dari awal, yang dapat memakan waktu dan energi yang berlebihan.
   
  + menyediakan kerangka kerja yang terstruktur dan terorganisir
  
    dapat membantu dalam hal pengembangan tim, setiap anggota tim dapat bekerja secara terpisah pada komponen yang berbeda
    dan kemudian mengintegrasikan hasil kerja mereka ke dalam satu aplikasi web, setiap anggota tim dapat memahami struktur kode dan logika bisnis aplikasi web dengan mudah.


* Top Programming Language in Github.com
![Picture1](https://github.com/irfanltf/temankoding-ci4/assets/48278734/fb12ebc8-4c39-4e44-bf45-1673f9cbda67)

* Most Popular BackEnd Framework Statisics
![Picture2](https://github.com/irfanltf/temankoding-ci4/assets/48278734/dd5213bf-615c-4ed1-98d7-0abd6b353a5c)

*  Most Question About PHP FW in Stackoverflow
![Picture3](https://github.com/irfanltf/temankoding-ci4/assets/48278734/c51150f9-0829-4727-aab0-22ec918bf300)

* Statistic About CodeIgniter
![Picture4](https://github.com/irfanltf/temankoding-ci4/assets/48278734/152df855-fcda-47a6-af97-6f0e4702429a)


* Website Use Codeigniter
![Picture5](https://github.com/irfanltf/temankoding-ci4/assets/48278734/42e0ad42-2f31-45fa-afd9-50703d214d26)


* CodeIgniter VS Laravel
![Picture6](https://github.com/irfanltf/temankoding-ci4/assets/48278734/e75505c6-350d-4302-9e30-73c4818bffbf)
![Picture7](https://github.com/irfanltf/temankoding-ci4/assets/48278734/59e33b33-c3b9-463a-bdbe-8c9464b02915)
![Picture8](https://github.com/irfanltf/temankoding-ci4/assets/48278734/b9db6d87-d17b-42b2-a7a0-ad4a96f62396)
![Picture9](https://github.com/irfanltf/temankoding-ci4/assets/48278734/dabf112a-c4d5-45d4-b60a-8f3c3553bbfe)

* Kenapa CodeIgniter
  1. Mudah dipelajari
  2. Konfigurasi Sederhana
  3. Small Footprint
  4. Terstruktur (menggunakan Konsep MVC)
  5. Tidak harus mengikuti aturan coding yang ketat
  6. Dukungan Komunitas yang luas


# B. Installasi CodeIgniter 4
untuk dapat menjalankan codeigniter 4 ada beberapa hal yang perlu disiapkan, diantaranya adalah :
  - (PHP, Web Server, Database Server) ====> XAMPP
    karena codeigniter 4 berjalan pada bahasa pemrograman ![image](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white), pastikan komputer anda sudah terinstall php dengan versi minimal       7.3. untuk menjalankan php anda membutuhkan web server, web server yang bisa digunakan ada banyak macam pilihan dan contoh yang paling umum digunakan seperti Apache dan juga nginx, dan agar informasi pada aplikasi       dapat berubah secara dinamis dibutuhkan juga database server seperti  MySQL , PostgreSQL , SQLServer  dan lain sebagainya. namun sebenarnya anda tidak usah khawatir juga bingun untuk menginstall satu persatu             teknologi tersebut, anda dapat memanfaatkan aplikasi XAMPP yang dapat mem-bundling PHP, Web Server dan Database Server.

- Code Editor
menulis kode program hingga ribuan baris sudah menjadi hal yang umum untuk programmer, code editor menjadi alat perang untuk programmer dalam menulis kode, setiap programmer biasanya mempunyai kode editor favoritnya masing-masing. untuk menulis code pada codeigniter 4 bisa menggunakan berbagai macam kode editor seperti (notepad, sublime, visual studio code, atom, dll). pada codeigniteer 4 ini memungkinkan anda untuk menjalankan perintah pada terminal, jadi sangat disarankan untuk menggunakan code editor yang mempunyai fitur terminal didalamnya contohnya visual studio code, namun jika benar-benrar tidak memungkinkan anda bisa menggunakan terminal secara terpisah seperti git bash, cmd pada windows atau terminal pada macOS dan Linux.

- Composer
Composer adalah alat manajemen paket yang populer dalam pengembangan perangkat lunak PHP. Fungsinya adalah untuk mengelola dependensi (library atau paket) yang dibutuhkan oleh proyek PHP Anda. Dengan menggunakan Composer, Anda dapat dengan mudah mengunduh, menginstal, dan mengelola paket-paket PHP yang dibutuhkan oleh proyek Anda.
Anda dapat mengunduh Composer dari situs resmi Composer di https://getcomposer.org/.


### 1. Install CodeIgniter 4 Menggunakan Composer
##### 1. Tentukan folder penyimpanan: Pilih folder di komputer Anda di mana Anda ingin menyimpan proyek CodeIgniter 4.
##### 2. Buka terminal atau command prompt: Buka terminal atau command prompt di komputer Anda.

Navigasi ke folder penyimpanan: Gunakan perintah cd untuk berpindah ke folder penyimpanan yang telah Anda tentukan sebelumnya. Misalnya, jika Anda ingin menyimpan proyek di folder htdocs dalam XAMPP di Windows, perintahnya mungkin seperti ini:


```
composer create-project codeigniter4/appstarter nama-folder
```
**Gantilah nama-folder dengan nama folder yang Anda inginkan untuk proyek CodeIgniter 4 Anda.**

##### 3. Tunggu proses unduhan selesai: Composer akan mengunduh dan menginstal CodeIgniter 4 serta semua dependensi yang diperlukan. Tunggu hingga proses selesai. Ini mungkin membutuhkan beberapa saat tergantung pada kecepatan koneksi internet Anda.
![Picture10](https://github.com/irfanltf/temankoding-ci4/assets/48278734/ade266d8-d167-48a9-951d-380ce3a53054)
Pastikan versi PHP > 7.3, aktifkan ektensi intl dan mbstring pada php.ini 


##### 4. Proyek CodeIgniter 4 siap digunakan: Setelah proses selesai, Anda akan memiliki proyek CodeIgniter 4 yang siap digunakan di folder yang telah Anda tentukan. Anda dapat membuka proyek tersebut dan mulai mengembangkan aplikasi menggunakan CodeIgniter 4.


### 2. Install CodeIgniter 4 Seecara Manual
untuk mengunduh secara menual anda dapat langsung mendownloadnya pada link berikut :

https://codeigniter.com/download 

atau ke link github berikut :

https://github.com/codeigniter4/appstarter


berikut tampilan ketika codeigniter pertama kali dijalanlan
![Picture11](https://github.com/irfanltf/temankoding-ci4/assets/48278734/d0f7ca7f-2aae-487e-ba71-93c609a22c5b)

# C. Konsep MVC
### 1. Sejarah MVC
1. Awal pengembangan perangkat lunak: Pada awal pengembangan perangkat lunak, tidak ada pendekatan yang konsisten untuk mengorganisir kode program. Perangkat lunak sering kali terdiri dari kode yang tercampur aduk tanpa pemisahan yang jelas antara tampilan, logika bisnis, dan logika data.

2. Smalltalk: Pada tahun 1970-an, bahasa pemrograman Smalltalk dikembangkan di Xerox PARC (Pusat Penelitian Palo Alto). Smalltalk memperkenalkan konsep pemrograman berorientasi objek dan menjadi landasan untuk perkembangan MVC.

3. Pengembangan konsep MVC: MVC dikembangkan sebagai metode untuk memisahkan tampilan (View), logika bisnis (Model), dan interaksi antara keduanya (Controller). Tujuan utama dari MVC adalah memfasilitasi pengembangan perangkat lunak yang lebih terstruktur, mudah dimengerti, dan dapat dipelihara.

4. Implementasi MVC pada Smalltalk: Pada tahun 1979, Adele Goldberg dan David Robson di Xerox PARC menerapkan MVC pada lingkungan pengembangan Smalltalk-80. Mereka menggunakannya untuk mengembangkan lingkungan pengembangan perangkat lunak yang interaktif dan visual.

5. Penggunaan MVC dalam kerangka pengembangan perangkat lunak: Seiring berjalannya waktu, MVC menjadi populer dan diadopsi oleh berbagai kerangka pengembangan perangkat lunak. Pada tahun 1988, NeXT Computer Inc., perusahaan yang didirikan oleh Steve Jobs setelah keluar dari Apple, menggunakan MVC sebagai dasar untuk mengembangkan kerangka kerja NeXTSTEP.

6. Penyebaran luas MVC: Dalam beberapa dekade berikutnya, MVC menjadi populer dalam pengembangan perangkat lunak. Berbagai bahasa pemrograman dan kerangka kerja mengadopsi konsep ini dan mengembangkan implementasi MVC yang sesuai dengan karakteristik dan kebutuhan mereka.

7. Hingga saat ini, MVC tetap menjadi pendekatan yang umum digunakan dalam pengembangan perangkat lunak. Namun, variasi dan modifikasi dari konsep ini telah muncul, seperti Model-View-ViewModel (MVVM) dan Model-View-Presenter (MVP), yang memperluas atau memodifikasi peran dan hubungan antara komponen MVC asli

### 2. MVC konsep Flow
<img width="1156" alt="Screenshot 2023-05-30 at 21 39 54" src="https://github.com/irfanltf/temankoding-ci4/assets/48278734/020be69d-42b4-4182-8046-067f7ba14e01">


<img width="1156" alt="Screenshot 2023-05-30 at 21 46 34" src="https://github.com/irfanltf/temankoding-ci4/assets/48278734/afa7a698-fc44-4629-bbce-dfeba793c01f">

### 3. Cara Kerja MVC pada CodeIgniter 4
Misalkan untuk dapat menampilkan data film seperti dibawah ini, kita akan melakukan request ke /film atau request akan dikirim ke controller film method index

#### 1. Misalkan untuk dapat menampilkan data film seperti dibawah ini, kita akan melakukan request ke /film atau request akan dikirim ke controller film method index
![Picture12](https://github.com/irfanltf/temankoding-ci4/assets/48278734/178a1e07-09e2-4a00-9005-70dcd1f51ddf)

#### 2.  Request akan ditangani oleh controller dan method yang dituju, pada controller request akan dilanjutkan ke model atau view Jika request membutuhkan data maka akan diteruskan ke model
<img width="358" alt="Picture13" src="https://github.com/irfanltf/temankoding-ci4/assets/48278734/e68c872d-e132-4674-aa8f-acbe744110e7">

`buat  sebuah file controller dengan nama Film.php dalam folder controllers dan tulis kode diatas`

#### 3. Model berisi logika data, atau juga interaksi ke database
<img width="393" alt="Picture13-5" src="https://github.com/irfanltf/temankoding-ci4/assets/48278734/6f1a2471-289a-4327-b396-b6da5d213b9e">

`buat sebuah file model dengan nama filmModel.php dalam folder models dan tulis kode diatas`

#### 4. Controller akan mendapatkan hasil dari request yang dilakukan ke model, jika request berhasil maka data akan dikembalikan ke controller Controller hanya menerima nilai hasil request, controller tidak menangani logika data 
<img width="352" alt="Picture14" src="https://github.com/irfanltf/temankoding-ci4/assets/48278734/20e35fc6-cdb5-4351-8164-a58bd9c2ba0f">

#### 5. Data akan ditampilkan ke halaman view
<img width="352" alt="Picture14" src="https://github.com/irfanltf/temankoding-ci4/assets/48278734/20e35fc6-cdb5-4351-8164-a58bd9c2ba0f">

#### 6. Informasi akan ditampilkan ke user 
<img width="415" alt="Picture16" src="https://github.com/irfanltf/temankoding-ci4/assets/48278734/a7108b4a-9e4e-4132-a6f1-fcc73e0e5336">

`buat sebuah file view dengan nama index.php dalam folder views/film dan tulis kode diatas`



### 4. Jadi Apa MVC?
`MVC atau Model-View-Controller adalah suatu arsitektur perangkat lunak yang membagi sebuah aplikasi menjadi tiga komponen utama: Model, View, dan Controller. MVC memungkinkan pengembangan perangkat lunak yang lebih terstruktur, modular, dan mudah dipelihara`


# D. Konfigurasi Database
Konfigurasi database pada codeigniter 4 dapat dilakukan dengan 2 cara
### 1. Konfigurasi pada file Database.php
untuk konfigurasi pada file database.php dapat mengaksesnya pada folder app>Config>Database.php, lalu masukan hostname, username, password, dan database yang sesuai dengan project
![ddatabse](https://github.com/irfanltf/temankoding-ci4/assets/48278734/78b16117-0358-4654-896d-beb0b472b465)


### 2. Konfigurasi pada file .env
untuk mengkonfigurasi pada file env, save as terlebih dahulu file env pada folder aplikasi menjadi .env, cari pada bagian database biasanya di line ke 30, lalu sesuaikan juga hostname, database name, username, dan password dengan project
![database](https://github.com/irfanltf/temankoding-ci4/assets/48278734/711d7a6d-c923-4306-9d1d-5993839a37ff)


*perlu diperhatikan!!! jika file .env sudah dibuat / dikonfigurasi maka konfigurasi pada Database.php akan diabaikan*

### 3. Menyambungkan Model dengan table pada database
sebelumnya saat membahas tentang konsep MVC kita sudah membuat implementasi sederhana alur dari konsep MVC dengan memanfaatkan model untuk menyimpan data film, namun masih mempunyai kelemahan jika kita ingin menambahkan data atau mengubah data masih melakukannya secara manual yaitu mengubahnya ke modelnya langsung. selanjutnya kita akan memanfaatkan model untuk query ke database saja, artinya datanya disimpan ke database, dan pada model kita dapat hanya melakukan query saja, jika data tersedia, maka repsonse nya adalah berhasil dan mengembalikan data, namun jika tidak tersedia maka akan mengembalikan response gagal dan tidak mengembalikan data

**Let's Code!!!**

**1. Buat Database yang akan menyimpan data film**
setelah membuat database dengan nama `db_film` buat juga table `film` 
![Screenshot 2023-06-06 093231](https://github.com/irfanltf/temankoding-ci4/assets/48278734/624299b1-909d-49ee-8b82-bf4d606a8ed9)


**2. Konfigurasi pada file .env hubungkan ke database**
![database](https://github.com/irfanltf/temankoding-ci4/assets/48278734/5d02f199-54e4-4247-af1f-4b25abef7c04)

sesuaikan ***hostname, username, password, dan db_name*** dengan settingan database project anda

**3. Ubah File Model Film**
Tambahkan beberapa properti sebagai konfigurasi model, seperti table, primary key, auto increment, dan lain sebagainya, properti yang ditambahkan hanya optional
![models](https://github.com/irfanltf/temankoding-ci4/assets/48278734/62f857fc-ebd2-44c5-beb7-d195a04af473)

Setelah menghubungkan kedatabase, data dapat disajikan dengan banyak cara, pada Codeigniter 4 sudah menyediakan method pada model untuk menyajikan data diantaranya adalah

`findAll()` Fungsi ini digunakan untuk mengambil semua data dari tabe

![get all](https://github.com/irfanltf/temankoding-ci4/assets/48278734/dfced1ab-e4d5-45c7-85ab-95a272b3561c)


`find($id)` Fungsi ini digunakan untuk mencari data berdasarkan ID

![find 2](https://github.com/irfanltf/temankoding-ci4/assets/48278734/36792373-bbf7-474b-ba9d-b17a0b507b9a)


`where($column, $value)` Fungsi ini digunakan untuk melakukan query dengan kondisi WHERE

![get data by](https://github.com/irfanltf/temankoding-ci4/assets/48278734/9c73f690-c9e6-453a-aff2-368ee5eab32b)


`orderBy($column, $order)` Fungsi ini digunakan untuk mengurutkan hasil query berdasarkan kolom tertentu


![orderby 2](https://github.com/irfanltf/temankoding-ci4/assets/48278734/788f5101-b56d-412c-b017-c84022ec5d19)

`limit($limit, $offset)`: Fungsi ini digunakan untuk membatasi  jumlah data yang diambil dari tabel

![get limit](https://github.com/irfanltf/temankoding-ci4/assets/48278734/c8ab86b0-1780-4dc5-b3f9-b55d834334b3)

Query Builder `select($columns)` Fungsi ini digunakan untuk memilih  kolom-kolom tertentu dari tabel

![query builder](https://github.com/irfanltf/temankoding-ci4/assets/48278734/bd44f9dd-9415-462a-b836-58f5f253dbbc)


**Dan masih banyak lagi!!! tambahkan semua contoh method diatas ditambahkan pada Model Film**

**4. Ubah File Controller Film**

ubah method `index` pada controller `Film` menjadi sebagai gambar dibawah ini, disana terlihat perubahan pada method `getFilm` menjadi method `getAllData` yang diambil dari Model `FilmModel`, dan juga view diarahkan ke `view v_film`

![method on controller](https://github.com/irfanltf/temankoding-ci4/assets/48278734/ffce20e6-f5e9-41ae-80f4-cc5bc5cbb1db)


**4. Ubah File View Film**

save as file `index.php` pada folder film di view menjadi `v_film`

![view baru](https://github.com/irfanltf/temankoding-ci4/assets/48278734/63d85fcb-f74f-45a0-b4d1-c78fd4186343)

jangan lupa tambahkan terlebih dahulu data pada database (contoh dibawah hanya 2 data silahkan tambahkan data sesuka hati)

![Screenshot 2023-06-06 172919](https://github.com/irfanltf/temankoding-ci4/assets/48278734/4ae8d0cc-0811-413c-8bb3-cc8b731fca9f)


jalankan codeigniter pada local development server

![1](https://github.com/irfanltf/temankoding-ci4/assets/48278734/37cfb123-0cf9-4625-8efa-54f5a0012530)

dan berikut hasilnya

![2](https://github.com/irfanltf/temankoding-ci4/assets/48278734/ceca501b-e135-4403-ad5e-d09bd4b360fd)


# E. Membuat Tampilan Menarik Menggunakan Bootstrap

- Udah Default Route

![routess](https://github.com/irfanltf/temankoding-ci4/assets/48278734/11a035da-bcdf-4b3a-ad11-e8a08d57f67b)

sebelumnya ubah `default routes` untuk mengarahkan ke controller `film`, agar ketika base url kita diakses akan langsung menampilkan data film

- Unduh Bootstrap
Buka https://getbootstrap.com/ lalu pilih menu `Docs` lalu pilih `download`, kemudian pada bagian `Compiled CSS and JS` pilih `Download`
![bootstrap](https://github.com/irfanltf/temankoding-ci4/assets/48278734/111f607f-f30f-44cd-bb7d-d48c62866654)

setelah berhasil mendownload file bootstrap selanjutnya  extract file zip, lalu pindahkan file `css` dan `js` kedalam assets pada folder `public`

![folder](https://github.com/irfanltf/temankoding-ci4/assets/48278734/8b20a456-88bd-4a8a-a872-0d99621e370a)\

- Ubah Tampilan Website Menggunakan Bootstrap

buka file view `film` lalu hapus table html untuk menampilkan data filmnya, sisakan bagian struktur html dan tambahkan tag untuk memanggil css dan javascript bootsrtap seperti pada line `6 dan 12` dibawah ini : 
![html](https://github.com/irfanltf/temankoding-ci4/assets/48278734/21ef3bb0-daf0-4403-b477-76e5523cc7d9)

- mulai menulis bootsrap dengan membuat navigasi bar

untuk membuat `navigasi bar` anda dapat mengunjugi dokumentasi yang disediakan oleh `bootstrap` dengan melalkukan pencarian pada bilah pencarian pada website `bootstrap`, lalu tekan `enter`

![navbar](https://github.com/irfanltf/temankoding-ci4/assets/48278734/c2975066-11f6-4b36-9af4-c3e5059faaf0)

lalu pilih jenis navbar mana yang ingin digunakan lalu, anda dapat langsung menggunakannya dengan copy source codenya

![navbarnya](https://github.com/irfanltf/temankoding-ci4/assets/48278734/8d9f56b1-48c9-4c40-bb8a-8bae34f3b406)


lalu pada tampilan film pada dibagian body tambahkan navbar yang kita copy dari bootstrap 

![htmlll](https://github.com/irfanltf/temankoding-ci4/assets/48278734/9763dca2-f6ee-405f-a025-084e9287a7f2)

hasilnya kira-kira sebagai berikut : 

![kosong](https://github.com/irfanltf/temankoding-ci4/assets/48278734/9f73f448-db2b-4980-8cc1-d35c3b6e5d2a)


- ubah isi menu dan class pada navbar

selanjutnya kita akan mengubah nama menu yang akan disesuaikan dengan website kita seperti dibawah ini

![ubah htmlnya ksoong](https://github.com/irfanltf/temankoding-ci4/assets/48278734/c6058f10-a234-4075-b37f-5ac740c65ece)

kodenya sebagai berikut, kita menengubah tampilan warna  menunya menjadi `dark` dari sebelumnya adalah `light` pada `line 11`. kemudian juga mengubah nama menu menjadi terdapat menu `beranda, semua film, kategori film, dan tentang kami`.
nantinya pada menu `beranda` akan menampilkan data film terbaru sejumlah 12 film, lalu pada menu `semua film` berisi semua data film, lalu pada menu `kategori film` berisi data kategori film sekaligus menampilkan film berdasarkan kategori, dan yang terakhir adalah menu `tentang kami` yang berisi informasi tentang website kita.

![ubah htmlnya](https://github.com/irfanltf/temankoding-ci4/assets/48278734/4a1e1014-9507-4327-ba9b-5dacceb51b9b)

- buat tampilan card bootstrap untuk menampilkan data film

dibawah tutup tag `nav`, tambahkan tag `div` dengan class `container`.class  Container berfungsi untuk membungkus blok di dalamnya, sehingga terlihat rapi terhadap ukuran layar
  
![tag container](https://github.com/irfanltf/temankoding-ci4/assets/48278734/3d1e5746-a5aa-4ff2-889f-c4baf322f9c8)

selanjutnya didalam tag div class `container`, buat tag div dengan class `row`, Class row berfungsi untuk membuat baris.

![row](https://github.com/irfanltf/temankoding-ci4/assets/48278734/c0432fbc-938e-48c2-9103-dcd2ead91000)

selanjutnyta didalam tag div class `row`, buat tag div dengan class `col-md-4`, class col berfungsi untuk membuat column, dalam satu baris tampilan website jika kita menggunakan css grid milik bootstrap adalah maximal 12 column, artinya jika kita membuat `class-md-4`, maka class tersebut bernilai 4 kolom.

![col](https://github.com/irfanltf/temankoding-ci4/assets/48278734/058ddb27-8e50-4aa4-a63a-ae4709a88bce)

selanjutnya tambahkan card, anda dapat melihat refrensinya pada website bootsrap, dan adobsi pada kodingan kita

![card](https://github.com/irfanltf/temankoding-ci4/assets/48278734/b6652ecc-2086-4f3f-bbd9-992427886b9d)

letakan didalam tag div dengan class `col`

![card isi](https://github.com/irfanltf/temankoding-ci4/assets/48278734/b948cc47-95c0-43e2-a12e-cb4d713053f5)

hasil sementara akan menjadi seperti gambar dibawah ini:

![jadi sementara](https://github.com/irfanltf/temankoding-ci4/assets/48278734/dec5afac-3317-4409-9bdb-6e1e3444194d)


- tampilkan data dari database kedalam card

jika sebelumnya kita menampilkan data pada table, datanya ditampilkan dalam baris, artinya data berulang setiap baris `lihat pada gambar atas` , kali ini kita akan membuat datanya ditampilkan dalam card, yang mana card disusun pada setiap 4 colom, artinya kita akan membuat perulangan setiap 4 kolom `lihat pada gambar bawah` sebagai berikut :

![jadi seperti ini](https://github.com/irfanltf/temankoding-ci4/assets/48278734/a9ef4bcc-633c-49c5-83d8-e54d1fe4ee83)

maka hasilnya adalah sebagai berikut :

![asa](https://github.com/irfanltf/temankoding-ci4/assets/48278734/8ec84fd5-771f-4368-ba3b-b1a04ab499ac)


selanjutnya adalah membuat tampilan pada menu semua film

- pada  bagian navbar arahkan menu ke halaman terkait

![navbarr](https://github.com/irfanltf/temankoding-ci4/assets/48278734/ed13ede3-04ce-476d-af15-9c34ee65cb78)
 
> bisa dilihat pada bagian menu beranda di `line ke 10` ada attribute href yang mengarahkan ke root (/) website film kita
> kemudian pada `line 13` pada attribute href tambahkan valuenya `/film` yang artinya ketika menu diklik akan diarahkan ke controller film method default index
> pada  `line 16` pada attribute href tambahkan value `/genre` yang artinya akan diarahkan ke controller genre method default index
> pada  `line 19` pada attribute href tambahkan value `/about` yang artinya akan diarahkan ke controller about method index


selanjutnya anda dapat mencoba klik menu pada navbar yang sudah diisi hrefnya, jika sudah berhasil pindah halaman maka navbar sudah berfungsi dengan baik

- buat template layout 

> template layout ini berfungsi agar kita tidak membuat kode berulang pada view
> seperti pada bagian header, navbar, dan juga footer yang notabenenya sama pada setiap halaman
> maka dari itu disini template layout berfungsi agar kode kita lebih dinamis dan juga efektif, karena kita tidak membuat sesuatu yang sama berulang kali, berikut caranya
> pertama buat folder `layout` lalu buat file dengan nama `layout.php`
> copy bagian **_header sampai buka tag div dengan class container dan footer dari tutup tag div class container sampai akhir html_** , dari view semuafilm yang sudah kita buat
```php
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layar Kaca 8080</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Layar Kece 8080</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/film">Semua Film</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/genre">Kategori Film</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        
    </div>

    <script src="/assets/js/bootstrap.min.js"></script>
</body>

</html>
```


>didalam class container tag div kita panggil method renderSection seperti dibawah ini :
    
```php
    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>
 ```
 
 >buka kembali  file semuafilm, lalu hapus bagian header dan footer yang sudah kita pindahkan ke file `layout.php` pada folder `layout` mennjadi seperti dibawah ini :

```php
<h1>
    Data Film
</h1>
<div class="row">
    <?php foreach ($semuafilm as $film) : ?>
        <div class="col-md-3">
            <div class="card">
                <img src="/assets/cover/<?= $film["cover"] ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $film["nama_film"] ?></h5>
                    <p class="card-text"><?= $film["nama_genre"] ?> || <?= $film["duration"] ?></p>
                    <a href="#" class="btn btn-info">Detail</a>
                    <a href="#" class="btn btn-success">Update</a>
                    <a href="#" class="btn btn-warning">Delete</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
```
>tambahkan method sectin menjadi seperti dibawah ini
```php
<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<h1>
    Data Film
</h1>
<div class="row">
    <?php foreach ($semuafilm as $film) : ?>
        <div class="col-md-3">
            <div class="card">
                <img src="/assets/cover/<?= $film["cover"] ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $film["nama_film"] ?></h5>
                    <p class="card-text"><?= $film["nama_genre"] ?> || <?= $film["duration"] ?></p>
                    <a href="#" class="btn btn-info">Detail</a>
                    <a href="#" class="btn btn-success">Update</a>
                    <a href="#" class="btn btn-warning">Delete</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection() ?>
```

> method extend digunakan untuk memanggil template layout yang sudah kita buat sebelumnya pada folder `layout` dan file `layout.php`

> ada juga method section dibagian atas dan juga endsection dibawgian bawah, jadi sesuatu yang berada diantara section dan endsection akan dirender kedalam template layout

![hasilnya](https://github.com/irfanltf/temankoding-ci4/assets/48278734/db684452-6755-4d72-96dc-b4b7a98cceb8)


>jika kita tampilkan hasilnya akan tetap sama, namun kita sudah mengimpelentasikan template layout dari `CodeIgniter4`, jadi nantinya ketika kita membuat halaman baru kita tidak perlu membuat header dan footernya lagi, kita dapat langsung panggil method `$this->section()` dan `$this->endSection()` 


- Tampilkan halaman semua film

>kita akan menampililkan semua data film namun dalam bentuk table, dan nantinya ditable ini kita akan melakukan proses CURD
>buka file controller lalu `Film`, kita akan edit method `index`, kita ganti pada `ModelFilm` dengan memanggil method `getAllDataJoin()` seperti gambar dibawah ini :

![contoll](https://github.com/irfanltf/temankoding-ci4/assets/48278734/bae809c3-ba1d-4e14-8966-ff23fcf627c7)

>selanjutnya, pada buka file `index.php` pada folder `film`,  hapus terlebih dahulu semua kodingan yang ada di file `index.php` lalu buat section untuk memanggil template yang sudah kita buat sebelumnya

![content](https://github.com/irfanltf/temankoding-ci4/assets/48278734/871de1a6-e56f-403b-8509-d4bfdaa4350b)

>selanjutnya, didalam section kita akan membuat div dengan class `row` dan juga div dengan class col yang panjang colomnya 12, seperti dibawah ini

![ci](https://github.com/irfanltf/temankoding-ci4/assets/48278734/ec98b1ec-8e59-4f76-8b8c-706ae1d6882f)

>selanjutnya, didalam div dengan class `col-md-12` buat table yang digunakan untuk menampilkan data, jika perhatikan dengna seksama pada tag table ada class `table table-hover`, yang mana class ini merupakan salah satu class dari `bootstrap` yang digunakan untuk membuat style pada table.
>
>kemudian tambahkan colom action di table, yang isinya merupakan button yang nantinya akan kita buat sebagai Proses Update dan Delete data filmnya, pada button update dan delete ada class `btn` yang merupakan membaut class dari bootstrap untuk mengatur tampilan button dan ada pula class btn-primary dan btn-danger yang memberi warna pada kedua button tersebut.
![table](https://github.com/irfanltf/temankoding-ci4/assets/48278734/94527929-05a2-4618-ac23-a49266da5613)

>hasil akhir kodingan pada file `index.php` menjadi seperti ini :
![hasil akhir](https://github.com/irfanltf/temankoding-ci4/assets/48278734/3a2ae13c-b680-4de9-8067-65135584fbb6)

>hasilnya akan menjadi seperti berikut ini :
![layar kecel](https://github.com/irfanltf/temankoding-ci4/assets/48278734/c1af4fb8-2de2-434c-aefa-3e2de241d939)

>silahkan buat juga style pada genre dan tentang kami serta tampilkan halamannya menjadi sseperti dibawah ini :

>Tampilan Halaman Genre Film
![genre](https://github.com/irfanltf/temankoding-ci4/assets/48278734/53dff214-3181-43a6-9f3c-499eedda62f8)


>Tampilan Halaman Tentang Kami
![tentang kami](https://github.com/irfanltf/temankoding-ci4/assets/48278734/07fd4b0e-9587-4070-b9f9-d30e92b21259)



# F. Insert Data ke database
>kita akan mencoba melakukan perintah insert database data film yang berada di halaman semua film. 
>tambahkan button yang digunakan untuk mengarahkan ke halaman tambah data, tampilannya kira-kira akan menjadi seperti ini
![button tambah](https://github.com/irfanltf/temankoding-ci4/assets/48278734/bcab3eef-9159-4959-884e-cbe767bd0139)



>pada file `semuafilm.php` di folder `Views/film` kodenya seperti dibawah ini, ubah pada bagian tag div class `card-header` headernya:
```php
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h1>Semua film</h1>
                    </div>
                    <div class="col-6 text-end">
                        <a href="/film/add" class="btn btn-primary">Tambahkan Data Film</a>
                    </div>
                </div>
            </div>
            
  ```
>pada button diatas jika diperhatikan pada bagian href sudah diarahkan ke controller `Film` dan method `add` (/film/add).
>selanjutnya kita dapat membuat method `add` pada controller `Film`, dan arahkan ke view dengan nama `add.php` yang disimpan pada folder `Views/film`

![add](https://github.com/irfanltf/temankoding-ci4/assets/48278734/022dd014-8525-4417-9781-b3887134cbe3)


>namun jika diakses masih error, karena kita belum membuat view `add` dialam folder `Views/film`
![view add](https://github.com/irfanltf/temankoding-ci4/assets/48278734/e61366ce-8dd4-4796-af24-9f4b1fa654d6)


>buat file view `add.php` pada folder `Views/film` lalu buat struktur template seperti dibawah ini :
![add kode](https://github.com/irfanltf/temankoding-ci4/assets/48278734/241214af-9d62-4a0d-9e26-e1399242dda7)


>lengkapi struktur html menjadi sebagai berikut agar informasinya lebiih jelas
![lengkap add strruktur](https://github.com/irfanltf/temankoding-ci4/assets/48278734/d4912ef0-8898-4efa-96d5-549e17799c37)



>tambahkan strukur halaman pada file `add.php`, kita akan membuat kode html form yang digunakan untuk mengisi data, dan data yang diisi dengan benar akan tersimpan ke database.
>buat tag form dalam tag `div` dengan class `card-body`, kemudian isi denga inputan yang dibututhkan seperti nama film, genre, duration, dan cover. setiap inputan diberikan name, agar gampang ditelusuri samakan name dengan field yang ada pada database seperti dibawah ini
![form input](https://github.com/irfanltf/temankoding-ci4/assets/48278734/eefe8773-a329-4095-bbfd-590406f46064)

>tampilan halaman tambah data film akan menjadi seperti berikut ini :
![input](https://github.com/irfanltf/temankoding-ci4/assets/48278734/1e0c2282-906b-424d-94e8-89168d1f8574)

>selanjutnya kita akan membenarkan pada bagian genre, karna seharusnya yang tampil pada saat inputan genre adalah data genre yang tersedia pada database
>buka lagi controller `Film` hubungkan ke `ModelGenre` pada bagian yang sudah saya berikan tanda :
![tambahkan](https://github.com/irfanltf/temankoding-ci4/assets/48278734/b30069b5-9d95-4da4-a925-ff0611c5179c)

>buka method add tambahkan, panggil data genre dari model, dan kirimkan ke view seperti kode dibawah ini :
![tambahan](https://github.com/irfanltf/temankoding-ci4/assets/48278734/3d40d4f4-d42a-49d2-990d-1c918e22b9bb)

>buka view add, rubah pada bagian inputan select option, tampilkan data genre pada option select menggunakan perulangan 
![select optin](https://github.com/irfanltf/temankoding-ci4/assets/48278734/73b5a9eb-25fa-44f8-a8bd-c0a24ddbcb21)


>maka inputan genrenya akan tampil seperti berikut ini 
![select op](https://github.com/irfanltf/temankoding-ci4/assets/48278734/b1eefb84-706a-40d2-bf46-7f12550b5a33)


>selanjutnya kita akan mengatur bagaimana data yang sudah diinputkan bisa diproses untuk disimpan didatabase.
>arahkan action pada form ke method yang kita inginkan, method ini digunakan untuk memproses data serta menyimpan ke database
>action kita arahkan ke controller `Film` dan method/function `store` dan metode pengiriman data yang digunakan adalah `POST`
>lalu karena kita mengirimkan sebuah file maka kita harus atur enctype nya 
```php
 <form action="/film/store" method="POST" enctype="multipart/form-data">
 ```

>selanjutnya buka controller `Film` dan buat method/function `store` lalu tambahkan kode berikut :
![store](https://github.com/irfanltf/temankoding-ci4/assets/48278734/513cc1a1-e0ae-4b1f-b875-3042a1757f85)

> `line 4 Baris ini mengambil file yang diunggah dengan nama input 'cover' dari permintaan (request) saat ini dan menyimpannya dalam variabel $image.
> 
> `line 11Baris ini mendefinisikan array asosiatif $data yang berisi data yang akan disimpan ke dalam tabel film. Data ini diambil dari permintaan (request) dengan menggunakan metode getPost() untuk mengakses nilai yang dikirimkan melalui input dengan nama yang sesuai.
> `line 17` Baris ini menyimpan data film ke dalam tabel film menggunakan model film yang telah Anda definisikan sebelumnya.
> `line 18` Baris ini mengarahkan (redirect) pengguna ke halaman '/film' setelah data film berhasil disimpan. Pengguna akan dialihkan ke halaman yang ditentukan menggunakan fungsi redirect() dari CodeIgniter.


>buka ModelFilm, lalu isi field apa saja yang ingin diisi pada  properti allowedFields
```php
protected $allowedFields      = ['nama_film', 'id_genre', 'duration', 'cover'];
```

>terakhir buat folder uploads pada folder public yang digunakan untuk menyimpan data gambar pada aplikasi anda

# G. Update dan Delete pada Database
