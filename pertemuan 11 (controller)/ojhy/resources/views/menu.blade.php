<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu - Pisang Roll Dhea</title>

    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              "header-dark": "#2A4232",
              "primary-green": "#386641",
              "secondary-cream": "#F5F5DC",
              "accent-yellow": "#FFC300",
            },
          },
        },
      };
    </script>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
      body {
        background-color: #f5f5dc !important;
      }
      header {
        background-color: #2a4232 !important;
      }
      footer {
        background-color: #2a4232 !important;
      }
      .font-brand {
        font-family: "Georgia", serif;
      }

      /* EFEK HOVER UNTUK TOMBOL */
      .btn-single {
        background-color: #386641 !important;
        color: #ffffff !important;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
      }
      .btn-single:hover {
        background-color: #2a4232 !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
      }

      .btn-mix {
        background-color: #ffc300 !important;
        color: #2a4232 !important;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.15);
      }
      .btn-mix:hover {
        background-color: #ffaa00 !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
      }

      /* ==== ACTIVE LINK NAVBAR ==== */
      nav a.active {
        background-color: #386641 !important;
        border-radius: 6px;
        transform: scale(1.05);
      }

      nav a:hover {
        transform: translateY(-2px) scale(1.08);
        background-color: #527a5b;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
      }

      /* Toast */
      .toast {
        position: fixed;
        right: 20px;
        bottom: 30px;
        background: #2a4232;
        color: #fff;
        padding: 10px 14px;
        border-radius: 8px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
        opacity: 0;
        transform: translateY(10px);
        transition: all 0.28s ease;
        z-index: 60;
      }
      .toast.show {
        opacity: 1;
        transform: translateY(0);
      }

      /* small helpers */
      .qty-btn {
        background-color: #386641;
        color: #fff;
        padding: 4px 8px;
        border-radius: 6px;
      }
      .qty-btn:active {
        transform: translateY(1px);
      }

      /* Fade-in on page load */
      .fade-page {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInPage 0.8s ease forwards;
      }

      @keyframes fadeInPage {
        from {
          opacity: 0;
          transform: translateY(20px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      /* Efek muncul berurutan (staggered fade) untuk item menu */
      .menu-card {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeUp 0.8s ease forwards;
      }

      .menu-card:nth-child(1) {
        animation-delay: 0.1s;
      }
      .menu-card:nth-child(2) {
        animation-delay: 0.25s;
      }
      .menu-card:nth-child(3) {
        animation-delay: 0.4s;
      }
      .menu-card:nth-child(4) {
        animation-delay: 0.55s;
      }

      @keyframes fadeUp {
        from {
          opacity: 0;
          transform: translateY(30px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
    </style>
  </head>

  <body class="text-gray-800 flex flex-col min-h-screen">
    <header class="shadow-lg sticky top-0 z-50">
      <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
          <!-- Logo -->
          <div class="flex items-center">
            <span class="text-2xl font-bold text-white font-brand">
              Pisang Roll Dhea
            </span>
          </div>

          <!-- Menu -->
          <div class="sm:ml-6 sm:flex sm:space-x-8 items-center">
            <a
              href=""
              class="nav-link text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300 hover:bg-primary-green hover:text-white"
            >
              Beranda
            </a>
            <a
              href="aboutus"
              class="nav-link text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300 hover:bg-primary-green hover:text-white"
            >
              Tentang Kami
            </a>
            <a
              href="menu"
              class="nav-link text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300 hover:bg-primary-green hover:text-white"
            >
              Menu
            </a>
            <a
              href="contact"
              class="nav-link text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300 hover:bg-primary-green hover:text-white"
            >
              Kontak
            </a>
          </div>
        </div>
      </nav>
    </header>

    <main
      class="max-w-7xl mx-auto pt-8 pb-16 px-4 sm:px-6 lg:px-8 flex-grow fade-page"
    >
      <section id="menu-header" class="py-10 text-center">
        <h2 class="text-5xl font-extrabold text-header-dark mb-4 font-brand">
          Menu Pisang Roll Premium
        </h2>
        <div
          class="inline-block bg-accent-yellow text-header-dark px-6 py-2 rounded-full shadow-md font-extrabold text-2xl border-2 border-primary-green"
        >
          HARGA MULAI: 10 - 15 RB
        </div>
      </section>
      <!-- product grid (converted to interactive items) -->
      <section class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Card template: each card now has qty controls and Add to Cart -->
        <!-- 1 -->
        <div
          class="bg-white rounded-xl shadow-xl p-6 flex flex-col items-center"
          data-name="Coklat Klasik"
          data-price="10000"
        >
          <div
            class="w-full mb-4 rounded-lg overflow-hidden border-2 border-primary-green"
          >
            <img
              src="gambar/Pisrol4.jpg"
              alt="Pisang Roll Coklat"
              class="w-full h-50 object-cover"
            />
          </div>

          <h3
            class="text-3xl font-extrabold text-primary-green mb-2 font-brand"
          >
            🍫 Coklat Klasik
          </h3>

          <div class="text-xl font-bold text-accent-yellow mb-4">
            Rp 10.000 <span class="text-gray-500 text-sm">/ porsi</span>
          </div>

          <p class="text-center text-gray-700 mb-6">
            Manisnya cokelat lumer berpadu sempurna dengan pisang renyah.
          </p>

          <div class="flex items-center gap-3 mb-4">
            <button class="qty-btn" onclick="changeLocalQty(this, -1)">
              −
            </button>
            <input
              class="w-16 text-center border rounded-md local-qty"
              type="number"
              min="1"
              value="1"
            />
            <button class="qty-btn" onclick="changeLocalQty(this, 1)">+</button>
          </div>

          <button
            onclick="addCardToCart(this)"
            style="background-color: #386641"
            class="w-full text-white py-3 rounded-lg transition duration-300 btn-single uppercase font-semibold"
          >
            Tambahkan ke Keranjang
          </button>
        </div>

        <!-- 2 -->
        <div
          class="bg-white rounded-xl shadow-xl p-6 flex flex-col items-center"
          data-name="Tiramisu"
          data-price="10000"
        >
          <div
            class="w-full mb-4 rounded-lg overflow-hidden border-2 border-primary-green"
          >
            <img
              src="gambar/Pisrol7.jpg"
              alt="Pisang Roll Tiramisu"
              class="w-full h-50 object-cover"
            />
          </div>
          <h3
            class="text-3xl font-extrabold text-primary-green mb-2 font-brand"
          >
            ☕ Tiramisu
          </h3>
          <div class="text-xl font-bold text-accent-yellow mb-4">
            Rp 10.000 <span class="text-gray-500 text-sm">/ porsi</span>
          </div>
          <p class="text-center text-gray-700 mb-6">
            Aroma kopi lembut dengan <em>topping</em> tiramisu yang bikin
            ketagihan.
          </p>

          <div class="flex items-center gap-3 mb-4">
            <button class="qty-btn" onclick="changeLocalQty(this, -1)">
              −
            </button>
            <input
              class="w-16 text-center border rounded-md local-qty"
              type="number"
              min="1"
              value="1"
            />
            <button class="qty-btn" onclick="changeLocalQty(this, 1)">+</button>
          </div>

          <button
            onclick="addCardToCart(this)"
            style="background-color: #386641"
            class="w-full text-white py-3 rounded-lg transition duration-300 btn-single uppercase font-semibold"
          >
            Tambahkan ke Keranjang
          </button>
        </div>

        <!-- 3 -->
        <div
          class="bg-white rounded-xl shadow-xl p-6 flex flex-col items-center"
          data-name="Green Tea"
          data-price="10000"
        >
          <div
            class="w-full mb-4 rounded-lg overflow-hidden border-2 border-primary-green"
          >
            <img
              src="gambar/Pisrol10.png"
              alt="Pisang Roll Green Tea"
              class="w-full h-50 object-cover"
            />
          </div>

          <h3
            class="text-3xl font-extrabold text-primary-green mb-2 font-brand"
          >
            🍵 Green Tea
          </h3>

          <div class="text-xl font-bold text-accent-yellow mb-4">
            Rp 10.000 <span class="text-gray-500 text-sm">/ porsi</span>
          </div>

          <p class="text-center text-gray-700 mb-6">
            Paduan rasa pisang manis dengan <em>matcha</em> otentik yang wangi.
          </p>

          <div class="flex items-center gap-3 mb-4">
            <button class="qty-btn" onclick="changeLocalQty(this, -1)">
              −
            </button>
            <input
              class="w-16 text-center border rounded-md local-qty"
              type="number"
              min="1"
              value="1"
            />
            <button class="qty-btn" onclick="changeLocalQty(this, 1)">+</button>
          </div>

          <button
            onclick="addCardToCart(this)"
            style="background-color: #386641"
            class="w-full text-white py-3 rounded-lg transition duration-300 btn-single uppercase font-semibold"
          >
            Tambahkan ke Keranjang
          </button>
        </div>

        <!-- 4 -->
        <div
          class="bg-white rounded-xl shadow-xl p-6 flex flex-col items-center"
          data-name="Strawberry"
          data-price="10000"
        >
          <div
            class="w-full mb-4 rounded-lg overflow-hidden border-2 border-primary-green"
          >
            <img
              src="gambar/Pisrol8.png"
              alt="Pisang Roll Strawberry"
              class="w-full h-50 object-cover"
            />
          </div>

          <h3
            class="text-3xl font-extrabold text-primary-green mb-2 font-brand"
          >
            🍓 Strawberry
          </h3>

          <div class="text-xl font-bold text-accent-yellow mb-4">
            Rp 10.000 <span class="text-gray-500 text-sm">/ porsi</span>
          </div>

          <p class="text-center text-gray-700 mb-6">
            Ceria dan segar dengan <em>topping</em> stroberi yang manis asam.
          </p>

          <div class="flex items-center gap-3 mb-4">
            <button class="qty-btn" onclick="changeLocalQty(this, -1)">
              −
            </button>
            <input
              class="w-16 text-center border rounded-md local-qty"
              type="number"
              min="1"
              value="1"
            />
            <button class="qty-btn" onclick="changeLocalQty(this, 1)">+</button>
          </div>

          <button
            onclick="addCardToCart(this)"
            style="background-color: #386641"
            class="w-full text-white py-3 rounded-lg transition duration-300 btn-single uppercase font-semibold"
          >
            Tambahkan ke Keranjang
          </button>
        </div>

        <!-- 5 -->
        <div
          class="bg-white rounded-xl shadow-xl p-6 flex flex-col items-center"
          data-name="Coklat/Keju"
          data-price="15000"
        >
          <div
            class="w-full mb-4 rounded-lg overflow-hidden border-2 border-primary-green"
          >
            <img
              src="gambar/Pisrol3.jpg"
              alt="Pisang Roll Coklat Keju"
              class="w-full h-50 object-cover"
            />
          </div>

          <h3
            class="text-3xl font-extrabold text-primary-green mb-2 font-brand"
          >
            🍫/🧀 Coklat/Keju
          </h3>

          <div class="text-xl font-bold text-accent-yellow mb-4">
            Rp 15.000 <span class="text-gray-500 text-sm">/ porsi</span>
          </div>

          <p class="text-center text-gray-700 mb-6">
            Manis cokelat klasik berpadu gurihnya keju premium.
          </p>

          <div class="flex items-center gap-3 mb-4">
            <button class="qty-btn" onclick="changeLocalQty(this, -1)">
              −
            </button>
            <input
              class="w-16 text-center border rounded-md local-qty"
              type="number"
              min="1"
              value="1"
            />
            <button class="qty-btn" onclick="changeLocalQty(this, 1)">+</button>
          </div>

          <button
            onclick="addCardToCart(this)"
            style="background-color: #386641"
            class="w-full text-white py-3 rounded-lg transition duration-300 btn-single uppercase font-semibold"
          >
            Tambahkan ke Keranjang
          </button>
        </div>

        <!-- 6 -->
        <div
          class="bg-white rounded-xl shadow-xl p-6 flex flex-col items-center"
          data-name="Coklat/Tiramisu"
          data-price="15000"
        >
          <div
            class="w-full mb-4 rounded-lg overflow-hidden border-2 border-primary-green"
          >
            <img
              src="gambar/Pisrol2.jpg"
              alt="Pisang Roll Tiramisu Keju"
              class="w-full h-50 object-cover"
            />
          </div>

          <h3
            class="text-3xl font-extrabold text-primary-green mb-2 font-brand"
          >
            🍫/☕ Coklat/Tiramisu
          </h3>

          <div class="text-xl font-bold text-accent-yellow mb-4">
            Rp 15.000 <span class="text-gray-500 text-sm">/ porsi</span>
          </div>

          <p class="text-center text-gray-700 mb-6">
            Kombinasi <em>creamy</em> tiramisu dengan sentuhan asin keju.
          </p>

          <div class="flex items-center gap-3 mb-4">
            <button class="qty-btn" onclick="changeLocalQty(this, -1)">
              −
            </button>
            <input
              class="w-16 text-center border rounded-md local-qty"
              type="number"
              min="1"
              value="1"
            />
            <button class="qty-btn" onclick="changeLocalQty(this, 1)">+</button>
          </div>

          <button
            onclick="addCardToCart(this)"
            style="background-color: #386641"
            class="w-full text-white py-3 rounded-lg transition duration-300 btn-single uppercase font-semibold"
          >
            Tambahkan ke Keranjang
          </button>
        </div>

        <!-- 7 -->
        <div
          class="bg-white rounded-xl shadow-xl p-6 flex flex-col items-center"
          data-name="Green Tea/Tiramisu"
          data-price="15000"
        >
          <div
            class="w-full mb-4 rounded-lg overflow-hidden border-2 border-primary-green"
          >
            <img
              src="gambar/Pisrol1.jpg"
              alt="Pisang Roll Green Tea Tiramisu"
              class="w-full h-50 object-cover"
            />
          </div>

          <h3
            class="text-3xl font-extrabold text-primary-green mb-2 font-brand"
          >
            🍵/☕ Green Tea/Tiramisu
          </h3>

          <div class="text-xl font-bold text-accent-yellow mb-4">
            Rp 15.000 <span class="text-gray-500 text-sm">/ porsi</span>
          </div>

          <p class="text-center text-gray-700 mb-6">
            Campuran <em>matcha</em> dan kopi yang unik dan kompleks.
          </p>

          <div class="flex items-center gap-3 mb-4">
            <button class="qty-btn" onclick="changeLocalQty(this, -1)">
              −
            </button>
            <input
              class="w-16 text-center border rounded-md local-qty"
              type="number"
              min="1"
              value="1"
            />
            <button class="qty-btn" onclick="changeLocalQty(this, 1)">+</button>
          </div>

          <button
            onclick="addCardToCart(this)"
            style="background-color: #386641"
            class="w-full text-white py-3 rounded-lg transition duration-300 btn-single uppercase font-semibold"
          >
            Tambahkan ke Keranjang
          </button>
        </div>

        <!-- 8 -->
        <div
          class="bg-white rounded-xl shadow-xl p-6 flex flex-col items-center"
          data-name="Coklat/Strawberry"
          data-price="15000"
        >
          <div
            class="w-full mb-4 rounded-lg overflow-hidden border-2 border-primary-green"
          >
            <img
              src="gambar/Pisrol11.png"
              alt="Pisang Roll Cokelat Strawberry"
              class="w-full h-50 object-cover"
            />
          </div>

          <h3
            class="text-3xl font-extrabold text-primary-green mb-2 font-brand"
          >
            🍫/🍓 Coklat/Strawberry
          </h3>

          <div class="text-xl font-bold text-accent-yellow mb-4">
            Rp 15.000 <span class="text-gray-500 text-sm">/ porsi</span>
          </div>

          <p class="text-center text-gray-700 mb-6">
            Paduan rasa coklat yang creamy dan Strawberry yang manis dan asam.
          </p>

          <div class="flex items-center gap-3 mb-4">
            <button class="qty-btn" onclick="changeLocalQty(this, -1)">
              −
            </button>
            <input
              class="w-16 text-center border rounded-md local-qty"
              type="number"
              min="1"
              value="1"
            />
            <button class="qty-btn" onclick="changeLocalQty(this, 1)">+</button>
          </div>

          <button
            onclick="addCardToCart(this)"
            style="background-color: #386641"
            class="w-full text-white py-3 rounded-lg transition duration-300 btn-single uppercase font-semibold"
          >
            Tambahkan ke Keranjang
          </button>
        </div>

        <!-- 9 -->
        <div
          class="bg-white rounded-xl shadow-xl p-6 flex flex-col items-center"
          data-name="Coklat/Milo"
          data-price="15000"
        >
          <div
            class="w-full mb-4 rounded-lg overflow-hidden border-2 border-primary-green"
          >
            <img
              src="gambar/Pisrol5.jpg"
              alt="Pisang Roll Cokelat Milo"
              class="w-full h-50 object-cover"
            />
          </div>

          <h3
            class="text-3xl font-extrabold text-primary-green mb-2 font-brand"
          >
            🍫/🍫 Coklat/Milo
          </h3>

          <div class="text-xl font-bold text-accent-yellow mb-4">
            Rp 15.000 <span class="text-gray-500 text-sm">/ porsi</span>
          </div>

          <p class="text-center text-gray-700 mb-6">
            Paduan rasa coklat yang creamy dan Bubuk Milo yang membuat rasa
            coklat nya makin berasa.
          </p>

          <div class="flex items-center gap-3 mb-4">
            <button class="qty-btn" onclick="changeLocalQty(this, -1)">
              −
            </button>
            <input
              class="w-16 text-center border rounded-md local-qty"
              type="number"
              min="1"
              value="1"
            />
            <button class="qty-btn" onclick="changeLocalQty(this, 1)">+</button>
          </div>

          <button
            onclick="addCardToCart(this)"
            style="background-color: #386641"
            class="w-full text-white py-3 rounded-lg transition duration-300 btn-single uppercase font-semibold"
          >
            Tambahkan ke Keranjang
          </button>
        </div>

        <!-- 10 Mix Favorit -->
        <div
          class="bg-white rounded-xl shadow-xl p-6 flex flex-col items-center"
          data-name="Mix Favorit"
          data-price="0"
        >
          <div
            class="w-full mb-4 rounded-lg overflow-hidden border-2 border-primary-green"
          >
            <img
              src="gambar/Pisrol6.jpg"
              alt="Pisang Roll Mix Custom"
              class="w-full h-50 object-cover"
            />
          </div>

          <h3
            class="text-3xl font-extrabold text-primary-green mb-2 font-brand"
          >
            ✨ Mix Favoritmu!
          </h3>

          <div class="text-xl font-bold text-accent-yellow mb-4">
            Sesuai Request
            <span class="text-gray-500 text-sm">/ harga menyesuaikan</span>
          </div>

          <p class="text-center text-gray-700 mb-6">
            Pilih dua rasa kesukaanmu untuk dikombinasikan!
          </p>

          <div class="flex items-center gap-3 mb-4">
            <button class="qty-btn" onclick="changeLocalQty(this, -1)">
              −
            </button>
            <input
              class="w-16 text-center border rounded-md local-qty"
              type="number"
              min="1"
              value="1"
            />
            <button class="qty-btn" onclick="changeLocalQty(this, 1)">+</button>
          </div>

          <button
            onclick="addCardToCart(this)"
            style="background-color: #386641"
            class="w-full text-white py-3 rounded-lg transition duration-300 btn-single uppercase font-semibold"
          >
            Tambahkan ke Keranjang
          </button>
        </div>
      </section>

      <hr class="border-t-2 border-primary-green opacity-20 my-12" />

      <!-- Keranjang section -->
      <section
        id="cart-section"
        class="max-w-3xl mx-auto bg-white rounded-xl shadow-2xl p-6"
      >
        <h2 class="text-2xl font-extrabold text-header-dark mb-4 font-brand">
          Keranjang Belanja
        </h2>
        <div id="cart-items" class="space-y-4"></div>

        <div class="flex justify-between items-center mt-6">
          <div>
            <button
              onclick="clearCart()"
              class="px-4 py-2 rounded-lg btn-mix text-white"
            >
              Kosongkan Keranjang
            </button>
          </div>
          <div class="text-right">
            <p id="cart-total" class="text-xl font-bold text-header-dark">
              Total: Rp 0
            </p>
            <button
              onclick="checkout()"
              class="mt-3 px-6 py-3 rounded-lg btn-single text-white"
            >
              Pesan Sekarang via WhatsApp
            </button>
          </div>
        </div>
      </section>
    </main>

    <footer class="bg-header-dark mt-12 py-6">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-white text-sm">
          &copy; 2025 Pisang Roll Dhea. Semua Hak Cipta Dilindungi.
        </p>
      </div>
    </footer>

    <!-- toast -->
    <div id="toast" class="toast">✅ Ditambahkan ke keranjang</div>

    <script>
      const WA_PHONE = "6287740054578"; // nomor WA tujuan
      let cart = [];

      document.addEventListener("DOMContentLoaded", () => {
        const saved = localStorage.getItem("prd_cart");
        if (saved) cart = JSON.parse(saved);
        renderCart();
        highlightActiveNav(); // 🔥 panggil fungsi highlight navbar
      });

      function changeLocalQty(btn, delta) {
        const parent = btn.closest("[data-name]");
        const input = parent.querySelector(".local-qty");
        let val = parseInt(input.value) || 1;
        val = Math.max(1, val + delta);
        input.value = val;
      }

      function addCardToCart(btn) {
        const card = btn.closest("[data-name]");
        const name = card.dataset.name;
        const price = parseInt(card.dataset.price) || 0;
        const qty = parseInt(card.querySelector(".local-qty").value) || 1;

        const existing = cart.find((i) => i.name === name);
        if (existing) existing.qty += qty;
        else cart.push({ name, price, qty });

        saveCart();
        renderCart();
        showToast(`✅ ${name} ditambahkan`);
      }

      function saveCart() {
        localStorage.setItem("prd_cart", JSON.stringify(cart));
      }

      function renderCart() {
        const container = document.getElementById("cart-items");
        container.innerHTML = "";
        let total = 0;

        if (!cart.length) {
          container.innerHTML = `<p class="text-gray-600">Keranjang kosong.</p>`;
        } else {
          cart.forEach((item, i) => {
            const subtotal = item.price * item.qty;
            total += subtotal;
            container.innerHTML += `
              <div class="flex justify-between items-center border-b pb-2">
                <div>
                  <p class="font-semibold">${item.name}</p>
                  <p class="text-sm text-gray-600">${
                    item.qty
                  } x Rp ${formatRupiah(item.price)}</p>
                </div>
                <div class="flex items-center gap-3">
                  <button class="px-2 py-1 rounded bg-gray-200" onclick="updateQty(${i}, -1)">−</button>
                  <span class="font-medium">${item.qty}</span>
                  <button class="px-2 py-1 rounded bg-gray-200" onclick="updateQty(${i}, 1)">+</button>
                  <p class="font-semibold ml-4 text-primary-green">Rp ${formatRupiah(
                    subtotal
                  )}</p>
                  <button class="text-red-600 ml-3 font-bold" onclick="removeItem(${i})">Hapus</button>
                </div>
              </div>
            `;
          });
        }

        document.getElementById("cart-total").textContent =
          "Total: Rp " + formatRupiah(total);
      }

      function updateQty(i, delta) {
        cart[i].qty += delta;
        if (cart[i].qty <= 0) cart.splice(i, 1);
        saveCart();
        renderCart();
      }

      function removeItem(i) {
        cart.splice(i, 1);
        saveCart();
        renderCart();
      }

      function clearCart() {
        if (confirm("Yakin ingin mengosongkan keranjang?")) {
          cart = [];
          saveCart();
          renderCart();
        }
      }

      function checkout() {
        if (!cart.length) return alert("Keranjang masih kosong!");
        let total = 0;
        let message = "Halo Kak, saya mau pesan:%0A";
        cart.forEach((item) => {
          const subtotal = item.price * item.qty;
          if (item.price > 0) {
            message += `- ${item.name} (${item.qty}) = Rp ${formatRupiah(
              subtotal
            )}%0A`;
            total += subtotal;
          } else {
            message += `- ${item.name} (${item.qty}) = Harga menyesuaikan%0A`;
          }
        });
        message += `%0ATotal: Rp ${formatRupiah(total)}%0A%0ATerima kasih! 🙏`;
        const url = `https://wa.me/${WA_PHONE}?text=${message}`;
        window.open(url, "_blank");
      }

      function formatRupiah(num) {
        return (num || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
      }

      function showToast(text) {
        const t = document.getElementById("toast");
        t.textContent = text;
        t.classList.add("show");
        setTimeout(() => t.classList.remove("show"), 1500);
      }

      // === Navbar active state ===
      document.addEventListener("DOMContentLoaded", () => {
        const currentPage = window.location.pathname.split("/").pop();
        document.querySelectorAll("nav a").forEach((link) => {
          if (link.getAttribute("href") === currentPage) {
            link.classList.add("active");
            link.style.backgroundColor = "#386641"; // warna hijau tua biar sama semua
          }
        });
      });

      // === Efek Fade-in saat scroll ===
      document.addEventListener("DOMContentLoaded", () => {
        const fadeEls = document.querySelectorAll(".fade-in");
        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                entry.target.classList.add("visible");
              }
            });
          },
          { threshold: 0.2 }
        );
        fadeEls.forEach((el) => observer.observe(el));
      });
    </script>
  </body>
</html>
