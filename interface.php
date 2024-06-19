<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<div class="flex items-center justify-center h-screen bg-gray-200">
  <div class="container">
    <div class="bg-white rounded-lg shadow-lg p-5 md:p-20 mx-2">
      <div class="text-center">
        <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
          Pet<span class="text-indigo-600">Palace</span>
        </h2>
        <h3 class='text-xl md:text-3xl mt-10'>Welcome!!</h3>
        <p class="text-md md:text-xl mt-10">Welcome back <?php echo ($_SESSION['nom']) . " || " . ($_SESSION['prenom']); ?></p>
      </div>
      <div class="flex flex-wrap mt-10 justify-center">
        <div class="m-3">
          <a href="pets.php"
             class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-blue-600 hover:border-blue-600 hover:bg-blue-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
            <span class="mx-auto">See available pets</span>
          </a>
        </div>
        <div class="m-3">
          <a href="ajouter.php"
             class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-blue-500 hover:border-blue-500 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
            <span class="mx-auto">Add a lost pet</span>
          </a>
        </div>
        <div class="m-3">
          <a href="deconnexion.php"
             class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
            <span class="mx-auto">Log off</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>