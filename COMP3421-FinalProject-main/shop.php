
<!DOCTYPE html>
<html>
<head>
	<title>Online Smart Home Devices Shopping Platform</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <header id="Header"></header> 

        <!-- Main Content -->
        <div class="container">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                </ol>
            </nav>
    
            <!-- Page Heading -->
            <h1 class="my-4">Shop Now</h1>
          
            <!-- Sale Items 
            Display three item in each row-->
            <?php if( $i % 3 == 0){ ?>
            <div class="row">
                <?php }?>
            <?php  
            include('./actions/select.php');
            $product = product_list();   
            session_start();
            $_SESSION[$pervious_page]='shop.php';
            #print all products using for loop
            for($i=0;$i<count($product);$i++){?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="./images/<?php echo $product[$i]['product_picture'];?>" width="500"  alt="device's picture">
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">
                                    <?php echo $product[$i]['product_name'];?>
                                </a>
                            </h4>
                            <h5>
                                <?php echo $product[$i]['product_price'];?>
                            </h5>
                            <p class="card-text">
                                <?php echo $product[$i]['product_description'];?>
                            </p>
                            <?php for($j=0;$j<5;$j++){
                                if($j<$product[$i]['product_rate']){ ?>
                                    <small class="text-muted"><?php echo "★" ?></small>
                                <?php }else{ ?>
                                    <small class="text-muted"><?php echo "☆" ?></small>
                                <?php } ?>  
                            <?php } ?> 
                        </div>
                        <form action="./actions/insert.php" method="POST">
                            <button class='btn btn-primary btn-lg btn-block' type='submit' name='product_id' value='<?php echo $product[$i]['product_id'] ?>'>Add to Cart</button>
                        </form>
                    </div>
                </div>
            <?php } ?>
        </div>
        </div>
    </body>
    <footer id="Footer"></footer>
</html>


<script src="header.js"></script>

        
            
    
		
