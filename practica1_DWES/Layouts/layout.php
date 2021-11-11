
<!DOCTYPE html>
<html lang="es">
<head>

	<title> Plantilla con Bootstrap</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- BOOTSTRAP-->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<header>
	<?php 
		require_once('header.php');
	?>	
</header>
<section >
    <div class="container py-5">
     
        </div>

</section>    
<section>	
	<div class="container py-5 ">
		<div row="row py-5">
	<?php 
			
			require_once('routing.php');
	 ?>
		</div>
	</div>
</section>

<footer>
<div class="container pt-3  bg-dark">
		<div row="row pt-5" background="red">
		<div class="mr-auto mt-6">
			<?php 
				include_once('footer.php');
			?>
			</div>
		</div>
	</div>

</footer>
</body>
</html>
