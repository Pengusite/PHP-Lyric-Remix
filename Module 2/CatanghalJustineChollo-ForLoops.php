<!-- Catanghal, Justine Chollo | CYB 201 -->
<!-- November 27, 2025 -->
 
<?php
$pika_price = 2500;   // Pikachu
$zard_price = 15000;  // Charizard
$mew_price = 8500;    // Mewtwo GX

$shipping = 150; 
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
        <h2>Rare Cards Stock</h2>

        <div class="poke-card">
            <div class="poke-name">Pikachu</div>
            <div>Base Price: ₱<?php echo $pika_price; ?></div>
            
            <div class="price-list">
                <strong>Bundle Pricing (w/ ₱<?php echo $shipping; ?> shipping):</strong><br>
                <?php 
                for ($i = 1; $i <= 3; $i++) {
                    $total = ($pika_price * $i) + $shipping;
                    echo "<div class='price-row'>Buy $i card(s): <strong>₱$total</strong></div>";
                }
                ?>
            </div>
        </div>

        <div class="poke-card">
            <div class="poke-name">Charizard VMAX</div>
            <div>Base Price: ₱<?php echo $zard_price; ?></div>

            <div class="price-list">
                <strong>Bundle Pricing (w/ ₱<?php echo $shipping; ?> shipping):</strong><br>
                <?php 
                for ($i = 1; $i <= 3; $i++) {
                    $total = ($zard_price * $i) + $shipping;
                    echo "<div class='price-row'>Buy $i card(s): <strong>₱$total</strong></div>";
                }
                ?>
            </div>
        </div>

        <div class="poke-card">
            <div class="poke-name">Mewtwo GX</div>
            <div>Base Price: ₱<?php echo $mew_price; ?></div>

            <div class="price-list">
                <strong>Bundle Pricing (w/ ₱<?php echo $shipping; ?> shipping):</strong><br>
                <?php 
                for ($i = 1; $i <= 3; $i++) {
                    $total = ($mew_price * $i) + $shipping;
                    echo "<div class='price-row'>Buy $i card(s): <strong>₱$total</strong></div>";
                }
                ?>
            </div>
        </div>
        <?php include 'include\footer.php'; ?>
    </div>


</body>
</html>