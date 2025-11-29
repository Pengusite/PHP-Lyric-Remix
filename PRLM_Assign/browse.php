<!--Catanghal, Justine Chollo C | CYB 201-->

<?php
$shop_title = "PokéMart PH";

// Categories Array
$cats = ["Vintage", "Modern", "Sealed", "Slabs"];

// Main Product Catalog (Multi-dimensional)
$inventory = [
    ["name" => "Blastoise Base Set", "type" => "Vintage", "price" => 12000, "img" => "009"],
    ["name" => "Umbreon VMAX", "type" => "Modern", "price" => 35000, "img" => "197"],
    ["name" => "Lucario VSTAR", "type" => "Modern", "price" => 800, "img" => "448"],
    ["name" => "Eevee Heroes Box", "type" => "Sealed", "price" => 22000, "img" => "133"],
    ["name" => "PSA 10 Charizard", "type" => "Slabs", "price" => 45000, "img" => "006"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Cards | <?= $shop_title ?></title>
    <link rel="stylesheet" href="css/pokemon.css">
    <style>
        .filter-bar { text-align: center; margin-bottom: 20px; }
        .filter-btn { padding: 5px 15px; background: #eee; margin: 0 5px; border-radius: 15px; display: inline-block; }
    </style>
</head>
<body>
    <div class="container">
        <?php include 'include/header.php'; ?>

        <div class="filter-bar">
            <strong>Categories: </strong>
            <?php foreach($cats as $c): ?>
                <span class="filter-btn"><?= $c ?></span>
            <?php endforeach; ?>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <?php foreach($inventory as $prod): 
                // Simple logic to add a badge if price is high
                $badge = ($prod['price'] > 20000) ? "High Value" : "Common";
            ?>
                <div class="poke-card">
                    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/<?= $prod['img'] ?>.png" width="100">
                    <div class="poke-name"><?= $prod['name'] ?></div>
                    <div style="color: gray; font-size: 0.9em;"><?= $prod['type'] ?> | <?= $badge ?></div>
                    <div style="font-size: 1.5em; color: #333; margin-top: 10px;">₱<?= $prod['price'] ?></div>
                    <a href="#" style="background: #3B4CCA; color: white; padding: 5px 20px; text-decoration: none; border-radius: 5px; margin-top: 10px;">View</a>
                </div>
            <?php endforeach; ?>
        </div>

        <?php include 'include/footer.php'; ?>
    </div>
</body>
</html>