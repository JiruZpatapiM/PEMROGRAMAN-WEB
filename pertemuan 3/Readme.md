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

```

```
