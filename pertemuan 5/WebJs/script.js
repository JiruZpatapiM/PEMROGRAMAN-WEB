// script.js

const galleryItems = document.querySelectorAll(".gallery-item img");
const lightbox = document.getElementById("lightbox");
const lightboxImg = document.getElementById("lightbox-img");
const closeBtn = document.querySelector(".lightbox .close");
const prevBtn = document.querySelector(".lightbox .prev");
const nextBtn = document.querySelector(".lightbox .next");

let currentIndex = 0;

// Buka lightbox
galleryItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    lightbox.style.display = "block";
    lightboxImg.src = item.src;
    currentIndex = index;
  });
});

// Tutup lightbox
closeBtn.addEventListener("click", () => {
  lightbox.style.display = "none";
});

// Navigasi Next & Prev
nextBtn.addEventListener("click", () => {
  currentIndex = (currentIndex + 1) % galleryItems.length;
  lightboxImg.src = galleryItems[currentIndex].src;
});

prevBtn.addEventListener("click", () => {
  currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
  lightboxImg.src = galleryItems[currentIndex].src;
});

// Tutup lightbox saat klik di luar gambar
lightbox.addEventListener("click", (e) => {
  if (e.target === lightbox) {
    lightbox.style.display = "none";
  }
});

// ============ Tambahan kode untuk alert pindah halaman ============

// Simpan nama halaman saat klik menu navigasi
function setPage(pageName) {
  localStorage.setItem("pageAlert", pageName);
}

// Tampilkan alert saat halaman baru terbuka
window.onload = function () {
  const page = localStorage.getItem("pageAlert");
  if (page) {
    alert("Anda berhasil beralih ke halaman " + page);
    localStorage.removeItem("pageAlert"); // supaya tidak muncul lagi saat refresh
  }
};
