## Nama Sistem
### SCB SIMAK


## Deskripsi Singkat
Dalam mata kuliah PSBO, kelompok kami mendapat client dari SMP Cendekia Baznas yang membutuhkan tempat yang dapat dijadikan sebagai database siswa, atau biasa disebut Sistem Informasi dan Manajemen Akedemik Siswa. sebelumnya, pihak SMP Cendekia Baznas masih menggunakan microsoft excel sebagai database siswa seperti biodata siswa dan juga nilai akademik siswa yang semuanya dihitung manual. Maka dari itu kami ingin memindahkan sistem informasi yang awalnya berupa excel dan hanya bisa diisi oleh perorangan saja menjadi sistem informasi yang bisa diakses oleh guru ataupun tenaga pendidik lainnya.

**SCB SIMAK** merupakan sebuah platform berbasis web yang berfungsi sebagai data siswa yang terpusat. web ini berisi seluruh biodata dan juga nilai akademik siswa pada SMP Cendekia Baznas. seluruh guru maupun tenaga pendidik dapat mengakses SCB SIMAK untuk memasukkan biodata lengkap siswa maupun nilai akademik siswa. pada biodata dapat dilakukan pemasukan data lengkap siswa dan orang tua siswa tersebut, dan juga dapat dilakukan pengubahan data jika dibutuhkan. lalu pada nilai akademik siswa dapat dilakukan pemasukan data berupa nilai ujian harian maupun UTS dan UAS, nantinya akan dihitung rata rata akhir yang nantinya bisa digunakan sebagai nilai rapor semester tersebut. dengan memanfaatkan SCB SIMAK diharapkan seluruh informasi siswa dapat diakses secara online dan juga bisa diakses oleh guru maupun tenaga penididk lainnya.

## Ruang Lingkup Pengembangan
### Software
- Visual Studio Code
- PhpMyAdmin

### Hardware
- intel Core i5-7200U
- RAM 8GB

### Tech-Stack
- PHP (Back-end)
- Laravel + Bootstrap (Front-end)
- MySQL (DBMS)
- Apache (Server)

## Diagram (use case, Activity, Class)
### Use Case Diagram
![Use Case Diagram](https://user-images.githubusercontent.com/38348341/82389958-9d531c00-9a67-11ea-9cf9-36b993ac625c.png)

### Activity Diagram
![Activity Diagram](https://user-images.githubusercontent.com/38348341/82389953-9af0c200-9a67-11ea-8809-520982a7ec71.png)

### Class Diagram
![Class Diagram](https://user-images.githubusercontent.com/38348341/82389956-9cba8580-9a67-11ea-9caf-936723f18100.png)

## Fitur Secara Umum
- Measukkan dan manajemen data lengkap siswa
- memasukkan dan manajemen nilai akademik siswa

## Konsep OOP yang Digunakan
- Class
- Object

## Tipe desain yang digunakan (Pattern/Anti Pattern)
### Model
Model pada design pattern MVC bertanggung jawab untuk mengambil data dan mengubahnya menjadi data yang lebih bermakna yang dapat dikelola oleh lapisan aplikasi yang lain dan mengirimkannya kembali ke lapisan yang sesuai. Model database yang dipergunakan pada projek ini adalah model database dengan migration:Eloquent ORM yang terdapat pada framework Laravel.
- Siswa 
- Orang Tua
- Nilai Siswa
- Asrama 
 
### View
View dalam design pattern MVC mendefinisikan dengan tepat apa yang disajikan kepada pengguna. Biasanya, Controller meneruskan data ke setiap tampilan. Tampilan juga mengumpulkan data dari pengguna. Di sini kami menggunakan bahasa pemrograman PHP untuk tampilan. Pada framework laravel terdapat fitur Blade yang berfungsi untuk menampilkan output pada view. blade juga digunakan untuk membuat layout website. Task dasar yang dapat dipergunakan dalam menggunakan Blade dari laravel yaitu create, edit, index, dan show.  
- View Biodata Siswa
  - Create pada view Biodata Siswa dipergunakan untuk membuat form dengan data baru yang akan dikirimkan ke database.
  - Edit pada view Biodata Siswa dipergunakan untuk mengubah data yang terdapat pada database.
  - Index pada view Biodata Siswa dipergunakan untuk menampilkan keseluruhan data siswa yang terdapat pada database.
  - Show pada view Biodata Siswa dipergunakan untuk menampilkan secara detail (satu-persatu) data siswa pada database. 
- View Nilai Siswa (Rapot)
- View Asrama
- View Profil Wali Kelas
- View Data Guru
- View Dashboard 
 
 
## Controller
Controller dalam design pattern MVC merupakan bagian yang menjembatani model dan view. Controller berisi perintah-perintah yang berfungsi untuk memproses suatu data dan mengirimkannya ke halaman web. Pada framework laravel, controller ditulis menggunakan bahasa pemrograman PHP.
- Auth Login, Auth controller digunakan untuk mengatur autentikasi saat login sehingga hanya yang memiliki akun guru untuk dapat mengakses sistem informasi akademik siswa. 
- Controller Siswa, Controller Siswa dipergunakan untuk menghubungkan model database siswa dengan view biodata siswa dan nilai siswa.  

## Developer + Job Desc
| Nama | NIM | Job Desc |
|---	|---	|---	|
| Muhammad Fauzan Azhim | G64170009 | Front-end |
| Chamdan L. Abdulbaaqiy | G64170013 | Back-end | 
| Fakhoor Izaaz Wildhanrahma | G64170017 | Front-end | 
| Suko Martin | G64170065 | Back-end |
| Arya Pramuja Pradana | G64170087 | Back-end |
| Fauzi Muhammad Sulaeman | G64170094 | Project Manager + Designer |
| Rizal Fajar Bancin | G64170102 | Front-end |
| Rafid Rudy Darmawan | G64170111 | Front-end |
