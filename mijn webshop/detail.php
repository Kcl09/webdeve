<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="fish place" content="width=device-width, initial-scale=1.0">
    <title>fishplace</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
include "include/db.php";
$id = $_GET['id'] ?? 0;
$stmt =$pdo->prepare("SELECT * FROM producten WHERE id = ?");
$stmt->execute([$id]);
$product = $stmt->fetch();
?>

    <?php include "include/header.php";?>

    <div class="infostyle">
        <h1><?php echo$product['naam'];?></h1>
        <img src="img/<?php echo$product['afbeelding'];?>" alt="<?php echo$product['naam']?>">
         <p class="prijs">&euro; <?php echo number_format($product['prijs'], 2, ',', '.'); ?></p>
        <p><?php echo$product ['omschrijving']?> </p>
        <button onclick="window.location.href='bestel.php'">bestellen </button>
    </div>
    <?php include "include/footer.php";?>
</body>

</html>