<!--Catanghal, Justine Chollo C | CYB 201-->

<?php
    // Variable and Data Typing
    $shop_name = "PokéMart PH"; // String
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PokéMart PH</title>
    </head>

    <style>
        /* --- Navigation Bar Styles --- */
        .nav-bar {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #ddd;
            padding-bottom: 20px; 
        }

        .nav-bar a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            margin: 0 10px;
            font-size: 1.1em;
            padding: 8px 12px;
            transition: 0.3s;
            border-radius: 5px;
        }

        .nav-bar a:not(.checkout-btn):hover {
            background-color: #3B4CCA; 
            color: #FFDE00; 
        }

        .nav-bar a.checkout-btn {
            background-color: #CC0000; 
            color: white;
            border: 2px solid #CC0000;
            border-radius: 20px; 
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .nav-bar a.checkout-btn:hover {
            background-color: white;
            color: #CC0000;
            transform: translateY(-2px); 
            box-shadow: 0 6px 8px rgba(0,0,0,0.2);
        }
    </style>
        
        <h1><?php echo ($shop_name) ?></h1>
            <!--Using DIV for better CSS-->
            <div class="nav-bar">
                <a href="home.php">Home</a>
                <a href="best.php">Best Seller</a>
                <a href="browse.php">Browse Cards</a>
                <a href="about.php">About Us</a>
                <a href="checkout.php" class="checkout-btn">🛒 Checkout</a>
            </div>
        
        