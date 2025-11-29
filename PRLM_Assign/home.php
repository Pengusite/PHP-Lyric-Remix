<!--Catanghal, Justine Chollo C | CYB 201-->

<?php
// Store Data
$shop_title = "PokéMart PH";
$user_status = "Member"; 

// Complex Array
$stock_list = [
    [
        "name" => "Charizard VMAX (Shiny)",
        "price" => 15000,
        "qty" => 3,
        "img" => "https://storage.googleapis.com/images.pricecharting.com/88e180870f682b6b3689617d8171200cb35af8f183a8bf68507f34c1c3d0862a/240.jpg"
    ],
    [
        "name" => "Giratina V (Lost Origin)",
        "price" => 14000,
        "qty" => 1, // Low stock
        "img" => "https://storage.googleapis.com/images.pricecharting.com/e622ba2e940cc994306094e71915abe8dbe53a5ae6371eb2f2e969e2ba1b6e29/240.jpg"
    ],
    [
        "name" => "Pikachu (Grey Felt Hat)",
        "price" => 6500,
        "qty" => 0, // Sold out
        "img" => "https://storage.googleapis.com/images.pricecharting.com/5e96704258cea7c698de7602006f71dfe88d868c0c9585a1e11055de7d488007/240.jpg"
    ]
];

// New Player Bundle Deal
$deck_price = 800;
$sleeves_price = 250;
$box_price = 400;

$raw_total = $deck_price + $sleeves_price + $box_price;

// Nested If/Else for Discount based on status
if ($user_status == "Member") {
    if ($raw_total > 1000) {
        $discount = 200; // Big discount
        $note = "Member Big Save";
    } else {
        $discount = 50;
        $note = "Member Save";
    }
} elseif ($user_status == "Guest") {
    $discount = 0;
    $note = "Join for discounts";
} else {
    $discount = 0;
    $note = "Standard Price";
}

$final_bundle = $raw_total - $discount;

// Random Daily Tip using Switch Statement
$tip_id = null; 
switch ($tip_id) {
    case 1:
        $daily_tip = "Keep cards away from direct sunlight.";
        break;
    case 2:
        $daily_tip = "Use penny sleeves before top loaders.";
        break;
    case 3:
        $daily_tip = "Humidity warps foil cards!";
        break;
    default:
        $daily_tip = "Gotta Catch 'Em All!";
}

// 4. Simple Array for Badges
$badges = ["100% Authentic", "Fast Shipping", "Secure Packaging"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | <?= $shop_title ?></title>
    <link rel="stylesheet" href="css/pokemon.css">
</head>
<body>

    <div class="container">
        
        <?php include 'include/header.php'; ?>

        <div class="tip-bar">
            Trainer Tip of the Day: <?= $daily_tip ?>
        </div>

        <div class="hero-section">
            <h1 style="color: white; -webkit-text-stroke: 0; margin: 0;">Welcome to <?= $shop_title ?></h1>
            <p>The #1 Source for Graded Pokémon Cards in the Philippines</p>
        </div>

        <div class="promo-box">
            <h2 style="color: #CC0000; border: none; margin-top: 0;">New Player Bundle</h2>
            <p>Get a Deck, Sleeves, and Deckbox to start your journey!</p>
            
            <div style="font-size: 1.1em; margin: 15px 0;">
                Deck (₱<?= $deck_price ?>) + Sleeves (₱<?= $sleeves_price ?>) + Box (₱<?= $box_price ?>)
            </div>

            <h3 style="margin: 5px 0;">Total Value: ₱<?= $raw_total ?></h3>
            
            <?php if ($discount > 0): ?>
                <p style="color: green; font-weight: bold;">
                    <?= $note ?>! Discount Applied: -₱<?= $discount ?>
                </p>
            <?php else: ?>
                <p style="color: gray;"><?= $note ?></p>
            <?php endif; ?>

            <h1 style="color: #CC0000; -webkit-text-stroke: 1px black; margin-bottom: 0;">
                YOUR PRICE: ₱<?= $final_bundle ?>
            </h1>
        </div>

        <h2 style="border:none;">Collector's Spotlight</h2>
        
        <div class="grid-container">
            <?php 
            // using Foreach loop to generate cards dynamically
            foreach ($stock_list as $item) { 
                if ($item['qty'] == 0) {
                    $s_text = "Sold Out";
                    $s_color = "red";
                } elseif ($item['qty'] < 2) {
                    $s_text = "Last Piece!";
                    $s_color = "orange";
                } else {
                    $s_text = "In Stock";
                    $s_color = "green";
                }
            ?>
                <div class="poke-card" style="width: 250px;">
                    <img src="<?= $item['img'] ?>" width="100" alt="card">
                    
                    <div class="poke-name" style="font-size: 1.2em;"><?= $item['name'] ?></div>
                    
                    <div style="margin: 10px 0; font-size: 1.1em; font-weight: bold;">
                        Price: ₱<?= $item['price'] ?>
                    </div>
                    
                    <div class="status-box" style="margin: 0; width: 100%; text-align: center;">
                        <span class="status-text <?= $s_color ?>">
                            <?= $s_text ?>
                        </span>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="badge-list">
            <h3>Why Shop With Us?</h3>
            <?php
            // Using a standard FOR Loop just to show variety in logic
            $count = count($badges);
            for ($x = 0; $x < $count; $x++) {
                echo "<span style='display:inline-block; margin:0 15px; font-weight:bold; color:#3B4CCA;'>✔ " . $badges[$x] . "</span>";
            }
            ?>
        </div>

        <?php include 'include/footer.php'; ?>

    </div>

</body>
</html>
