<!-- Catanghal, Justine Chollo | CYB 201 -->
<!-- November 27, 2025 -->
 
<?php
$zard_price = 28000;  // Charizard
$blast_price = 12500; // Blastoise
$venu_price = 9000;   // Venusaur

$shipping = 250; 
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
        <h2>Vintage 1999 Collection</h2>

        <div class="poke-card">
            <div class="poke-name">Charizard (Base Set)</div>
            <div>Base Price: ₱<?php echo $zard_price; ?></div>
            
            <div class="price-list">
                <strong>Bundle Pricing (w/ ₱<?php echo $shipping; ?> shipping):</strong><br>
                <?php 
                $i = 1; // 1. Initialize counter
                while ($i <= 3) { // 2. Condition
                    $total = ($zard_price * $i) + $shipping;
                    echo "<div class='price-row'>Buy $i card(s): <strong>₱$total</strong></div>";
                    $i++; // 3. Increment
                }
                ?>
            </div>
        </div>

        <div class="poke-card">
            <div class="poke-name">Blastoise</div>
            <div>Base Price: ₱<?php echo $blast_price; ?></div>

            <div class="price-list">
                <strong>Bundle Pricing (w/ ₱<?php echo $shipping; ?> shipping):</strong><br>
                <?php 
                $x = 1; // Reset counter for new loop
                while ($x <= 3) {
                    $total = ($blast_price * $x) + $shipping;
                    echo "<div class='price-row'>Buy $x card(s): <strong>₱$total</strong></div>";
                    $x++;
                }
                ?>
            </div>
        </div>

        <div class="poke-card">
            <div class="poke-name">Venusaur</div>
            <div>Base Price: ₱<?php echo $venu_price; ?></div>

            <div class="price-list">
                <strong>Bundle Pricing (w/ ₱<?php echo $shipping; ?> shipping):</strong><br>
                <?php 
                $y = 1; // Reset counter again
                while ($y <= 3) {
                    $total = ($venu_price * $y) + $shipping;
                    echo "<div class='price-row'>Buy $y card(s): <strong>₱$total</strong></div>";
                    $y++;
                }
                ?>
            </div>
        </div>
        <?php include 'include\footer.php'; ?>
    </div>

</body>
</html>