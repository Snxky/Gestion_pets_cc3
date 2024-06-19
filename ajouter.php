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
<form action="traitement-ajouter.php" method="POST">
  <div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
    <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
      <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">ADD POST</h1>
      <div class="space-y-4">
        <div>
          <label for="name" class="text-lx font-serif">Name:</label>
          <input type="text" placeholder="Name" id="name" name="name" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
        </div>
        <div>
          <label for="type_pet" class="text-lx font-serif">Type:</label>
          <input type="text" placeholder="Type" id="type_pet" name="type_pet" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
        </div>  
        <div>
          <label for="breed" class="text-lx font-serif">Breed:</label>
          <input type="text" placeholder="Breed" id="breed" name="breed" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
          <div>
          <label for="age" class="text-lx font-serif">Age:</label>
          <input type="text" placeholder="Age" id="age" name="age" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
        </div>
        <div>
          <label for="size" class="text-lx font-serif">Size:</label>
          <input type="text" placeholder="Size" id="size" name="size" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
        </div>
        </div>
        <button class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600  ">ADD PET</button>
      </div>
    </div>
  </div>
</form>
</body>
</html>