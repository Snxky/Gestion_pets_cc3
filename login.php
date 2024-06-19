<?php
session_start();
$loginError = "";
if(isset($_SESSION['loginError'])){
    $loginError = $_SESSION['loginError'];
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
    <form action="traitement-connexion.php" method="post">
        <div class="flex flex-wrap min-h-screen w-full content-center justify-center bg-gray-200 py-10">

        <div class="flex shadow-md">

    <div class="flex flex-wrap content-center justify-center rounded-l-md bg-white" style="width: 24rem; height: 32rem;">
      <div class="w-72">
        <h1 class="text-xl font-semibold">Welcome back</h1>
        <small class="text-gray-400">Welcome back! Please enter your details</small>

        <form class="mt-4">
          <div class="mb-3">
            <label class="mb-2 block text-xs font-semibold" for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
          </div>

          <div class="mb-3">
            <label class="mb-2 block text-xs font-semibold" for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="*****" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
          </div>

          <div class="mb-3 flex flex-wrap content-center">
          </div>

          <div class="mb-3">
            <button class="mb-1.5 block w-full text-center text-white bg-purple-700 hover:bg-purple-900 px-2 py-1.5 rounded-md">Sign in</button>
            <span class="text-red-500"><?php echo $loginError ?></span>
          </div>
        </form>

        <div class="text-center">
          <span class="text-xs text-gray-400 font-semibold">Don't have account?</span>
          <a class="text-xs font-semibold text-purple-700">Sign up</a>
        </div>
      </div>
    </div>
</form>

    <div class="flex flex-wrap content-center justify-center rounded-r-md" style="width: 24rem; height: 32rem;">
      <img class="w-full h-full bg-center bg-no-repeat bg-cover rounded-r-md" src="https://i.imgur.com/9l1A4OS.jpeg">
    </div>

  </div>


</body>
</html>




