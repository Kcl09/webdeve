<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="fish place" content="width=device-width, initial-scale=1.0">
    <title>fishplace</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- haalt de id op van het product dat geklikt was -->
    <?php
    include "include/db.php";
    $id = $_GET['id'] ?? 0;
    $stmt = $pdo->prepare("SELECT * FROM producten WHERE id = ?");
    $stmt->execute([$id]);
    $product = $stmt->fetch();
    ?>

    <!-- dit is de header staat in een andere file maar is hier gebracht -->
    <?php include "include/header.php"; ?>

    <!-- de if else statment is voor als er een id wordt opgepakt die niet in de data base staat dat er dan staat dat het product niet bestaat -->
    <?php if ($product) { ?>
        <!-- laat de product zien die gekoppelt zijn aan het id -->
        <div class="infostyle">
            <h1><?php echo $product['naam']; ?></h1>
            <img src="img/<?php echo $product['afbeelding']; ?>" alt="<?php echo $product['naam'] ?>">
            <p class="prijs">&euro; <?php echo number_format($product['prijs'], 2, ',', '.'); ?></p>
            <p><?php echo $product['omschrijving'] ?> </p>
            <button onclick="window.location.href='bestel.php'">bestellen </button>
        </div>

    <?php } else { ?>
        <p>Dit product bestaat niet.</p>
    <?php } ?>

    <!-- dit is de footer -->
    <?php include "include/footer.php"; ?>

</body>

</html>