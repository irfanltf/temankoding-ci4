# Panduan CodeIgniter 4
* [Intro CodeIngiter 4](#a-intro-codeigniter-4)
* [Install CodeIgniter 4](#b-installasi-codeigniter-4)
* [Konseep MVC](#c-konsep-mvc)

# A. Intro Codeigniter 4
```
CodeIgniter is a powerful PHP framework with a very small footprint,
built for developers who need a simple and elegant toolkit to create full-featured web applications.
```
### 1.Tujuan dari Web Framework?
#### Mempercepat dan mempermudah proses pengembangan aplikasi web
kerangka kerja yang terstruktur dan terorganisir,  struktur dan aturan yang jelas untuk mengembangkan aplikasi web,
pengembang tidak perlu lagi membuat struktur dan aturan yang sama dari awal, yang dapat memakan waktu dan energi yang berlebihan.
#### menyediakan kerangka kerja yang terstruktur dan terorganisir
dapat membantu dalam hal pengembangan tim, setiap anggota tim dapat bekerja secara terpisah pada komponen yang berbeda
dan kemudian mengintegrasikan hasil kerja mereka ke dalam satu aplikasi web, setiap anggota tim dapat memahami struktur kode dan logika bisnis aplikasi web dengan mudah.


### 2. Top Programming Language in Github.com
![Picture1](https://github.com/irfanltf/temankoding-ci4/assets/48278734/fb12ebc8-4c39-4e44-bf45-1673f9cbda67)

### 3. Most Popular BackEnd Framework Statisics
![Picture2](https://github.com/irfanltf/temankoding-ci4/assets/48278734/dd5213bf-615c-4ed1-98d7-0abd6b353a5c)

### 4. Most Question About PHP FW in Stackoverflow
![Picture3](https://github.com/irfanltf/temankoding-ci4/assets/48278734/c51150f9-0829-4727-aab0-22ec918bf300)

### 5. Statistic About CodeIgniter
![Picture4](https://github.com/irfanltf/temankoding-ci4/assets/48278734/152df855-fcda-47a6-af97-6f0e4702429a)


### 6. Website Use Codeigniter
![Picture5](https://github.com/irfanltf/temankoding-ci4/assets/48278734/42e0ad42-2f31-45fa-afd9-50703d214d26)


### 7. CodeIgniter VS Laravel
![Picture6](https://github.com/irfanltf/temankoding-ci4/assets/48278734/e75505c6-350d-4302-9e30-73c4818bffbf)
![Picture7](https://github.com/irfanltf/temankoding-ci4/assets/48278734/59e33b33-c3b9-463a-bdbe-8c9464b02915)
![Picture8](https://github.com/irfanltf/temankoding-ci4/assets/48278734/b9db6d87-d17b-42b2-a7a0-ad4a96f62396)
![Picture9](https://github.com/irfanltf/temankoding-ci4/assets/48278734/dabf112a-c4d5-45d4-b60a-8f3c3553bbfe)

### 8. Kenapa CodeIgniter
##### 1. Mudah dipelajari
##### 2. Konfigurasi Sederhana
##### 3. Small Footprint
##### 4. Terstruktur (menggunakan Konsep MVC)
##### 5. Tidak harus mengikuti aturan coding yang ketat
##### 6. Dukungan Komunitas yang luas


# B. Installasi CodeIgniter 4
untuk dapat menjalankan codeigniter 4 ada beberapa hal yang perlu disiapkan, diantaranya adalah :
##### 1. (PHP, Web Server, Database Server) ====> XAMPP
karena codeigniter 4 berjalan pada bahasa pemrograman ![image](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
, pastikan komputer anda sudah terinstall php dengan versi minimal 7.3.
untuk menjalankan php anda membutuhkan web server, web server yang bisa digunakan ada banyak macam pilihan dan contoh yang paling umum digunakan seperti Apache dan juga nginx,
dan agar informasi pada aplikasi dapat berubah secara dinamis dibutuhkan juga database server seperti 
![image](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white) 
, ![image](https://img.shields.io/badge/PostgreSQL-316192?style=for-the-badge&logo=postgresql&logoColor=white) , ![image](https://img.shields.io/badge/SQLServer-316192?style=for-the-badge&logo=sqlserver&logoColor=white)  dan lain sebagainya. namun sebenarnya anda tidak usah khawatir juga bingun untuk menginstall satu persatu teknologi tersebut, anda dapat memanfaatkan aplikasi XAMPP yang dapat mem-bundling PHP, Web Server dan Database Server.

##### 2. Code Editor
menulis kode program hingga ribuan baris sudah menjadi hal yang umum untuk programmer, code editor menjadi alat perang untuk programmer dalam menulis kode, setiap programmer biasanya mempunyai kode editor favoritnya masing-masing. untuk menulis code pada codeigniter 4 bisa menggunakan berbagai macam kode editor seperti (notepad, sublime, visual studio code, atom, dll). pada codeigniteer 4 ini memungkinkan anda untuk menjalankan perintah pada terminal, jadi sangat disarankan untuk menggunakan code editor yang mempunyai fitur terminal didalamnya contohnya visual studio code, namun jika benar-benrar tidak memungkinkan anda bisa menggunakan terminal secara terpisah seperti git bash, cmd pada windows atau terminal pada macOS dan Linux.

##### 3. Composer
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
