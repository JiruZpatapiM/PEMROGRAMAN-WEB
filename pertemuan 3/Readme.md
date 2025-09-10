# Analisis

# ANALISIS BIOGRAFI

1. portofolio.html

```Bagian Header
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beranda</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="portofolio.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
```

- charset="UTF-8" → supaya teks bisa tampil dengan baik (termasuk huruf Indonesia).
- viewport → agar halaman bisa menyesuaikan di HP dan laptop.
- title → judul halaman (muncul di tab browser).
- style.css → CSS utama untuk semua halaman.
- portofolio.css → CSS tambahan khusus halaman beranda.
- font-awesome → dipakai untuk menampilkan ikon sosial media.

```Bagian Header + Navigasi
<header>
  <nav>
    <a href="portofolio.html" class="logo">
      <img src="picture/logo.png" alt="JRZ Logo" />
    </a>
    <ul class="nav-links">
      <li><a href="portofolio.html" class="active">Beranda</a></li>
      <li><a href="about.html">Tentang Saya</a></li>
      <li><a href="project.html">Proyek</a></li>
      <li><a href="contact.html">Kontak</a></li>
    </ul>
  </nav>
</header>
```

- Bagian ini adalah menu navigasi di atas.
- Ada logo di sebelah kiri.
- Menu navigasi di kanan: Beranda, Tentang Saya, Proyek, Kontak.
- class="active" pada Beranda artinya menu ini sedang aktif (kita berada di halaman beranda).

```Bagian Hero
<section class="hero">
  <h2>Halo, Saya <span>JiruZpatapiM</span></h2>
  <p>
    Seorang pria yang minat dalam bidang Desain UI/UX Game dan Desain Grafis
  </p>
</section>
```

- Ini adalah bagian perkenalan singkat.
- Ada teks sapaan: “Halo, Saya JiruZpatapiM”.
- <span> digunakan untuk memberi gaya berbeda pada nama.
- Ada deskripsi singkat tentang minat kamu.

```Bagian Game Gallery
<section class="game-gallery">
  <h2>Game Gallery</h2>
  <div class="game-container">
    <div class="game-item">
      <img src="picture/game1.jpg" alt="Game 1">
      <h3>Game 1</h3>
      <p>Deskripsi singkat game 1</p>
    </div>
    <!-- Tambahkan item game lainnya di sini -->
  </div>
</section>
```

- Ini adalah bagian galeri game.
- Ada judul: “Game Gallery”.
- Di dalamnya ada beberapa game dengan foto dan deskripsi singkat.

```Bagian Pop Up Gambar
<div id="imgModal" class="modal" onclick="closeModal()">
  <span class="close">&times;</span>
  <img class="modal-content" id="modalImage" />
</div>
```

- Bagian ini adalah jendela pop-up yang muncul saat kita klik gambar di galeri.
- <span class="close">×</span> → tombol untuk menutup modal.
- Gambar yang dibuka akan dimasukkan ke id="modalImage".

```Bagian Sosial Media
<section class="social-media">
  <h2>Sosial Media</h2>
  <div class="social-container">
    <a href="https://www.instagram.com/jiruzpatapi/" target="_blank" class="social instagram">
      <i class="fab fa-instagram"></i> Instagram
    </a>
    <a href="https://www.tiktok.com/@jiruzpatapi" target="_blank" class="social tiktok">
      <i class="fab fa-tiktok"></i> TikTok
    </a>
    <a href="https://www.linkedin.com/in/jiruzpatapi/" target="_blank" class="social linkedin">
      <i class="fab fa-linkedin"></i> LinkedIn
    </a>
  </div>
</section>
```

- Ini adalah bagian sosial media.
- Ada judul: “Sosial Media”.
- Di dalamnya ada tombol untuk mengikuti Youtube, Facebook, Github, Instagram, TikTok, dan LinkedIn.
- Setiap tombol memiliki ikon dan teks.
- Klik tombol akan membuka profil atau halaman tersebut di jendela baru.

```Bagian Footer
<footer>
  <p>&copy; 2023 JiruZpatapiM. All rights reserved.</p>
</footer>
```

- Ini adalah bagian footer.
- Ada teks copyright: “&copy; 2023 JiruZpatapiM. All rights reserved.”.
- Teks ini biasanya muncul di bagian bawah halaman.

```Bagian JavaScript (fungsi modal)
<script>
  function openModal(img) {
    document.getElementById("imgModal").style.display = "flex";
    document.getElementById("modalImage").src = img.src;
  }
  function closeModal() {
    document.getElementById("imgModal").style.display = "none";
  }
</script>
```

- Bagian ini adalah JavaScript untuk membuat pop-up gambar.
- Fungsi openModal(img) → ketika kita klik gambar, pop-up akan muncul dan gambar akan ditampilkan.
- Fungsi closeModal() → ketika kita klik tombol tutup (×), pop-up akan hilang.

2. portofolio.css

```body
body {
  margin: 0;
  font-family: Arial, sans-serif;
  height: 100vh;
  background: linear-gradient(135deg, #007bff, #00d4ff);
  color: white;
  display: flex;
  flex-direction: column;
}
```

- margin: 0; → hilangkan jarak default di browser.
- font-family: Arial, sans-serif; → pakai font Arial (jika tidak ada, pakai font default sans-serif).
- height: 100vh; → tinggi penuh layar.
- background: linear-gradient(...) → latar belakang gradasi biru → cyan.
- color: white; → teks default berwarna putih.
- display: flex; flex-direction: column; → layout fleksibel berbentuk kolom (vertikal).

```Hero Section
.hero {
  flex: 1;
  text-align: center;
  padding: 100px 20px;
}

.hero h2 {
  font-size: 2.5em;
}

.hero span {
  color: yellow;
}
```

- .hero → bagian perkenalan.
- flex: 1; → ambil ruang yang tersisa di layar.
- text-align: center; → isi ditengah.
- padding: 100px 20px; → ada jarak ke dalam biar teks tidak terlalu mepet.
- .hero h2 → ukuran judul besar.
- .hero span → memberi warna kuning pada nama yang ditandai <span>.

```Social Media Section
.social-media {
  text-align: center;
  margin-top: 40px;
}

.social-media h2 {
  color: white;
  margin-bottom: 20px;
}
```

- .social-media → bagian heading sosial media rata tengah.
- margin-top: 40px; → beri jarak ke atas dari elemen sebelumnya.
- Judul (h2) berwarna putih & ada jarak ke bawah.

```Social Card Section
.social-card {
  background: #00334d; /* biru tua */
  padding: 20px;
  border-radius: 10px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
```

- Kotak untuk menampung semua ikon sosmed.
- background: #00334d; → warna biru tua.
- padding: 20px; → ruang dalam.
- border-radius: 10px; → sudut membulat.
- display: flex; flex-wrap: wrap; → ikon tersusun fleksibel, otomatis turun ke baris baru kalau layar sempit.
- justify-content: center; → ikon rata tengah.
- gap: 20px; → jarak antar ikon.
- box-shadow → ada bayangan lembut di belakang kotak.

```Ikon Social Media
.social-card a {
  font-size: 32px; /* ukuran icon */
  color: white;
  transition: 0.3s;
}

.social-card a:hover {
  transform: scale(1.2);
}
```

- Ikon (a) ukurannya besar (32px).
- Default berwarna putih.
- transition: 0.3s; → animasi halus ketika berubah.
- :hover → ketika diarahkan kursor, ikon membesar (scale(1.2)).

```Warna Khusus Tiap Ikon
.social-card a .fa-youtube { color: #ff0000; }
.social-card a .fa-instagram { color: #e1306c; }
.social-card a .fa-tiktok { color: #010101; }
.social-card a .fa-facebook { color: #1877f2; }
.social-card a .fa-linkedin { color: #0a66c2; }
.social-card a .fa-github { color: #fff; }
```

Memberi warna khas sesuai brand:

- YouTube → merah
- Instagram → pink keunguan
- TikTok → hitam
- Facebook → biru
- LinkedIn → biru tua
- GitHub → putih

```Game Gallery
.game-gallery {
  text-align: center;
  margin-top: 20px; /* posisi agak ke atas */
}

.game-gallery h2 {
  color: white;
  margin-bottom: 20px;
}
```

- Judul galeri rata tengah.
- Ada jarak ke atas dari elemen sebelumnya.
- Judul berwarna putih dan punya jarak ke bawah.

```Grid Foto Game
.gallery-card {
  background: #00334d;
  padding: 15px;
  border-radius: 10px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 15px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.gallery-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 8px;
  cursor: pointer;
  transition: 0.3s;
}

.gallery-card img:hover {
  transform: scale(1.05);
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
}
```

- .gallery-card → kotak berisi foto-foto game.
- Pakai CSS Grid → otomatis membentuk kolom berdasarkan ukuran layar (auto-fit).
- Setiap gambar: - width: 100% → penuh satu kotak grid. - height: 200px → tinggi gambar. - object-fit: cover → gambar dipotong biar proporsional. - cursor: pointer → bisa diklik. - Efek hover: sedikit membesar + bayangan.

```Pop Up Gambar
.modal {
  display: none;
  position: fixed;
  z-index: 9999;
  padding-top: 50px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.9);
}
```

- .modal → pop-up layar penuh.
- Awalnya display: none; → disembunyikan.
- position: fixed; → menempel di layar meski discroll.
- z-index: 9999; → berada di paling depan.
- Latar belakang hitam semi transparan (rgba(0,0,0,0.9)).

```Isi Modal dan Tombol Tutup
.modal-content {
  margin: auto;
  display: block;
  max-width: 90%;
  max-height: 90vh;
  border-radius: 10px;
}

.close {
  position: absolute;
  top: 20px;
  right: 35px;
  color: white;
  font-size: 40px;
  font-weight: bold;
  cursor: pointer;
}
```

- .modal-content → gambar yang ditampilkan di tengah modal.
- Tidak lebih dari 90% layar.
- Sudut melengkung.
- .close → tombol "×" untuk menutup modal.
- Posisinya di pojok kanan atas.
- Ukuran besar (40px) agar mudah diklik.

3. about.html

```Struktur Dasar
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="about.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>
```

- <!DOCTYPE html> → deklarasi standar HTML5.
- <html lang="id"> → bahasa utama dokumen adalah Indonesia.
- <meta charset="UTF-8" /> → mendukung karakter UTF-8 (emoji, huruf internasional).
- <meta name="viewport"...> → agar tampilan responsif di HP/laptop.
- <title>Tentang</title> → judul tab browser.
- <link rel="stylesheet"...> → memuat file CSS style.css, about.css, dan Font Awesome untuk ikon.

```Header dan Navigasi
<body>
    <header>
      <nav>
      <a href="portofolio.html" class="logo">
          <img src="picture/logo.png" alt="JRZ Logo" />
        </a>
        <ul class="nav-links">
          <li><a href="portofolio.html">Beranda</a></li>
          <li><a href="about.html" class="active">Tentang Saya</a></li>
          <li><a href="project.html">Proyek</a></li>
          <li><a href="contact.html">Kontak</a></li>
        </ul>
      </nav>
    </header>
```

- Bagian header berisi navigasi utama.
- Logo ditampilkan dalam bentuk gambar (logo.png).
- ul.nav-links → daftar menu navigasi (Beranda, Tentang, Proyek, Kontak).
- Pada halaman ini, Tentang Saya diberi class active → menandakan halaman yang sedang dibuka.

```Section Tentang Saya
<section class="about">
      <h2>Tentang Saya :</h2>
```

- Menampilkan foto profil pengguna.
- Gambar diambil dari folder picture/profil.jpg.
- alt="Foto Profil" → teks alternatif jika gambar gagal dimuat.

```Card Biodata
      <div class="card bio">
        <p>
          <span><strong>Email:</strong></span> yurieger9@gmail.com
        </p>
        <p>
          <span><strong>Nomor Telepon:</strong></span> 085823361711
        </p>
        <p>
          <span><strong>Alamat:</strong></span> Jl. Raya Makassar No. 123,
          Makassar, Sulawesi Selatan
        </p>
        <p>
          <span><strong>Pendidikan Sekarang:</strong></span> S1 Teknik
          Komputer, Universitas Negeri Makassar
        </p>
        <p>
          <span><strong>Pendidikan Terakhir:</strong></span>
          <ul>
            <li>SMK Negeri 1 Makassar, Jurusan Rekayasa Perangkat Lunak (2022 - 2025)</li>
            <li>SMP Negeri 27 Makassar (2018 - 2021)</li>
            <li>SD Negeri Unggulan Monginsidi 1 Makassar (2014 - 2017)</li>
          </ul>
        </p>
      </div>
```

- Ini adalah card biodata diri.
- Informasi yang ditampilkan: - Email - Nomor telepon - Alamat - Pendidikan sekarang - Riwayat pendidikan terakhir (ditampilkan dalam <ul> → list).

```Card Deskripsi Diri
<div class="card">
        <p>
          Saya adalah seorang mahasiswa Teknik Komputer Universitas Negeri Makassar Angkatan 2024 yang fokus di bidang Web
          Development UI/UX.
        </p>
        <p>
          Saya memiliki minat pada desain UI/UX untuk sebuah game interaktif,website ataupun aplikasi mobile dan saya juga memiliki minat pada bidang front-end programming.
        </p>
      </div>
```

- Card ini berisi deskripsi singkat tentang diri.
- Paragraf pertama: pendidikan & fokus bidang (Web Dev & UI/UX).
- Paragraf kedua: minat (game UI/UX, aplikasi, website, front-end programming).

```Card Statistik GitHub
<div class="card github-stats">
        <h3>📊 My GitHub Stats</h3>
        <div class="stats-container">
          <img
            src="https://github-readme-stats.vercel.app/api?username=JiruZpatapiM&theme=neon&hide_border=false&include_all_commits=true&count_private=false"
            alt="GitHub Stats"
          />

          <img
            src="https://nirzak-streak-stats.vercel.app/?user=JiruZpatapiM&theme=neon&hide_border=false"
            alt="GitHub Streak"
          />

          <img
            src="https://github-readme-stats.vercel.app/api/top-langs/?username=JiruZpatapiM&theme=neon&hide_border=false&include_all_commits=true&count_private=false&layout=compact"
            alt="Top Languages"
          />
        </div>
      </div>
```

- Bagian ini menampilkan statistik GitHub otomatis.
- Menggunakan API dari github-readme-stats dan streak-stats.
- Statistik yang ditampilkan: - Jumlah commit, repo, dll. - Streak aktivitas coding. - Bahasa pemrograman yang paling sering digunakan.

```footer
    <footer>
      <p>&copy; 2025 JiruZpatapiM</p>
    </footer>
  </body>
</html>
```

- Ini adalah bagian footer.
- Ada teks copyright: “&copy; 2023 JiruZpatapiM. All rights reserved.”.
- Teks ini biasanya muncul di bagian bawah halaman.

4. about.css

```Body
body {
  margin: 0;
  padding: 0;
  min-height: 100vh;
  background: linear-gradient(to bottom, #00c6ff, #0072ff);
  background-attachment: fixed; /* biar ngikut scroll */
  font-family: Arial, sans-serif;
  color: #fff;
}
```

- Menghapus margin & padding bawaan browser.
- Tinggi minimal halaman = 100% layar (viewport height).
- Background berupa gradasi biru muda ke biru tua, tetap diam saat discroll.
- Font default = Arial.
- Warna teks default = putih.

```Section
.about {
  padding: 50px 20px;
  max-width: 900px;
  margin: auto;
  text-align: center;
}
```

- Ruang dalam atas-bawah 50px, kiri-kanan 20px.
- Lebar maksimal 900px, sisanya auto untuk rata tengah.
- Teks di dalamnya rata tengah.

```Foto Profil
.profile-pic img {
  width: 160px;
  height: 160px;
  border-radius: 50%;
  object-fit: cover;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
  margin-bottom: 20px;
}
```

- Ukuran tetap 160×160px.
- Bentuk lingkaran (border-radius: 50%).
- object-fit: cover supaya gambar tidak ketarik.
- Ada bayangan lembut di belakang foto.
- Jarak bawah 20px dari elemen berikutnya.

```Card Box
.card {
  background: rgba(0, 0, 0, 0.6); /* semi transparan */
  color: #fff;
  border-radius: 12px;
  padding: 20px;
  margin: 20px auto;
  max-width: 900px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
}
```

- Background hitam semi transparan.
- Teks putih.
- Sudut melengkung (12px).
- Ada padding dalam 20px.
- Jarak luar 20px, posisi di tengah.
- Bayangan lembut untuk efek timbul.

```
.github-stats {
  text-align: center;
}

.github-stats img {
  max-width: 100%;
  margin: 10px 0;
  border-radius: 8px;
}
```

- Semua isi di dalam .github-stats (judul, gambar) diratakan ke tengah.
- Tidak melebihi lebar container.
- Jarak atas-bawah 10px.
- Sudut gambar dibulatkan (8px).

```flexbox
.stats-container {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  gap: 20px; /* jarak antar box */
  flex-wrap: wrap; /* biar responsif kalau layar kecil */
}
```

- Menggunakan Flexbox.
- Rata tengah secara horizontal.
- Item disejajarkan di bagian atas.
- Ada jarak antar item (20px).
- flex-wrap: wrap → otomatis turun ke bawah kalau layar sempit (responsif).

```Adjust Gambar
.stats-container img {
  width: 300px; /* biar ukurannya konsisten */
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
}
```

- Lebar tetap 300px (supaya seragam).
- Sudut agak bulat.
- Ada bayangan halus.

```card biodata
.card.bio {
  text-align: left; /* teks rata kiri */
}
.card.bio p {
  margin: 8px 0;
  line-height: 1.6;
}
```

- Khusus card biodata, teks diratakan ke kiri (supaya lebih rapi dibaca).
- Jarak antar paragraf = 8px.
- Tinggi baris (line-height) 1.6, supaya teks lebih lega & mudah dibaca.

5. project.html

```
<section class="projects">
  <h2>Pengalaman Saya</h2>

<div class="card project-card">
  <h3>Pengalaman 1</h3>
  <p>
    Pernah Melakukan Magang di PT. Cahaya Surya selama 6 bulan dan
    mendapatkan hasil yang sempurna.
  </p>
</div>

<div class="card project-card">
  <h3>Pengalaman 2</h3>
  <p>
    Pernah Melakukan kerja Part Time di CV. IQ Project selama 3 bulan
    menjadi Mandor Magang.
  </p>
</div>

<div class="card achievement-card">
  <h3>Prestasi</h3>
  <img src="picture/prestasi.jpg" alt="Foto Prestasi" />
  <p>
    Saya mendapatkan prestasi dalam bidang E-Sport di game Mobile Legend
    dengan mendapatkan juara 2 pada perlombaan Community Hero Skaone
    Championship.
  </p>
</div>
```

- Membuka blok utama yang berisi pengalaman kerja/magang dan prestasi.
- Judul utama section = Pengalaman Saya.
- Card pengalaman kerja/magang pertama.
- Judul: Pengalaman 1.
- Isi: Magang 6 bulan di PT. Cahaya Surya.
- class="project-card" → bisa pakai styling khusus project/experience.
- Card pengalaman kedua.
- Isi: Part Time di CV. IQ Project sebagai Mandor Magang.
- Menampilkan Prestasi.
- Ada gambar (prestasi.jpg).
- Deskripsi: Juara 2 E-Sport Mobile Legend (Community Hero Skaone Championship).
- class="achievement-card" → bisa dibedakan style-nya dari project-card.

6. project.css

```Project
.projects {
  text-align: center;
  padding: 40px 20px;
}
.projects h2 {
  margin-bottom: 30px;
  color: white;
}
.achievement-card img {
  width: 100%;
  height: auto;
  border-radius: 10px;
  margin: 15px 0;
}
```

- text-align: center; → Semua teks dalam section projects rata tengah.
- padding: 40px 20px; → Ruang dalam section: atas-bawah 40px, kiri-kanan 20px.
- margin-bottom: 30px; → Jarak bawah judul supaya tidak menempel dengan card.
- color: white; → Judul tetap putih, lebih konsisten dengan background.
- width: 100%; → Gambar memenuhi lebar card.
- height: auto; → Proporsi gambar tetap (tidak gepeng).
- border-radius: 10px; → Gambar sudutnya agak melengkung.
- margin: 15px 0; → Spasi atas-bawah gambar agar tidak terlalu mepet dengan teks.

  7.contact.html

```Section Kontak
<section class="contact">
  <div class="card contact-card">
    <h2>Hubungi Saya :</h2>
    <form>
      <label for="name">Nama:</label>
      <input type="text" id="name" name="name" />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" />

      <label for="message">Pesan:</label>
      <textarea id="message" name="message"></textarea>

      <button type="submit">Kirim</button>
    </form>
  </div>
</section>
```

- Bagian utama untuk form kontak.
- class="card contact-card" → Form dibungkus dalam card agar lebih rapi.
- <form> berisi input:
                    - Nama → input type="text".
                    - Email → input type="email" (validasi otomatis untuk format email).
                    - Pesan → textarea untuk isi pesan lebih panjang.
                    - Tombol Kirim → button type="submit".
                    - Fungsinya: user bisa mengisi form untuk menghubungi pemilik website.

8. contact.css

````.contact
.contact {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 50px 20px;
}
```

- display: flex; → Aktifkan flexbox.
- justify-content: center; → Form kontak rata tengah horizontal.
- align-items: center; → Form rata tengah vertikal.
- padding: 50px 20px; → Beri jarak dalam (atas-bawah 50px, kiri-kanan 20px).

```
.contact-card {
  background: #00334d;
  color: white;
  border-radius: 12px;
  padding: 30px;
  max-width: 400px;
  width: 100%;
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
  text-align: center;
}
```

- background: #00334d; → Card warna biru tua.
- border-radius: 12px; → Sudut melengkung lembut.
- padding: 30px; → Ruang dalam nyaman.
- max-width: 400px; → Lebar maksimum card 400px.
- width: 100%; → Agar responsif (ikut lebar layar kecil).
- box-shadow: ...; → Efek bayangan untuk kesan melayang.
- text-align: center; → Isi teks rata tengah.

```
.contact-card input,
.contact-card textarea {
  padding: 10px;
  border-radius: 8px;
  border: none;
  outline: none;
}
.contact-card button {
  background: #007bff;
  color: white;
  border: none;
  padding: 10px;
  border-radius: 8px;
  cursor: pointer;
  transition: background 0.3s;
}
.contact-card button:hover {
  background: #0056b3;
}
```

- adding: 10px; → Ruang dalam biar enak diketik.
- border-radius: 8px; → Sudut input membulat.
- border: none; → Hilangkan border default.
- outline: none; → Hilangkan garis fokus default (browser).background: #007bff; → Warna biru tombol.
- border-radius: 8px; → Tombol membulat.
- cursor: pointer; → Kursor berubah jadi tangan saat hover.
- transition: background 0.3s; → Animasi halus saat warna berubah.
- Saat tombol di-hover → warna biru lebih gelap (#0056b3).
- Memberikan efek interaktif agar terasa "klik-able".

9. style.css

```
html,
body {
  height: 100%;
  margin: 0;
  display: flex;
  flex-direction: column;
}

body {
  background: #f8f9fa;
  color: #333;
  font-family: Arial, sans-serif;
}

/* Pastikan konten utama dorong footer ke bawah */
main,
section {
  flex: 1;
}

header {
  background: #222;
  padding: 10px 20px;
}

.logo {
  color: white;
  display: inline-block;
}

.nav-links {
  list-style: none;
  float: right;
}

.nav-links li {
  display: inline;
  margin-left: 15px;
}

.nav-links a {
  color: white;
  text-decoration: none;
  padding: 5px 10px;
  transition: background 0.3s;
}

.nav-links a:hover,
.nav-links a.active {
  background: #007bff;
  border-radius: 5px;
}

footer {
  background: #222;
  color: white;
  text-align: center;
  padding: 15px;
  margin-top: 30px;
}

.logo img {
  height: 40px; /* atur sesuai kebutuhan */
  width: auto;
  vertical-align: middle;
}
```

Struktur Dasar

- Pada bagian awal, html dan body diatur agar memiliki tinggi penuh (height: 100%), margin dihapus, serta menggunakan flexbox dengan arah vertikal. Hal ini memungkinkan halaman tersusun berurutan dari atas ke bawah (header → konten → footer) dan menjaga footer selalu berada di bagian bawah layar meskipun kontennya sedikit.

- Body diberi latar abu muda (#f8f9fa), teks utama berwarna abu gelap (#333), serta font Arial agar tampilan terlihat bersih, modern, dan mudah dibaca.

Header & Logo

- Bagian header memiliki warna dasar gelap (#222) sehingga memberi kesan profesional. Di dalamnya ada logo dan menu navigasi. Logo diatur agar selalu proporsional (height: 40px, width: auto) serta sejajar dengan teks/menu menggunakan vertical-align: middle.

Navigasi

- Menu navigasi dibuat menggunakan list (ul dan li). Bullet list dihilangkan, item ditampilkan secara horizontal, dan seluruh menu diposisikan ke kanan (float: right). Setiap link diberi warna putih agar kontras dengan latar gelap, ditambah padding sehingga area klik lebih luas dan nyaman digunakan.

- Efek interaktif juga ditambahkan: saat menu di-hover atau aktif, background berubah menjadi biru (#007bff) dengan sudut melengkung (border-radius: 5px), sehingga pengguna tahu link mana yang sedang dipilih.

Konten Utama

- Bagian main atau section diberi properti flex: 1, sehingga otomatis mendorong footer ke bawah dan mengisi ruang kosong pada layar. Hal ini membuat tata letak rapi dan konsisten meskipun konten sedikit.

Footer

- Footer didesain mirip header: latar gelap (#222), teks putih, dan posisi teks rata tengah. Tambahan margin-top: 30px memberikan jarak dari konten sebelumnya agar tidak menempel, serta padding: 15px membuat isi footer lebih lega.
````
