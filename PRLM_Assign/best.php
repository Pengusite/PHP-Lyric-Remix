<!--Catanghal, Justine Chollo C | CYB 201-->

<?php
// Indexed Array for rankings
$shop_title = "PokéMart PH";
$ranks = ["#1", "#2", "#3"];
$top_cards = ["Rayquaza VMAX", "Lugia V", "Gengar VMAX"];
$prices = [25000, 18500, 12000];
$stocks = [2, 5, 0]; // Stock levels
$images = [
    "https://assets.pokemon.com/assets/cms2/img/pokedex/full/384.png",
    "https://assets.pokemon.com/assets/cms2/img/pokedex/full/249.png",
    "https://assets.pokemon.com/assets/cms2/img/pokedex/full/094.png"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Sellers | <?= $shop_title ?></title>
    <link rel="stylesheet" href="css/pokemon.css">
</head>
<body>
    <div class="container">
        <?php include 'include/header.php'; ?>

        <h1 style="color:#CC0000; -webkit-text-stroke: 1px black;">🏆 Top Rated Cards</h1>

        <?php 
        $i = 0;
        // Using a WHILE loop to process the arrays
        while ($i < 3) {
            $current_price = $prices[$i];
            
            // Logic for status
            if ($stocks[$i] > 0) {
                $msg = "Available Now";
                $color = "green";
            } else {
                $msg = "Out of Stock";
                $color = "red";
            }
        ?>
            <div class="poke-card" style="flex-direction: row; text-align: left; padding: 20px;">
                <h1 style="margin-right: 20px; font-size: 4em; color: #ddd;"><?= $ranks[$i] ?></h1>
                <img src="<?= $images[$i] ?>" width="120" style="margin-right: 20px;">
                
                <div style="flex-grow: 1;">
                    <div class="poke-name" style="text-align: left;"><?= $top_cards[$i] ?></div>
                    <p>Market Price: ₱<?= $current_price ?></p>
                    <span class="status-text <?= $color ?>"><?= $msg ?></span>
                </div>
                
                <div style="font-size: 2em; font-weight: bold; color: #3B4CCA;">
                    ₱<?= $current_price ?>
                </div>
            </div>
        <?php 
            $i++; 
        } 
        ?>

        <?php include 'include/footer.php'; ?>
    </div>
</body>
</html>