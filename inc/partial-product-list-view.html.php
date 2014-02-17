<?php

/* This file displays a single product in a list view. It needs to receive
 * the following product details (as elements of an array named $product): 
 *     - sku:  Product ID, used to create the link to the Shirt Details page
 *     - img:  The web address of the main image for the product
 *     - name: The name of the 
 */

    /*$output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="' . BASE_URL . 'shirts/shirt.php?id=' . $product["sku"] . '">';
    $output = $output . '<img src="' . BASE_URL . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . "<p>View Details</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    echo $output;*/
?>



 <li>
    <a href="<?php echo BASE_URL; ?>shirts/shirt.php?id=<?php echo $product["sku"]; ?>">
<img src="<?php echo BASE_URL . $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
<p>View Details</p>
</a>
</li> 