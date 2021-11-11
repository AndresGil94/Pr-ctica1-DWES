<?php

$itemList = array(
    1 => "Articulo 1",
    2 => "Articulo 2",
    3 => "Articulo 3",
    4 => "Articulo 4",
    5 => "Articulo 5",
    6 => "Articulo 6",
    7 => "Articulo 7",
    8 => "Articulo 8",
    9 => "Articulo 9",
    10 => "Articulo 10",
    11 => "Articulo 11"
);

echo "<form method='POST' id='formList' name='formList' action='index.php?menu=carrito'>";
    echo "<select name='article'>";
  
    
    foreach ($itemList as $price => $itemName) {
    
        echo "<option value='$itemName-$price'> $itemName ($price EUR.) </option>";
    }
    
    
    echo "</select>";
    echo "<input type='text' name='quantity'>";
echo "<input type='submit'>";
echo "</form>";
