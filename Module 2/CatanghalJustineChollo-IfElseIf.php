<!-- Catanghal, Justine Chollo | CYB 201 -->
<!-- November 27, 2025 -->
 
<?php
//ITEM 1: Charizard 
$zard_stock = 5;
$zard_ordered = 0;

if ($zard_stock > 1){
    $zard_msg = 'In Stock (Ready to Ship)';
    $zard_color = 'green'; 
} elseif ($zard_ordered > 0){
    $zard_msg = 'Waiting for Restock';
    $zard_color = 'orange';
} else {
    $zard_msg = 'Sold Out';
    $zard_color = 'red';
}

// ITEM 2: Blastoise
$blast_stock = 0;    
$blast_ordered = 3; 

if ($blast_stock > 1){
    $blast_msg = 'In Stock';
    $blast_color = 'green';
} elseif ($blast_ordered > 0){
    $blast_msg = 'Waiting for Restock (Arriving Soon)';
    $blast_color = 'orange';
} else {
    $blast_msg = 'Sold Out';
    $blast_color = 'red';
}

//ITEM 3: Venusaur
$venu_stock = 0;
$venu_ordered = 0;

if ($venu_stock > 1){
    $venu_msg = 'In Stock';
    $venu_color = 'green';
} elseif ($venu_ordered > 0){
    $venu_msg = 'Waiting for Restock';
    $venu_color = 'orange';
} else {
    $venu_msg = 'Sold Out';
    $venu_color = 'red';
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
        <h2>Inventory Status</h2>

        <div class="poke-card">
            <img src="https://upload.wikimedia.org/wikipedia/en/1/1f/Pok%C3%A9mon_Charizard_art.png" alt="Charizard" width="80">
            <div class="status-box">
                <div class="poke-name">Charizard</div>
                <p class="status-text <?= $zard_color ?>">
                    Status: <?= $zard_msg ?>
                </p>
            </div>
        </div>

        <div class="poke-card">
            <img src="https://upload.wikimedia.org/wikipedia/en/4/41/Blastoise.png" alt="Blastoise" width="80">
            <div class="status-box">
                <div class="poke-name">Blastoise</div>
                <p class="status-text <?= $blast_color ?>">
                    Status: <?= $blast_msg ?>
                </p>
            </div>
        </div>

        <div class="poke-card">
            <img src="https://archives.bulbagarden.net/media/upload/thumb/6/6b/0003Venusaur.png/250px-0003Venusaur.png" alt="Venusaur" width="80">
            <div class="status-box">
                <div class="poke-name">Venusaur</div>
                <p class="status-text <?= $venu_color ?>">
                    Status: <?= $venu_msg ?>
                </p>
            </div>
        </div>
        
        <?php include 'include\footer.php'; ?>

    </div>

</body>
</html>