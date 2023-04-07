
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

        <div class="container">
          <h1 class="text-center mb-5">Shopping Cart</h1>

          <div class="row">
            
          <?php
          include('./actions/select_cart.php');
          session_start();
          
          $_SESSION[$pervious_page]='cart.php';
          $user_name = $_SESSION['username'] ;

          if($user_name == null){
            echo '<script> 
            alert("You didnt log in!");
            window.location="../login.html";
            </script>';
        }

           $user_purchase = cart_list();
           $total_quantity='';
           $total_price='';
           // using for loop to print all item
            for($i=0;$i<count($user_purchase);$i++){ 
              $total_quantity +=$user_purchase[$i]['quantity'] ;
              $total_price += $user_purchase[$i]['quantity']*$user_purchase[$i]['product_price'] ;?>
              <div class="card2 mb-3">
                
                <div class="row g-0">
                <!--
                  <div class="row g-0">
                  <div class="col-md-3">
                
                  <img src="./prod-img/<?php echo $user_purchase[$i]['product_picture'];?>" alt="image">

                  </div>

                  <div class="col-md-5">
                  <h5 class="card-title">Name: <?php echo $user_purchase[$i]['product_name'];?></h5>
                  </div>

                  </div>
                  

                  

                  </div>
                -->

                  <div class="col-md-8">
                    <!-- name of item -->
                    <img src="./prod-img/<?php echo $user_purchase[$i]['product_picture'];?>" alt="image">
                  </div> 
                  <div class="col-md-8">
                    <!-- name of item -->
                    <h5 class="card-title">Name: <?php echo $user_purchase[$i]['product_name'];?></h5>
                  </div>  
                  <div class="col-md-8">
                    <!-- price of item-->
                    <p class="card-text">Price:$<?php echo $user_purchase[$i]['product_price'];?></p>
                  </div>
                  <div class="col-md-8">
                    <!-- description of item-->
                    <!--<p class="card-text">Description: <?php //echo $user_purchase[$i]['product_description'];?></p>-->
                  </div>
                  <div class="col-md-8">
                    <!-- quantity of item-->
                    <p class="card-text">Quantity: <?php echo $user_purchase[$i]['quantity'];?></p>
                  </div>
                  <div class ="row">
                  <form action="./actions/insert.php" method="POST">
                    <!-- check the button to + the item-->
                    <button class='btn btn-primary btn-lg btn-block' type='submit' name='product_id' value='<?php echo $user_purchase[$i]['product_id'];?>'>+</button>
                  </form>
                  <form action="./actions/drop.php" method="POST">
                    <!-- check the button to - the item-->
                    <button class='btn btn-primary btn-lg btn-block' type='submit' name='product_id' value='<?php echo $user_purchase[$i]['product_id'];?>'>-</button>
                  </form>
                  </div>
                </div>
              </div>
            <?php } ?>

          
            <div class="card3">
              <div class="row">
                <div class="card-body">
                  <h5 class="card-title">Cart Summary</h5>
                  <hr>      
                  <!-- to total quantity of product-->
                    <p class="card-text">Total Items : <?php echo $total_quantity?></p>
                    <!-- to total price of product-->
                    <p class="card-text">Total Amount: $<?php echo $total_price?></p>
                  <hr>
                
                  <form action="./payment.php" method="POST">
                    <button class="btn btn-primary btn-block" type='submit' name='checkout'>Checkout</button>
                  </form>
                </div>
              </div>
            </div>
          
        </div>
        </div>
        
      </main>
      <br><br><br><br><br>
</body>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer id="Footer"></footer>

</html>
<script src="header.js"></script>
