<?php
/*
 * Mark Tsvyan
 * 4/11/23
 * 328/icecream/process.php
 * Order form for Ice Cream Shoppe
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Define an array
$flavor = array('vanilla', 'chocolate', 'strawberry', 'caramel');

$cones = array('sugar'=>'Sugar Cone', 'waffle'=>'Waffle Cone', 'cup'=>'Cup', 'choc'=> 'Chocolate Dipped Cone');

include ('header.html');
?>

<body>
<div class="container">
    <h1>Welcome to my Ice Cream Shoppe!</h1>
    <form action="process.php" method="post">

        <h3>Choose a flavor</h3>
        <?php
            foreach ($flavor as $flavor){
                echo "<label><input type='checkbox' name='flavor[]' value='$flavor'> " .
                    ucfirst($flavor) . "</label><br>";
            }
        ?>

        <h3>Choose One</h3>
        <?php
            foreach ($cones as $value=>$label) {
                echo "<label><input type='radio' name='cone' value='$value'> $label</label><br>";
            }
        ?>
        <h3>How many scoops?</h3>
        <input type="text" name="scoops" ><br>

        <br>
        <button type="submit">Place Order</button>
    </form>
</div>
</body>
</html>
