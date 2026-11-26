<!DOCTYPE html>
<php lang="nl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fish Place</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php include "include/db.php";
    $producten = $pdo->query("SELECT * FROM producten")->fetchAll();?>

        <!-- dit is de navigatie balk het staat in een andere php file maar is hier gebracht-->
        <?php include "include/header.php";?>



        <p>Welkom bij fishhub de plek waar je vis kan halen. </p>

        <h2>Soorten vis</h2>
        <div class="content">
            <?php foreach ($producten as $product) {?>
                <div class="border">
                   <h3><?php echo $product['naam'];?></h3>
                    <p><img src="img\<?php echo $product['afbeelding']?>" alt="<?php echo $product['naam'] ?>" </p>
                    <p class="prijs">&euro; <?php echo number_format($product['prijs'], 2, ',', '.'); ?></p>
                    <a href="barras.php?id<?php echo $product['id'];?>">Bekijk</a>
            </div>
            <?php } ?>
           
        </div>
        <!-- hier staat de footer maar dat is in een andere file -->
        <?php include "include/footer.php";?>
    </body>

    </html>