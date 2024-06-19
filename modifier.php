<?php
session_start();
require('database.php');
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}else{

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $statement = $pdo -> prepare('SELECT * FROM pets WHERE id = :id');
        $statement -> execute([
            'id' =>  $id
        ]);
        $pet = $statement ->fetch(PDO::FETCH_ASSOC);
    }
    
    ?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
    <div class="heading text-center font-bold text-3xl m-5 text-yellow-500">Modifier</div>
    <div class="heading text-center text-l m-5 text-black-400">Veuillez remplir tous les champs</div>

    <style>
        body {background:white !important;}
    </style>

    <form action="traitement-modifier.php" method="POST">
        <div class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
            <input type="hidden" name="id" value="<?php echo $pet['id']; ?>">

            <div>
                <label for="name" class="mb-2 block text-base font-medium text-[#07074D]"> Name: </label>
                <input type="text" name="name" id="name" value="<?php echo $pet['name']; ?>" class="w-full bg-gray-100 p-2 mb-4 rounded-md border border-[#e0e0e0] text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div>
                <label for="type_pet" class="mb-2 block text-base font-medium text-[#07074D]"> Type: </label>
                <input type="text" name="type_pet" id="type_pet" value="<?php echo $pet['type_pet']; ?>" class="w-full bg-gray-100 p-2 mb-4 rounded-md border border-[#e0e0e0] text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div>
                <label for="breed" class="mb-2 block text-base font-medium text-[#07074D]"> Breed: </label>
                <input type="text" name="breed" id="breed" value="<?php echo $pet['breed']; ?>" class="w-full bg-gray-100 p-2 mb-4 rounded-md border border-[#e0e0e0] text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div>
                <label for="age" class="mb-2 block text-base font-medium text-[#07074D]"> Age:</label>
                <input type="text" name="age" id="age" value="<?php echo $pet['age']; ?>" class="w-full bg-gray-100 p-2 mb-4 rounded-md border border-[#e0e0e0] text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div>
                <label for="size" class="mb-2 block text-base font-medium text-[#07074D]"> Size: </label>
                <input type="text" name="size" id="size" value="<?php echo $pet['size']; ?>" class="w-full bg-gray-100 p-2 mb-4 rounded-md border border-[#e0e0e0] text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>

            <div class="buttons flex">
                <input class="btn border border-yellow-500 p-1 px-4 font-semibold cursor-pointer text-gray-100 ml-2 bg-yellow-500 hover:bg-yellow-600" type="submit" value="Save">
            </div>
        </div>
    </form>
</body>
</html>
<?php } ?>