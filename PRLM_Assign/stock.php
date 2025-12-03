<?php
declare(strict_types=1); 
// Catanghal, Justine Chollo C | CYB 201

// Multidimensional array
$inventory = [
    "Charizard VMAX" => ["price" => 15000, "stock" => 3],
    "Giratina V" => ["price" => 14000, "stock" => 1],
    "Pikachu Felt Hat" => ["price" => 6500, "stock" => 25],
    "Moonbreon VMAX" => ["price" => 35000, "stock" => 8],
    "Lugia V Alt" => ["price" => 10500, "stock" => 5],
    "Gengar VMAX" => ["price" => 12000, "stock" => 12],
    "Rayquaza VMAX" => ["price" => 25000, "stock" => 4]
];

$tax_rate = 12; 

// Reorder Message Function
function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

// Total Value Function
function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

// Tax Due Function
function get_tax_due(float $price, int $qty, int $tax_rate = 0): float {
    $total_val = $price * $qty;
    return $total_val * ($tax_rate / 100);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stocks | PokéMart PH</title>
        <link rel="stylesheet" href="css/pokemon.css">
    </head>
    <body>

        <div class="container">

            <?php include 'include/header.php'; ?>

            <h2 style="border:none; text-align: left; margin-top: 0;">Stock Control</h2>
            <p>Inventory Valuation & Re-order Status</p>

            <table class="stock-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Stock</th>
                        <th>Re-Order</th>
                        <th>Total Value</th>
                        <th>Tax Due</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($inventory as $product_name => $data) { 
                        $reorder_msg = get_reorder_message($data['stock']);
                        $val = get_total_value((float)$data['price'], $data['stock']);
                        $tax = get_tax_due((float)$data['price'], $data['stock'], $tax_rate);
                        
                        $style_class = ($reorder_msg == "Yes") ? "highlight-yes" : "highlight-no";
                    ?>
                    <tr>
                        <td><?= $product_name ?></td>
                        <td><?= $data['stock'] ?></td> 
                        <td class="<?= $style_class ?>"><?= $reorder_msg ?></td>
                        <td>₱<?= $val ?></td>
                        <td>₱<?= $tax ?></td>
                    </tr>
                    <?php 
                    } 
                    ?>
                </tbody>
            </table>

            <?php include 'include/footer.php'; ?>

        </div> 
    </body>
</html>