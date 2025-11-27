<!-- Catanghal, Justine Chollo | CYB 201 -->
<!-- November 27, 2025 -->
 
<?php
// ITEM 1: Vaporeon
$vap_stock = 0;
$vap_ordered = 0;

switch (true) {
    case ($vap_stock > 1):
        $vap_msg = 'In Stock (Ready to Ship)';
        $vap_color = 'green';
        break;
    case ($vap_ordered > 0):
        $vap_msg = 'Waiting for Restock';
        $vap_color = 'orange';
        break;
    default:
        $vap_msg = 'Sold Out';
        $vap_color = 'red';
        break;
}

// ITEM 2: Jolteon
$jolt_stock = 2;
$jolt_ordered = 1;

switch (true) {
    case ($jolt_stock > 1):
        $jolt_msg = 'In Stock';
        $jolt_color = 'green';
        break;
    case ($jolt_ordered > 0):
        $jolt_msg = 'Waiting for Restock (Arriving Soon)';
        $jolt_color = 'orange';
        break;
    default:
        $jolt_msg = 'Sold Out';
        $jolt_color = 'red';
        break;
}

// ITEM 3: Flareon
$flar_stock = 0;
$flar_ordered = 0;

switch (true) {
    case ($flar_stock > 1):
        $flar_msg = 'In Stock';
        $flar_color = 'green';
        break;
    case ($flar_ordered > 0):
        $flar_msg = 'Waiting for Restock';
        $flar_color = 'orange';
        break;
    default:
        $flar_msg = 'Sold Out';
        $flar_color = 'red';
        break;
}
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
        <h2>Eeveelutions Status</h2>

        <div class="poke-card">
            <img src="https://archives.bulbagarden.net/media/upload/6/6d/0134Vaporeon.png" alt="Vaporeon" width="80">
            <div class="status-box">
                <div class="poke-name">Vaporeon</div>
                <p class="status-text <?= $vap_color ?>">
                    Status: <?= $vap_msg ?>
                </p>
            </div>
        </div>

        <div class="poke-card">
            <img src="https://archives.bulbagarden.net/media/upload/e/e3/0135Jolteon.png" alt="Jolteon" width="80">
            <div class="status-box">
                <div class="poke-name">Jolteon</div>
                <p class="status-text <?= $jolt_color ?>">
                    Status: <?= $jolt_msg ?>
                </p>
            </div>
        </div>

        <div class="poke-card">
            <img src="https://archives.bulbagarden.net/media/upload/f/f1/0136Flareon.png" alt="Flareon" width="80">
            <div class="status-box">
                <div class="poke-name">Flareon</div>
                <p class="status-text <?= $flar_color ?>">
                    Status: <?= $flar_msg ?>
                </p>
            </div>
        </div>
        
        <?php include 'include\footer.php'; ?>

    </div>

</body>
</html>