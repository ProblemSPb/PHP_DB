<?php

require("connecting_DB.php");

$title = get_products_title(1);
echo "Товар: ".$title."<br>";

$price = get_price(1);
echo "Цена товара: ".$price;

?>
