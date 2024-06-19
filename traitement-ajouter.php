<?php
require 'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['name']) || empty($_POST['type_pet']) || empty($_POST['breed'])
     || empty($_POST['age']) || empty($_POST['size'])){

        echo '<script>alert("Veuillez remplir tous les champs.")</script>';
        
    }else{
        $usedb = $pdo ->prepare('USE gestion_pets');
        $usedb->execute();
        $statement = $pdo -> prepare('INSERT INTO pets (name, type_pet, breed, age, size) 
        value (:name , :type_pet , :breed , :age , :size)');
        $statement -> execute([
            ':name' => $_POST['name'],
            ':type_pet' => $_POST['type_pet'] ,
            'breed' => $_POST['breed'],
            ':age' => $_POST['age'],
            ':size' => $_POST['size']
        ]);
        header("Location: pets.php");
        exit;
    }
       
    
}