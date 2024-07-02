<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manicure & Padicure</title>
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
      <h2 class="text-3xl font-bold sm:text-4xl">Manicure & Padicure</h2>

      <p class="mt-4 text-gray-300">
      Rasakan kesegaran dan kecantikan kuku tangan dan kaki Anda dengan layanan Manicure dan Pedicure kami. Pilih perawatan favorit Anda dari pilihan berikut
      </p>
    </div>
    
    <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
      <a
        class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
    
      >
        <img src="jipeg/classic.png" alt="" class="border rounded-xl">

        <h2 class="mt-4 text-xl font-bold text-white">Classic Manicure/Pedicure</h2>

        <p class="mt-1 text-sm text-gray-300">
        IDR 150,000 (Manicure) / IDR 200,000 (Pedicure)
        </p>
        <br>
        <button onclick="sendData7()" class="flex justify-center btn btn-primary">Reservasi</button>
        <script>
    function sendData7() {
        const data = "Classic Manicure/Pedicure";
        const harga = "IDR 150,000 (Manicure) / IDR 200,000 (Pedicure)";
        localStorage.setItem("message", data);
        localStorage.setItem("harga", harga)
        window.location.href = "reservasi.php";
    }
</script>
      </a>

      <a
        class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
        
      >
        <img src="jipeg/spa.png" alt="" class="border rounded-xl">

        <h2 class="mt-4 text-xl font-bold text-white">Spa Manicure/Pedicure</h2>

        <p class="mt-1 text-sm text-gray-300">
        IDR 250,000 (Manicure) / IDR 300,000 (Pedicure)
        </p>
        <br>
        <button onclick="sendData8()" class="flex justify-center btn btn-primary">Reservasi</button>
        <script>
    function sendData8() {
        const data = "Spa Manicure/Pedicure";
        const harga = "IDR 250,000 (Manicure) / IDR 300,000 (Pedicure)";
        localStorage.setItem("message", data);
        localStorage.setItem("harga", harga)
        window.location.href = "reservasi.php";
    }
</script>
      </a>
      <a
        class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
       
      >
        <img src="jipeg/gel.png" alt="" class="border rounded-xl">

        <h2 class="mt-4 text-xl font-bold text-white">Gel Manicure/Pedicure</h2>

        <p class="mt-1 text-sm text-gray-300">
        IDR 300,000 (Manicure) / IDR 350,000 (Pedicure)
        </p>
        <br>
        <button onclick="sendData9()" class="flex justify-center btn btn-primary">Reservasi</button>
        <script>
    function sendData9() {
        const data = "Gel Manicure/Pedicure";
        const harga = " IDR 300,000 (Manicure) / IDR 350,000 (Pedicure)";
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
        <img src="jipeg/wax.png" alt="" class="border rounded-xl">

        <h2 class="mt-4 text-xl font-bold text-white">Paraffin Wax Manicure/Pedicure</h2>

        <p class="mt-1 text-sm text-gray-300">
      IDR 200,000 (Manicure) / IDR 250,000 (Pedicure)
        </p>
        <br>
        <button onclick="sendData10()" class="flex justify-center btn btn-primary">Reservasi</button>
        <script>
    function sendData10() {
        const data = "Paraffin Wax Manicure/Pedicure";
        const harga = " IDR 200,000 (Manicure) / IDR 250,000 (Pedicure)";
        localStorage.setItem("message", data);
        localStorage.setItem("harga", harga)
        window.location.href = "reservasi.php";
    }
</script>
      </a>

      <a
        class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
        
      >
        <img src="jipeg/luxury.png" alt="" class="border rounded-xl">

        <h2 class="mt-4 text-xl font-bold text-white">Luxury Manicure/Pedicure</h2>

        <p class="mt-1 text-sm text-gray-300">
        IDR 400,000 (Manicure) / IDR 450,000 (Pedicure)
        </p>
        <br>
        <button onclick="sendData11()" class="flex justify-center btn btn-primary">Reservasi</button>
        <script>
    function sendData11() {
        const data = "Luxury Manicure/Pedicure";
        const harga = "   IDR 400,000 (Manicure) / IDR 450,000 (Pedicure)";
        localStorage.setItem("message", data);
        localStorage.setItem("harga", harga)
        window.location.href = "reservasi.php";
    }
</script>
      </a>
      <a
        class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
        
      >
        <img src="jipeg/exp.png" alt="" class="border rounded-xl">

        <h2 class="mt-4 text-xl font-bold text-white">Express Manicure/Pedicure</h2>

        <p class="mt-1 text-sm text-gray-300">
        IDR 100,000 (Manicure) / IDR 150,000 (Pedicure)
        </p>
        <br>
        <button onclick="sendData12()" class="flex justify-center btn btn-primary">Reservasi</button>
        <script>
    function sendData12() {
        const data = "Express Manicure/Pedicure";
        const harga = "  IDR 100,000 (Manicure) / IDR 150,000 (Pedicure)";
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