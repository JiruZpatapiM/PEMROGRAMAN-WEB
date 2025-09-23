# Praktikum 5

Berikut adalah penjelasan analisis dari Praktikum 5 beserta hasil output nya :

---

## 📝 Analisis dan Penjelasan Kodingan

### 1. [`latihan1.html`](latihan1.html)

Kode Program :

```js
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script language="JavaScript">
      document.write("Program JavaScript aku di kepala");
    </script>
    <title>Document</title>
  </head>
  <body>
    <script language="JavaScript">
      document.write("Program JavaSript Aku di body");
    </script>
  </body>
</html>
```

Output:

![gambar1tagScript.png](gambar/gambar1tagScript.png)

Analisis:

- Di bagian tag script pada bagian head dan body, ada attribute `language="javascript"` yang menandakan bahwa script dalam program memakai bahasa pemrograman JavaScript
- Di bagian tag head, ada tag script yang digunakan untuk menampilkan teks "Program JavaScript Aku di kepala" `document.write("Program JavaScript Aku di kepala")`
- Di bagian tag body, ada tag script yang digunakan untuk menampilkan teks "Program JavaScript Aku di body" `document.write("Program JavaScript Aku di body ")`

### 2. [`latihan2.html`](latihan2.html)

Kode Program :

```js
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Belajar Javascript : Mengenal Event Pada Javascript</title>
  </head>
  <body>
    <h1>Mengenal Event Pada Javascript</h1>
    <h2>Perograman WEB Event one click</h2>
    <!-- memberikan event pada element tombol -->
    <button onclick="tampilkan_nama()">klik disini</button>

    <!-- id hasil -->
    <div id="hasil"></div>

    <script>
      // membuat function tampilkan_nama
      function tampilkan_nama() {
        document.getElementById("hasil").innerHTML =
          "<h3>Nama saya Ahmed Bin Atir Alakatir</h3>";
      }
    </script>
  </body>
</html>
```

Output:

![gambar2tagScript.png](gambar/gambar2tagScript.png)

Analisis

- function tampilkan_nama() → mendefinisikan sebuah fungsi yang akan dijalankan saat dipanggil.

- document.getElementById("hasil") → mencari elemen HTML dengan id="hasil".

- .innerHTML = "<h3>Nama saya Ahmed Bin Atir Alakatir</h3>"; → mengganti isi elemen tersebut dengan teks/HTML baru.

- 👉 Jadi, saat tombol diklik (karena ada onclick="tampilkan_nama()"), fungsi ini dijalankan dan teks Nama saya Ahmed Bin Atir Alakatir akan muncul di dalam <div id="hasil"></div>.
