<?php

include "koneksii.php";

error_reporting(0);

session_start();
if (isset($_POST['reservasi'])){
$nama = $_POST['nama'];
$nomer = $_POST['nomer'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$pesan = $_POST['pesan'];


$sql = "INSERT INTO reservasi (nama,nomer,jenis,harga,tanggal,waktu,pesan)
VALUES ('$nama','$nomer','$jenis','$harga','$tanggal','$waktu','$pesan')";

$result = mysqli_query($conn,$sql);
}
?>




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
<body class="bg-blue-500 text-[#07074D]">
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
      <h2 class="text-3xl font-bold sm:text-4xl text-white">Reservasi Sekarang!</h2>

      <p class="mt-4 text-gray-300">
      "Yuk, jangan sampai ketinggalan! Ayo segera reservasi untuk pengalaman istimewa bersama kami. Kami siap melayani Anda dengan senang hati. Reservasi sekarang!"
      </p>
    </div>
<div class="flex items-center justify-center p-12">
  <div class="mx-auto w-full max-w-[550px]">
    <form action="listCust.php" method="POST">
      <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="nama"
              class="mb-3 block text-base font-medium text-white"
            >
              Nama Lengkap
            </label>
            <input
              type="text"
              name="nama"
              id="nama"
              required
              placeholder="Nama Lengkap"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
        </div>
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="nomer"
              class="mb-3 block text-base font-medium text-white"
            >
              Nomer Telepon
            </label>
            <input
              type="text"
              name="nomer"
              id="nomer"
              required
              placeholder="Nomer Telepon"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
        </div>
      </div>
      <div class="mb-5">

        <label
          for="guest"
          id="jenis"
          name="jenis"
          class="mb-3 block text-base font-medium text-white"
        >
          Jenis Layanan
        </label>
        
        <div id="message" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">

    <script>
        const message = localStorage.getItem("message");
        if (message) {
            document.getElementById("message").innerText = message;
            // Optional: Remove data from local storage after use
            localStorage.removeItem("message");
        } else {
            document.getElementById("message").innerText = "No message received.";
        }
    </script>
      </div>
<br>
      <div class="mb-5">

        <label
          for="guest"
          class="mb-3 block text-base font-medium text-white"
        >
          Harga
        </label>
        
        <div id="harga" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
    <script>
        const harga = localStorage.getItem("harga");
        if (harga) {
            document.getElementById("harga").innerText = harga;
            // Optional: Remove data from local storage after use
            localStorage.removeItem("harga");
        } else {
            document.getElementById("harga").innerText = "No message received.";
        }
    </script>
      </div>

      <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <br>
            <label
              for="tanggal"
              class="mb-3 block text-base font-medium text-white"
              
            >
              Tanggal
            </label>
            <input
              required
              type="date"
              name="tanggal"
              id="tanggal"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
        </div>
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <br>
            <label
              for="waktu"
              class="mb-3 block text-base font-medium text-white"
            >
              Waktu
            </label>
            <input
              required
              type="time"
              name="waktu"
              id="waktu"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
        </div>
      </div>
      <label
          for="pesan"
          class="mb-3 block text-base font-medium text-white"
        >
          Kirim Pesan
        </label>
      <textarea
      placeholder="Masukan Pesan"
      name="pesan"
      id="pesan"
      class="textarea textarea-bordered textarea-lg w-full max-w-xs"></textarea>
      <div>
        <br>
        <a href="listCust.php">
        <button onclick="sendData()" class="flex justify-center btn btn-primary" id="reservasi" name="reservasi">Reservasi</button>
        </a>
      </div>
    </form>
  </div>
</div>
</body>
</html>