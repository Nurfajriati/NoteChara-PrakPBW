## About NoteChara
    NoteChara merupakan aplikasi web yang akan membantu penulis untuk melaksanakan tugasnya sebagai penulis cerita, novel, dan sebagainya. Pada web ini dapat menginput judul dan sinopsis dari suatu cerita yang akan dibuat. Serta terdapat inputan untuk character-character yang akan dimasukkan pada cerita.

# How to Use ⚙

<h4>pre-requisite</h4>
<ul>
 <p> <li>Install aplikasi XAMPP untuk menghidupkan web server dan db server</li> </p>
  <li>Install Composer terlebih dahulu</ll>
  </ul>

 <h4>Berikut cara menjalankannya:</h4>
1. Clone repositori ini terlebih dahulu di dalam folder htdocs
  <pre><code>git clone https://github.com/Nurfajriati/NoteChara-PrakPBW</code></pre>
2. Masuk ke dalam folder project melalui CMD atau Command Prompt
   <pre><code>cd Restorant </code></pre>
3. Lakukan Composer Install
   <pre><code>composer install</code></pre>
4. Copy isi file .env.example lalu buat file baru .env
    <pre><code>cp .env.example .env</code></pre>
5. Aktifkan key access menggunakan command artisan seperti berikut:
    <pre><code>php artisan key:generate</code></pre>
6. Di dalam file .env ubahlah nama database yang ada di .env menjadi restorant
    <pre><code>DB_DATABASE=crud_pbw</code></pre>
8. Setelah itu buatlah database dengan menggunakan aplikasi RDBMS yang anda punya
    <pre><code> create database notechara</code></pre>
    <pre><code> create database notesinopsis</code></pre>
9. Setelah itu hidupkan server web dengan cara sebagai berikut:
    <pre><code>php artisan serve</code></pre>
