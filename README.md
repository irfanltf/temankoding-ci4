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

# F. Insert Data ke database
# G. Update dan Delete pada Database
