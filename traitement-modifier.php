<?php 
require 'database.php';
if($_SERVER['REQUEST_METHOD'] ==  'POST'){
    $usedb = $pdo ->prepare('USE gestion_pets');
    $usedb->execute();
    $statement = $pdo -> prepare('UPDATE pets SET name = :name , type_pet = :type_pet, breed = :breed , age = :age, size = :size WHERE id = :id');
    $statement -> execute([
        ':id' => $_POST['id'],
        ':name' => $_POST['name'],
        ":type_pet" => $_POST['type_pet'],
        ':breed' => $_POST['breed'],
        ':age' => $_POST['age'],
        ':size' => $_POST['size']
    ]);
    header('Location: pets.php');
}

?>