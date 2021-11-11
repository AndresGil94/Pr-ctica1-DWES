
<?php 
	/**
	
	**/
	if ($_REQUEST['menu']=='inicio') {
		require_once('Program/inicio.php');
	}if ($_REQUEST['menu']=='carrito') {
		require_once('Program/carrito.php');
	}if ($_REQUEST['menu']=='pedidos') {
		require_once('Program/pedidos.php');
	
} 
 ?>
