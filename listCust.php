<!DOCTYPE html>
<html lang="en" data-theme="light" class="bg-blue-500">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haircut & Styling</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="bg-blue-500 text-white">
<nav aria-label="Breadcrumb" class="flex">
  <ol class="flex overflow-hidden text-white">
    <li class="flex items-center">
      <a
        href="javascript:history.back()"
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
             d="M15 19l-7-7 7-7"
          />
        </svg>

        <span class="ms-1.5 text-xs font-medium"> Back </span>
      </a>
    </li>
  </ol>
</nav>

<div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
    <div class="mx-auto max-w-lg text-center">
      <h2 class="text-3xl font-bold sm:text-4xl text-white">Kepada <?=$_POST['nama']?></h2>

      <p class="mt-4 text-gray-300">
      Terima kasih telah melakukan reservasi di SEA Salon. Kami sangat senang bisa menyambut Anda di salon kami dan memberikan layanan terbaik untuk Anda.  
      <br><br>
      Reservasi Anda telah kami terima dengan detail sebagai berikut:
    </div>
    <br><br>
<!-- List Cust -->
<div class="flow-root">
  <dl class="-my-3 divide-y divide-gray-100 text-sm">
    <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
      <dt class="font-medium">Nama Panjang</dt>
      <dd class=" sm:col-span-2"><?=$_POST['nama']?></dd>
    </div>

    <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
      <dt class="font-medium ">Nomer Telepon</dt>
      <dd class=" sm:col-span-2"><?=$_POST['nomer']?></dd>
    </div>


    <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
      <dt class="font-medium">Tanggal</dt>
      <dd class="sm:col-span-2"><?=$_POST['tanggal']?></dd>
    </div>

    <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
      <dt class="font-medium">Waktu</dt>
      <dd class="sm:col-span-2"><?=$_POST['waktu']?></dd>
    </div>

    <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
      <dt class="font-medium">Pesan</dt>
      <dd class="sm:col-span-2">
      <?=$_POST['pesan']?>
      </dd>
    </div>
  </dl>
</div>
 <!-- List Cust End -->
</body>
</html>