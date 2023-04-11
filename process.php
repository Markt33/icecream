<?php

/*
 * Mark Tsvyan
 * 4/11/23
 * 328/icecream/index.php
 * Process order for ice cream
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// define constants
define('PRICE_PER_SCOOP', 2,00);
define('SALES_TAX', 0.08);

// include header
include ('header.html');
?>


<body>
<div class="container">
    <h1>Thank you for your order!</h1>
    <?php
        //echo "<pre>";
        //var_dump($_POST);
        //echo "</pre>";

        // get data from post array
        $numScoops = $_POST['scoops'];
        $cone = $_POST['cone'];
        $flavors = $_POST['flavor'];
        $flavorList = implode(", ", $flavors);

        // Calculate price
    $subtotal = $numScoops * PRICE_PER_SCOOP;
    $total = $subtotal +($subtotal * SALES_TAX);

        echo "<p>Number of scoops: $numScoops</p>";
        echo "<p>Cone Selection: $cone</p>";
        echo "<p>Flavors: $flavorList</p>";
        echo "<p>Subtotal: $" . number_format($subtotal, 2) . "</p>";
        echo "<p>Total: $ " . number_format($total,2). "</p>";
    ?>
</div>
</body>
</html>

