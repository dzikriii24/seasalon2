<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facial Treatments</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    <!-- menu -->
<section class="bg-blue-500 text-white">
<nav aria-label="Breadcrumb" class="flex">
  <ol class="flex overflow-hidden text-white">
    <li class="flex items-center">
      <a
        href="index.php"
        class="flex h-10 items-center gap-1.5 bg-blue-500 px-4 transition hover:text-white"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
          />
        </svg>

        <span class="ms-1.5 text-xs font-medium"> Home </span>
      </a>
    </li>
  </ol>
</nav>
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
    <div class="mx-auto max-w-lg text-center">
      <h2 class="text-3xl font-bold sm:text-4xl">Facial Treatments</h2>

      <p class="mt-4 text-gray-300">
      Nikmati perawatan kulit terbaik di SEA Salon! Pilih Facial Treatment favorit Anda untuk kulit sehat dan bercahaya. Hubungi kami sekarang untuk reservasi atau konsultasi gratis!
      </p>
    </div>
    
    <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
      <a
        class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
      >
        <img src="jipeg/deep.png" alt="" class="border rounded-xl">

        <h2 class="mt-4 text-xl font-bold text-white">Deep Cleansing Facial</h2>

        <p class="mt-1 text-sm text-gray-300">
        IDR 300,000
        </p>
        <br>
        <button onclick="sendData18()" class="flex justify-center btn btn-primary">Reservasi</button>
        <script>
    function sendData18() {
        const data = "Deep Cleansing Facial";
        const harga = " IDR 300,000";
        localStorage.setItem("message", data);
        localStorage.setItem("harga", harga)
        window.location.href = "reservasi.php";
    }
</script>
      </a>

      <a
        class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
      >
        <img src="jipeg/hyd.png" alt="" class="border rounded-xl">

        <h2 class="mt-4 text-xl font-bold text-white">Hydrating Facial</h2>

        <p class="mt-1 text-sm text-gray-300">
        IDR 350,000
        </p>
        <br>
        <button onclick="sendData13()" class="flex justify-center btn btn-primary">Reservasi</button>
        <script>
    function sendData13() {
        const data = "Hydrating Facial";
        const harga = "  IDR 350,000";
        localStorage.setItem("message", data);
        localStorage.setItem("harga", harga)
        window.location.href = "reservasi.php";
    }
</script>
      </a>
      <a
        class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
      >
        <img src="jipeg/anti ag.png" alt="" class="border rounded-xl">

        <h2 class="mt-4 text-xl font-bold text-white">Anti-Aging Facial</h2>

        <p class="mt-1 text-sm text-gray-300">
        IDR 400,000
        </p>
        <br>
        <button onclick="sendData14()" class="flex justify-center btn btn-primary">Reservasi</button>
        <script>
    function sendData14() {
        const data = "Anti-Aging Facial";
        const harga = "IDR 400,000";
        localStorage.setItem("message", data);
        localStorage.setItem("harga", harga)
        window.location.href = "reservasi.php";
    }
</script>
      </a>
    </div>

    <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
      <a
        class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
      >
        <img src="jipeg/brigh.png" alt="" class="border rounded-xl">

        <h2 class="mt-4 text-xl font-bold text-white">Brightening Facial</h2>

        <p class="mt-1 text-sm text-gray-300">
        IDR 350,000
        </p>
        <br>
        <button onclick="sendData15()" class="flex justify-center btn btn-primary">Reservasi</button>
        <script>
    function sendData15() {
        const data = "Brightening Facial";
        const harga = "IDR 350,000";
        localStorage.setItem("message", data);
        localStorage.setItem("harga", harga)
        window.location.href = "reservasi.php";
    }
</script>
      </a>

      <a
        class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
      >
        <img src="jipeg/acne.png" alt="" class="border rounded-xl">

        <h2 class="mt-4 text-xl font-bold text-white">Acne Treatment Facial</h2>

        <p class="mt-1 text-sm text-gray-300">
        IDR 400,000
        </p>
        <br>
        <button onclick="sendData16()" class="flex justify-center btn btn-primary">Reservasi</button>
        <script>
    function sendData16() {
        const data = "Acne Treatment Facial";
        const harga = "IDR 400,000";
        localStorage.setItem("message", data);
        localStorage.setItem("harga", harga)
        window.location.href = "reservasi.php";
    }
</script>
      </a>
      <a
        class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
      >
        <img src="jipeg/relax.png" alt="" class="border rounded-xl">

        <h2 class="mt-4 text-xl font-bold text-white">Relaxing Facial</h2>

        <p class="mt-1 text-sm text-gray-300">
        IDR 350,000
        </p>
        <br>
        <button onclick="sendData17()" class="flex justify-center btn btn-primary">Reservasi</button>
        <script>
    function sendData17() {
        const data = "Relaxing Facial";
        const harga = "IDR 350,000";
        localStorage.setItem("message", data);
        localStorage.setItem("harga", harga)
        window.location.href = "reservasi.php";
    }
</script>
      </a>
    </div>
</section>
<!-- menu end -->
</body>
</html>