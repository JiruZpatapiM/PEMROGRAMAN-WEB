# Penambahan Js Pada Web Portofolio

## Kode yang di tambah adalah Js model alert :

Maksudnya adalah ketika kita berpindah ke halaman lain, maka akan muncul alert berisi pesan "Anda berhasil beralih ke halaman {nama halaman}".

Kode Program :

```html
<ul class="nav-links">
  <li class="dropdown">
    <a href="#">Beranda ▼</a>
    <ul class="dropdown-menu">
      <li>
        <a href="project.html" onclick="setPage('Pengalaman')">Pengalaman</a>
      </li>
      <li>
        <a href="about.html" onclick="setPage('Tentang Saya')">Tentang Saya</a>
      </li>
      <li>
        <a href="gallery.html" onclick="setPage('Gallery')">Gallery</a>
      </li>
      <li>
        <a href="contact.html" onclick="setPage('Kontak')">Kontak</a>
      </li>
    </ul>
  </li>
</ul>
```

```html
<script>
  function openModal(img) {
    document.getElementById("imgModal").style.display = "block";
    document.getElementById("modalImage").src = img.src;
  }

  function closeModal() {
    document.getElementById("imgModal").style.display = "none";
  }

  function setPage(pageName) {
    localStorage.setItem("pageAlert", pageName);
  }

  window.onload = function () {
    const page = localStorage.getItem("pageAlert");
    if (page) {
      alert("Anda berhasil beralih ke halaman " + page);
      localStorage.removeItem("pageAlert");
    }
  };
</script>
```

Analisis :

- `onclick="setPage('Pengalaman')"` -> Memanggil function `setPage` dengan parameter Pengalaman
- `openModal(img)` → Menampilkan modal gambar `(imgModal)` dan mengganti isi gambar modal `(modalImage)` sesuai gambar yang diklik.

- `closeModal()` → Menyembunyikan kembali modal gambar dengan mengubah display menjadi `"none"`.

- `setPage(pageName)` → Menyimpan nama halaman yang dipilih ke dalam `localStorage` dengan key `"pageAlert"`.

- `window.onload` → Saat halaman selesai dimuat, script mengecek apakah ada data `"pageAlert"` di `localStorage`. Jika ada, muncul alert berisi pesan pindah halaman, lalu data dihapus agar alert tidak muncul lagi di refresh berikutnya.
