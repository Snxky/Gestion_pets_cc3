<?php 

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

    require 'database.php';
    $statement = $pdo -> prepare('SELECT * FROM pets');
    $statement -> execute();
    $pets = $statement -> fetchAll(PDO::FETCH_ASSOC);
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
    <div class="container">
	<h1 class="mb-8">
     Pets available for adoption
  </h1>

	<table class="text-left w-full">
		<thead class="block md:table-header-group">
			<tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Name</th>
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Type</th>
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">breed</th>
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">age</th>
                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">size</th>
                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">action</th>
			</tr>
		</thead>
		<tbody class="block md:table-row-group">
        <?php foreach ($pets as $pet) : ?>
			<tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><?php echo $pet['name'] ?> </td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><?php echo $pet['type_pet'] ?></td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><?php echo $pet['breed'] ?></td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><?php echo $pet['age'] ?></td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><?php echo $pet['size'] ?></td>

                <td class=" p-2 md:border md:border-grey-500 flex justify-center gap-5">

                    <a href="modifier.php?id=<?= $pet['id'] ?>"><button type="submit" name="modifier" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Modifier</button></a>
                    <a href="supprimer.php?id= <?php echo $pet['id']; ?>"><button type="submit" name="supprimer" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded" id="supprimer"> Supprimer</button></a>

                    
                </td>
			</tr>
            <?php endforeach ;?>
		</tbody>
	</table>
</div>
</body>
</html>