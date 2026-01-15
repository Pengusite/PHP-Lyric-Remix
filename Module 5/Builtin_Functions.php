<!--Catanghal, Justine Chollo | CYB 201-->
<?php
    $caseChar   = 'HOLY ANGEL UNIVERSITY';  
    $countChar  = 'Justine Chollo Catanghal'; 
    $removeChar = 'Modifying is My Forte';             
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Learning PHP BUILT-IN FUNCTIONS</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Helvetica, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            padding: 40px;
        }

        .container-box {
            background: #ffffff;
            margin: 0 auto;
            max-width: 1050px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        h1 {
            color: #002e5d; 
            text-align: center;
            margin-bottom: 5px;
        }

        .uni-text {
            text-align: center;
            font-style: italic;
            color: #666;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #002e5d;
            color: white;
            padding: 15px;
            text-transform: uppercase;
            font-size: 13px;
        }

        td {
            padding: 12px;
            border: 1px solid #dee2e6;
            vertical-align: middle;
        }

        tbody tr.section-header td {
            background-color: #3182ce !important;
            color: #ffffff !important;
            font-weight: 700;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        tbody tr:nth-child(even):not(.section-header) {
            background-color: #f8fafc;
        }

        .highlight-output {
            font-weight: bold;
            color: #2b6cb0;
        }

        code {
            background: #edf2f7;
            padding: 2px 5px;
            border-radius: 4px;
            color: #c53030;
        }
    </style>
</head>
<body>

<div class="container-box">
    <h1>PHP BUILT-IN FUNCTIONS</h1>
    <p class="uni-text">Holy Angel University - Laboratory Activity</p>

    <table>
        <thead>
            <tr>
                <th>Category</th>
                <th>Function</th>
                <th>Sample Input</th>
                <th>Resulting Output</th>
            </tr>
        </thead>
        <tbody>
            <tr class="section-header">
                <td colspan="4">Changing the Case of Characters</td>
            </tr>
            <tr>
                <td>Lowercase</td>
                <td><code>strtolower()</code></td>
                <td><?= $caseChar ?></td>
                <td class="highlight-output"><?= strtolower($caseChar) ?></td>
            </tr>
            <tr>
                <td>Uppercase</td>
                <td><code>strtoupper()</code></td>
                <td><?= strtolower($caseChar) ?></td>
                <td class="highlight-output"><?= strtoupper($caseChar) ?></td>
            </tr>
            <tr>
                <td>Capitalize</td>
                <td><code>ucwords()</code></td>
                <td><?= strtolower($caseChar) ?></td>
                <td class="highlight-output"><?= ucwords(strtolower($caseChar)) ?></td>
            </tr>

            <tr class="section-header">
                <td colspan="4">Counting Characters and Words</td>
            </tr>
            <tr>
                <td>Number of Characters</td>
                <td><code>strlen()</code></td>
                <td><?= $countChar ?></td>
                <td class="highlight-output"><?= strlen($countChar) ?> characters</td>
            </tr>
            <tr>
                <td>Number of Words</td>
                <td><code>str_word_count()</code></td>
                <td><?= $countChar ?></td>
                <td class="highlight-output"><?= str_word_count($countChar) ?> words</td>
            </tr>

            <tr class="section-header">
                <td colspan="4">Removing and Replacing Characters</td>
            </tr>
            <tr>
                <td>Remove whitespaces from left</td>
                <td><code>ltrim()</code></td>
                <td>'<?= $removeChar ?>'</td>
                <td class="highlight-output">'<?= ltrim($removeChar, 'M') ?>'</td>
            </tr>
            <tr>
                <td>Remove whitespaces from right</td>
                <td><code>rtrim()</code></td>
                <td>'<?= $removeChar ?>'</td>
                <td class="highlight-output">'<?= rtrim($removeChar, 'e') ?>'</td>
            </tr>
            <tr>
                <td>Remove from left and right</td>
                <td><code>trim()</code></td>
                <td>'<?= $removeChar ?>'</td>
                <td class="highlight-output">'<?= trim($removeChar, 'Me') ?>'</td>
            </tr>
            <tr>
                <td>String replace</td>
                <td><code>str_replace()</code></td>
                <td>"Hello World"</td>
                <td class="highlight-output"><?= str_replace("World", "PHP", "Hello World") ?></td>
            </tr>
            <tr>
                <td>String ireplace</td>
                <td><code>str_ireplace()</code></td>
                <td>"HELLO WORLD"</td>
                <td class="highlight-output"><?= str_ireplace("world", "PHP", "HELLO WORLD") ?></td>
            </tr>
            <tr>
                <td>String Repeat</td>
                <td><code>str_repeat()</code></td>
                <td>"HAU! "</td>
                <td class="highlight-output"><?= str_repeat("HAU! ", 3) ?></td>
            </tr>

            <tr class="section-header">
                <td colspan="4">Other Built-in Functions</td>
            </tr>
            <tr>
                <td>Check if string contains</td>
                <td><code>str_contains()</code></td>
                <td>Find "Angel" in "Holy Angel"</td>
                <td class="highlight-output"><?= str_contains("Holy Angel", "Angel") ? "Yes" : "No" ?></td>
            </tr>
            <tr>
                <td>Find Position</td>
                <td><code>strpos()</code></td>
                <td>Find "PHP" in "I love PHP"</td>
                <td class="highlight-output"><?= strpos("I love PHP", "PHP") ?></td>
            </tr>
            <tr>
                <td>Substring</td>
                <td><code>substr()</code></td>
                <td>"Information" (0, 4)</td>
                <td class="highlight-output"><?= substr("Information", 0, 4) ?></td>
            </tr>
            <tr>
                <td>String to Array</td>
                <td><code>explode()</code></td>
                <td>"Red,Green,Blue"</td>
                <td class="highlight-output"><?php $parts = explode(",", "Red,Green,Blue"); echo $parts[1]; ?></td>
            </tr>
            <tr>
                <td>Array to String</td>
                <td><code>implode()</code></td>
                <td>["CYB", "201"]</td>
                <td class="highlight-output"><?= implode("-", ["CYB", "201"]) ?></td>
            </tr>
            <tr>
                <td>Rounding Numbers</td>
                <td><code>round()</code></td>
                <td>Round 4.7</td>
                <td class="highlight-output"><?= round(4.7) ?></td>
            </tr>
            <tr>
                <td>Random Number</td>
                <td><code>mt_rand()</code></td>
                <td>Range 1-100</td>
                <td class="highlight-output"><?= mt_rand(1, 100) ?></td>
            </tr>
            <tr>
                <td>Square Root</td>
                <td><code>sqrt()</code></td>
                <td>Sqrt of 25</td>
                <td class="highlight-output"><?= sqrt(25) ?></td>
            </tr>
            <tr>
                <td>Check if Numeric</td>
                <td><code>is_numeric()</code></td>
                <td>Is "123" numeric?</td>
                <td class="highlight-output"><?= is_numeric("123") ? "Yes" : "No" ?></td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>