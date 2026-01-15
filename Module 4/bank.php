<!--Catanghal, Justine Chollo C | CYB 201-->

<?php
// Step 6, Including the account and customer
require_once 'classes/Account.php';
require_once 'classes/Customer.php';

// Step 7, Creating an indexed array
$accounts = [ 
    new Account(20489446, 'Checking', -20.00),
    new Account(20148896, 'Savings', 380.00),
    new Account(30559112, 'Payroll', 15200.50),
    new Account(40112233, 'Digital Wallet', 1250.75)
];

// Step 8, Creating the customer object holding the accounts array
$customer = new Customer('Chollo', 'Catanghal', 'chollocatanghal@gmail.com', 'SecretPassword',$accounts);

include 'includes/header.php'; 
?>

<h1>NAME: <?= $customer->getFullName(); ?></h1>

<table>
    <thead>
        <tr>
            <th>ACCOUNT NUMBER</th>
            <th>ACCOUNT TYPE</th>
            <th>BALANCE</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        // Iterate through each account in the client's portfolio
        foreach ($customer->portfolio as $account): 
            $userOverdrawn = $account->getBalance() ? 'overdrawn' : 'important';
        ?>
            <tr>
                <td><?= $account->number; ?></td>
                <td><?= $account->type; ?></td>
                <td class="<?= $userOverdrawn; ?>">
                    ₱ <?= number_format($account->balance, 0); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include 'includes/footer.php'; ?>