<?php
include('./actions/select.php');
session_start();
$product_description=product_detail($_GET['product_id']);
$product_id=$_GET['product_id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Online Smart Home Devices Shopping Platform</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
<header id="Header"></header>

<div class="container">

<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                </ol>
            </nav>
    
            <!-- Page Heading -->
            <h1 class="my-4">Product Description</h1>

	<div class="row">
		<div class ='col-md-5'>
		<img src="./prod-img/<?php echo $product_description['product_picture']?>" width="400" height="400" alt="device's picture">
		</div>
		<div class ='col-md-7'>
			<h2><?php echo $product_description['product_name']; ?></h2>
			<br>
			<h3>$<?php echo $product_description['product_price']; ?></h3>
			<br>
			<form action="./actions/insert.php" method="POST">
                <button class='btn btn-primary btn-lg btn-block' type='submit' name='product_id' value='<?php echo $product_id ?>'>Add to Cart</button>
            </form>
		
			<br>
			<h3>
			Product Details
			</h3>
			<br>
			<p>
			<?php echo $product_description['product_description']; ?>
			</p>
			<br><br><br><br><br>
		</div>
	</div>
		

	
</div>



<footer id="Footer"></footer>
</body>
</html>

<script src="header.js"></script>
