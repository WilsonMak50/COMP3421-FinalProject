<?php 
session_start();
include('./actions/check_cart.php');
check_cart_empty();
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
	

	<main>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <h2 class="text-center mb-4">Payment information</h2>
					<form action="../actions/checkout.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="Creditcard">Card number</label>
                            <input type="text" class="form-control m-auto" name="card_number" placeholder="card number" required="required">  
                        </div>
                        <div class="form-group">
                            <label for="name">Card holder's name</label>
                            <input type="text" class="form-control m-auto" name="card_name" placeholder="name" required="required">  
                        </div>
                        <div class="form-group">
                            <label for="cvv">CVV number</label>
							<input type="password" class="form-control m-auto" name="card_cvv" placeholder="CVV" required="required">  
                        </div>
                        <div class="form-group">
                            <label for="date">Expired data</label>
							<input type="test" class="form-control m-auto" name="card_date" placeholder="Expired date" required="required">  
                        </div>
                        <div class="form-group">
                            <label for="date">Shipping address</label>
							<input type="text" class="form-control m-auto" name="user_address" placeholder="Address" required="required">  
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-4">Enter</button>
						
                    </form>
                </div>

                <div class="col-md-6">
                    <img src="/img/payment.jpg" alt="Description of the image" style="float: right;  height: 50%;
                    width: 50%;">
                  </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
		<footer id="Footer"></footer>
	</main>
<script src="header.js"></script>
