<!-- Catanghal, Justine Chollo | CYB 201 -->
<!-- November 27, 2025 -->

<?php
$umb_price = 34500;   // Umbreon VMAX
$gira_price = 14000;   // Giratina V
$lugia_price = 9500;   // Lugia V

// Shipping fee
$shipfee = 180; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokéMart PH</title>
    <<link rel="stylesheet" href="BasicPHP1/css/styles.css">
</head>
<body>
    <?php include 'include/header.php'; ?>
    <div class="container">
        <h1>Chollo PokéMart</h1>
        <h2>Holy Grail Card Stock</h2>

        <div class="poke-card">
            <div class="poke-name">Umbreon VMAX</div>
            <div>Base Price: ₱<?php echo $umb_price; ?></div>
            
            <div class="price-list">
                <strong>Bundle Pricing (w/ ₱<?php echo $shipfee; ?> shipping):</strong><br>
                <?php 
                $i = 1; // Initialize counter outside
                do {
                    $total = ($umb_price * $i) + $shipfee;
                    echo "<div class='price-row'>Buy $i card(s): <strong>₱$total</strong></div>";
                    $i++; // Increment inside
                } while ($i <= 3); // Check condition at the end
                ?>
            </div>
        </div>

        <div class="poke-card">
            <div class="poke-name">Giratina V</div>
            <div>Base Price: ₱<?php echo $gira_price; ?></div>

            <div class="price-list">
                <strong>Bundle Pricing (w/ ₱<?php echo $shipfee; ?> shipping):</strong><br>
                <?php 
                $x = 1; // Reset counter for next loop
                do {
                    $total = ($gira_price * $x) + $shipfee;
                    echo "<div class='price-row'>Buy $x card(s): <strong>₱$total</strong></div>";
                    $x++;
                } while ($x <= 3);
                ?>
            </div>
        </div>

        <div class="poke-card">
            <div class="poke-name">Lugia V</div>
            <div>Base Price: ₱<?php echo $lugia_price; ?></div>

            <div class="price-list">
                <strong>Bundle Pricing (w/ ₱<?php echo $shipfee; ?> shipping):</strong><br>
                <?php 
                $z = 1; // Reset counter again
                do {
                    $total = ($lugia_price * $z) + $shipfee;
                    echo "<div class='price-row'>Buy $z card(s): <strong>₱$total</strong></div>";
                    $z++;
                } while ($z <= 3);
                ?>
            </div>
        </div>
        <?php include 'include\footer.php'; ?>
    </div>
    

</body>
</html>