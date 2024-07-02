<?php
include "koneksii.php";

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
  header("location:loginCust.php");
}
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $_cppassword = md5($_POST['cpassword']);
  if ($password == $_cppassword) {
    $sql = "SELECT * FROM user WHERE email = '$email'";

    $result = mysqli_query($conn, $sql);

    if (!$result->num_rows > 0) {
      $sql = "INSERT INTO user (username, email, password)
            VALUES ('$username', '$email', '$password')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo "<script>
                alert ('Yeeeyy Kamu Berhasil Login >< Selamat Yaaa')
                </script>";
        $username = "";
        $email = "";
        $_POST['password'] = "";
        $_POST['upassword'] = "";
      } else {
        echo "<script>
                alert ('Yahh, Ada Yang Salah Nihh:(')
                </script>";
      }
    } else {
      echo "<script>alert ('yahhh, email kamu udah dipake sama akun lainn')</script>";
    }
  } else {
    echo "<script>alert ('passwordnya harus sama yaaakk. hihihi')</script>";
  }
}

?>


<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SEA Salon</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js"></script>
    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<nav aria-label="Breadcrumb" class="flex">
  <ol class="flex overflow-hidden text-white">
    <li class="flex items-center">
      <a
        href="javascript:history.back()"
        class="text-blue-500 flex h-10 items-center gap-1.5 px-4 transition"
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
<div class="bg-white flex justify-center items-center h-screen">
    <!-- Left: Image -->
<div class="w-1/2 h-screen hidden lg:block">
  <img src="jipeg/LOGOS.png" alt="Placeholder Image" class="object-cover w-full h-full">
</div>

<!-- Right: Login Form -->
<div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
<div class="mx-auto max-w-lg text-center">
      <h2 class="text-3xl font-bold sm:text-4xl text-blue-500">Register SEA Salon</h2>
      <br>
      <br>
    </div>
  <form action="" method="POST">
    <!-- Username Input -->
    <div class="mb-4">
      <label for="username" class="block text-gray-600">Username</label>
      <input type="text" id="username" name="username" required class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
    </div>
    <div class="mb-4">
      <label for="email" class="block text-gray-600">Email</label>
      <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
    </div>

    <div class="mb-4">
      <label for="password" class="block text-gray-600">Password</label>
      <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
    </div>
    <!-- Password Input -->
    <div class="mb-4">
      <label for="cpassword" class="block text-gray-600">Confirm Password</label>
      <input type="password" id="cpassword" name="cpassword" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
    </div>
    <!-- Remember Me Checkbox -->
    <!-- Login Button -->
    <button type="submit" name="submit"  class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full">Register</button>
  </form>
  <!-- Sign up  Link -->
  <div class="mt-6 text-blue-500 text-center">
    <a href="loginCust.php" class="hover:underline">Login Here</a>
  </div>
</div>
</div>
</body>
</html>