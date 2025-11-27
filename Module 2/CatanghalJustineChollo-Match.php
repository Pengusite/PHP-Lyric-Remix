<!-- Catanghal, Justine Chollo | CYB 201 -->
<!-- November 27, 2025 -->
 
<?php
// ITEM 1: Articuno
$art_stock = 1;
$art_ordered = 2;

// Using the MATCH expression to get its message and color
$art_result = match (true) {
    $art_stock > 1   => ['In Stock', 'green'],
    $art_ordered > 0 => ['Waiting for Restock', 'orange'],
    default          => ['Sold Out', 'red'],
};

// assigning of result to the variable
$art_msg = $art_result[0];
$art_color = $art_result[1];


// ITEM 2: Zapdos
$zap_stock = 2;    
$zap_ordered = 3; 

$zap_result = match (true) {
    $zap_stock > 1   => ['In Stock (Ready to Ship)', 'green'],
    $zap_ordered > 0 => ['Waiting for Restock (Arriving Soon)', 'orange'],
    default          => ['Sold Out', 'red'],
};

$zap_msg = $zap_result[0];
$zap_color = $zap_result[1];


// ITEM 3: Moltres
$molt_stock = 0;
$molt_ordered = 0;

$molt_result = match (true) {
    $molt_stock > 1   => ['In Stock', 'green'],
    $molt_ordered > 0 => ['Waiting for Restock', 'orange'],
    default           => ['Sold Out', 'red'],
};

$molt_msg = $molt_result[0];
$molt_color = $molt_result[1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokéMart PH</title>
    <link rel="stylesheet" href="BasicPHP1/css/styles.css">
</head>
<body>
    <?php include 'include/header.php'; ?>
    <div class="container">
        <h1>Chollo PokéMart</h1>
        <h2>Legendary Birds Status</h2>

        <div class="poke-card">
            <img src="https://archives.bulbagarden.net/media/upload/d/d0/0144Articuno.png" alt="Articuno" width="80">
            <div class="status-box">
                <div class="poke-name">Articuno</div>
                <p class="status-text <?= $art_color ?>">
                    Status: <?= $art_msg ?>
                </p>
            </div>
        </div>

        <div class="poke-card">
            <img src="https://archives.bulbagarden.net/media/upload/thumb/c/c6/0145Zapdos.png/250px-0145Zapdos.png" alt="Zapdos" width="80">
            <div class="status-box">
                <div class="poke-name">Zapdos</div>
                <p class="status-text <?= $zap_color ?>">
                    Status: <?= $zap_msg ?>
                </p>
            </div>
        </div>

        <div class="poke-card">
            <img src="https://archives.bulbagarden.net/media/upload/2/21/0146Moltres.png" alt="Moltres" width="80">
            <div class="status-box">
                <div class="poke-name">Moltres</div>
                <p class="status-text <?= $molt_color ?>">
                    Status: <?= $molt_msg ?>
                </p>
            </div>
        </div>
        <?php include 'include\footer.php'; ?>
    </div>

</body>
</html>