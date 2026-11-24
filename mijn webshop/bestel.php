<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="fish place" content="width=device-width, initial-scale=1.0">
    <title>fishplace</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="navbar">
        <p><a href="index.php">
                <img href="index.php" src="img/fishlogo.png" alt="logo van een vis" width="50" height="50">
            </a>
        </p>
        <a href="#home">about</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
    </div>
    <!-- bestel invull plekken -->
    <div>
        <form class="formulier" action="bedankpagina.php">
        <div class="veld">
                <label for="voornaam">voornaam</label>
                <input type="text" id="voornaam" name="voornaam">
        </div>
        <div class="veld">
            <label for="achternaam">achternaam</label>
            <input type="text" id="achternaam" name="achternaam" required>
        </div>
        <div class="veld">
            <label for="email">email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="veld">
            <label for="adres">adres</label>
            <input type="text" id="adres" name="adres" required>
        </div>
        <div class="veld">
            <label for="huisnummer">huisnummer</label>
            <input type="number" id="huisnummer" name="huisnummer" required>
        </div>
        <div class="veld vinkje">
            <input type="checkbox" id="voorwaarden" name="voorwaarden" required>
            <label for="voorwaarden">Ik ga akkoord met de voorwaarden</label>
        </div>
        
        <input type="submit" value="Bestelling plaatsen" class="knop">
    </div>

    <div id="footer">

        <a href="#contact">Contact</a>
        <a href="#news">News</a>
        <a href="#privacy">Privacy</a>
        <a>&copy;2026 fih</a>

    </div>
</body>

</html>