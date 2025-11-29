<!--Catanghal, Justine Chollo C | CYB 201-->

<?php
$shop_title = "PokéMart PH";

// Cart Simulation Variables
$item1 = "Charizard VMAX (Shiny)";
$price1 = 15000;
$qty1 = 1;

$item2 = "Lucario VSTAR";
$price2 = 800;
$qty2 = 2;

// Math: Subtotal
$total1 = $price1 * $qty1;
$total2 = $price2 * $qty2;
$subtotal = $total1 + $total2;

// Math: Tax and Shipping
$tax_rate = 0.12;
$tax_amt = $subtotal * $tax_rate;
$shipping = 150;

// Grand Total
$grand = $subtotal + $tax_amt + $shipping;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | <?= $shop_title ?></title>
    <link rel="stylesheet" href="css/pokemon.css">
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: white; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #3B4CCA; color: white; }
        .form-group { margin-bottom: 15px; }
        input[type="text"] { width: 95%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <?php include 'include/header.php'; ?>

        <h1 style="color:#CC0000; -webkit-text-stroke: 1px black;">Secure Checkout</h1>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
            
            <div>
                <h3>1. Shipping Information</h3>
                <form>
                    <div class="form-group">
                        <label>Full Name</label><br>
                        <input type="text" placeholder="Last Name, First Name">
                    </div>
                    <div class="form-group">
                        <label>Address</label><br>
                        <input type="text" placeholder="House No, Street, City">
                    </div>
                    <div class="form-group">
                        <label>Payment Method</label><br>
                        <select style="width: 100%; padding: 10px;">
                            <option>Cash on Delivery (COD)</option>
                            <option>GCash</option>
                            <option>Bank Transfer</option>
                        </select>
                    </div>
                </form>
            </div>

            <div>
                <h3>2. Order Summary</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Qty</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $item1 ?></td>
                            <td><?= $qty1 ?></td>
                            <td>₱<?= $total1 ?></td>
                        </tr>
                        <tr>
                            <td><?= $item2 ?></td>
                            <td><?= $qty2 ?></td>
                            <td>₱<?= $total2 ?></td>
                        </tr>
                    </tbody>
                </table>

                <div style="text-align: right; margin-top: 20px;">
                    <p>Subtotal: ₱<?= $subtotal ?></p>
                    <p>VAT (12%): ₱<?= $tax_amt ?></p>
                    <p>Shipping: ₱<?= $shipping ?></p>
                    <hr>
                    <h2 style="color: #CC0000; border: none;">Total: ₱<?= $grand ?></h2>
                </div>
                
                <button style="width: 100%; background: #CC0000; color: white; padding: 15px; font-size: 1.2em; border: none; border-radius: 5px; cursor: pointer;">
                    PLACE ORDER
                </button>
            </div>
        </div>

        <?php include 'include/footer.php'; ?>
    </div>
</body>
</html>