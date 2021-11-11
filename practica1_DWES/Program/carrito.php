<?php
session_start();

if (isset($_POST['article']) && isset($_POST['quantity'])) {
    $article = $_POST['article'] . "-" . $_POST['quantity'];

    if (! isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    array_push($_SESSION['cart'], $article);
}

if (isset($_SESSION['cart'])) {

    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $explode = explode("-", $item);
        echo $explode[0] . " " . $explode[1] . " EUR. x " . $explode[2] . '</br>';
        $total += $explode[1] * $explode[2];
        
    }
    
    echo "Total: " . $total;

    echo "<form action='index.php?menu=pedidos' method='POST'> <input type='submit' value='Finalizar compra' name='cart'> </form>";
    echo "<form action='index.php?menu=inicio' method='POST'> <input type='submit' value='Seguir comprando'> </form>";
} else {
    echo "El carrito esta vacio";
}
