<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda - Pisang Roll Dhea</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
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

    <!-- FontAwesome -->
    <script
      src="https://kit.fontawesome.com/a2e0e6b5e8.js"
      crossorigin="anonymous"
    ></script>

    <style>
      /* ==== BASE STYLE ==== */
      body {
        background-color: #f5f5dc !important;
      }
      header,
      footer {
        background-color: #2a4232 !important;
      }
      .font-brand {
        font-family: "Georgia", serif;
      }

      /* ==== ANIMASI FADE-IN ==== */
      .fade-in {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.6s ease-in-out;
      }
      .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
      }

      /* ==== HOVER EFEK GAMBAR ==== */
      .menu-card img {
        transition: transform 0.3s ease;
      }
      .menu-card:hover img {
        transform: scale(1.05);
      }

      /* ==== ANIMASI TOMBOL ==== */
      .btn-hover {
        transition: all 0.3s ease;
      }
      .btn-hover:hover {
        transform: scale(1.05);
      }

      /* ==== ACTIVE LINK NAVBAR ==== */
      nav a.active {
        background-color: #386641 !important;
      }

      /* ==== ANIMASI POP-UP SAAT HOVER NAVBAR ==== */
      nav a:hover {
        transform: translateY(-2px) scale(1.08);
        background-color: #527a5b;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
      }
    </style>
  </head>

  <body class="text-gray-800 flex flex-col min-h-screen">
    <!-- ==== HEADER ==== -->
    <header class="shadow-lg sticky top-0 z-50">
      <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
          <div class="flex items-center">
            <span class="text-2xl font-bold text-white font-brand"
              >Pisang Roll Dhea</span
            >
          </div>
          <div class="sm:ml-6 sm:flex sm:space-x-8 items-center">
            <a
              href=""
              class="text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300"
              >Beranda</a
            >
            <a
              href="aboutus"
              class="text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300"
              >Tentang Kami</a
            >
            <a
              href="menu"
              class="text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300"
              >Menu</a
            >
            <a
              href="contact"
              class="text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300"
              >Kontak</a
            >
          </div>
        </div>
      </nav>
    </header>

    <!-- ==== MAIN CONTENT ==== -->
    <main
      class="max-w-7xl mx-auto pt-8 pb-16 px-4 sm:px-6 lg:px-8 flex-grow fade-in"
    >
      <section id="home" class="py-20 text-center fade-in">
        <h1 class="text-6xl font-extrabold text-primary-green mb-4 font-brand">
          Selamat Datang di Pisang Roll Dhea!
        </h1>
        <p class="text-2xl text-gray-600 mb-8">
          Pisang Roll Yang Lezat, Manis, Nikmat dan Bikin Nagih!
        </p>
        <a
          href="menu.html"
          style="background-color: #386641"
          class="inline-block text-white hover:bg-green-700 px-8 py-3 rounded-full text-lg font-semibold shadow-xl transition duration-300 transform hover:scale-105"
          >Lihat Menu Spesial Kami!</a
        >
      </section>

      <hr class="border-t-2 border-primary-green opacity-20 my-12" />

      <section
        id="contact-info"
        class="py-12 md:py-20 text-center bg-white rounded-xl shadow-2xl max-w-lg mx-auto transform hover:scale-[1.01] transition duration-300 fade-in"
      >
        <h2
          class="text-4xl sm:text-5xl font-extrabold text-header-dark mb-4 font-brand"
        >
          Hubungi Kami
        </h2>
        <p class="text-lg text-gray-500 mb-10">
          Pesan sekarang dan nikmati kelezatannya!
        </p>

        <div class="space-y-6 max-w-xs sm:max-w-sm mx-auto">
          <div class="space-y-4">
            <p class="text-xl flex items-center justify-center">
              <i class="fas fa-phone-alt text-xl mr-2 text-primary"></i>
              <a
                href="tel:+6287740054578"
                class="text-header-dark hover:text-primary transition duration-300"
              >
                📞 +62 877-4005-4578
              </a>
            </p>

            <p class="text-xl flex items-center justify-center">
              <i class="fab fa-instagram text-xl mr-2 text-primary"></i>
              <span class="text-gray-700 mr-1">📸 Instagram</span>
              <a
                href="https://www.instagram.com/pisangrolldhea"
                target="_blank"
                class="font-semibold text-header-dark hover:text-primary transition duration-300"
              >
                @pisangrolldhea
              </a>
            </p>

            <p class="text-xl flex items-center justify-center">
              <i class="fas fa-map-marker-alt text-xl mr-2 text-primary"></i>
              <a
                href="https://maps.google.com/?q=Jl.+Daeng+Tata+3+Lr.+7"
                target="_blank"
                class="text-gray-700 hover:text-primary transition duration-300"
              >
                📍 Jl. Daeng Tata 3 Lr. 7
              </a>
            </p>
          </div>

          <div class="w-full h-px bg-gray-200 my-8"></div>

          <button
            onclick="window.open('https://wa.me/6287740054578?text=Halo%20Kak,%20saya%20mau%20pesan%20Pisang%20Roll%20Dhea!','_blank')"
            style="background-color: #386641"
            class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-bold rounded-lg shadow-xl text-white hover:bg-green-600 transition duration-300 transform hover:scale-[1.03] btn-hover"
          >
            <i class="fab fa-whatsapp text-xl mr-3"></i>
            Order via WhatsApp
          </button>
        </div>
      </section>
    </main>

    <!-- ==== FOOTER ==== -->
    <footer class="mt-12 py-6">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-white text-sm">
          &copy; 2025 Pisang Roll Dhea. Semua Hak Cipta Dilindungi.
        </p>
      </div>
    </footer>

    <!-- ==== SCRIPT ==== -->
    <script>
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

      // === Navbar active state ===
      const current = window.location.pathname.split("/").pop();
      document.querySelectorAll("nav a").forEach((link) => {
        if (link.getAttribute("href") === current) {
          link.classList.add("active");
        }
      });
    </script>
  </body>
</html>
