<?php

session_start();

if(isset($_POST['deleteLastOrder'])) {
    
    $data = json_decode($_COOKIE['orders'], true);
    array_pop($data);
    setcookie("orders", json_encode($data), time()+3600);  
    header("Refresh:0");
}

if(isset($_POST['deleteAllOrders'])) {
    
    if (isset($_SERVER['HTTP_COOKIE'])) {
        $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
        foreach($cookies as $cookie) {
            $parts = explode('=', $cookie);
            $name = trim($parts[0]);
            setcookie($name, '', time()-1000);
            setcookie($name, '', time()-1000, '/');
            header("Refresh:0");
        }
    }
}

if(isset($_POST['cart'])) {
       
    if(isset($_COOKIE['orders'])) {
        
        $data = json_decode($_COOKIE['orders'], true);
        $arr_data = array(date("d/m/y G:i:s") => $_SESSION['cart']);
        $data += $arr_data;
        setcookie("orders", json_encode($data), time()+3600);  
        
    } else {
        $arr_data = array(date("d/m/y G:i:s") => $_SESSION['cart']);
        setcookie("orders", json_encode($arr_data), time()+3600);  
    }
    
    session_unset();
    header("Refresh:0");
}

if(isset($_COOKIE['orders'])) {
    $count = 1;
    $data = json_decode($_COOKIE['orders']);
    
    foreach($data as $key => $value) {
        echo "Order $count | $key</br>";
        $count++;
    }
    echo "<form action='index.php?menu=pedidos' method='POST'> <input type='submit' value='Borrar ultimo pedido' name='deleteLastOrder'> </form>";
    echo "<form action='index.php?menu=pedidos' method='POST'> <input type='submit' value='Borrar todos los pedidos' name='deleteAllOrders'> </form>";
    
} else{
    echo "No existen pedidos";
}



