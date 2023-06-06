<?php

session_start();

require_once ("php/CreateDb.php");
require_once ("php/component.php");

$db = new CreateDb("Productdb", "Producttb");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    require_once ('php/header.php');
?>

<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h1 style="font-family: sans-serif;">My Shopping Cart</h1>
                <div class="thead">
                <div class="img-cart1"></div>
              
                </div>

                <?php

                $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    
                                    cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                    $total = $total + (int)$row['product_price'];
                                    
                                }
                            }
                        }
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }

                ?>

            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div>
                <h3>PRICE DETAILS</h3>
                
                <div class="price-details">
                    <div class="prices-delivery">
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<div class=\"items-box\">Price ($count items)</div>";
                            }else{
                                echo "<div class=\"items-box\">Price (0 items)</div>";
                            }
                        ?>
                        <div class="items-box">Delivery Charges 0</div></div>
                        
                        <div class="price-total-container">Amount Payable 
                        <div class="price-total"><b>E<?php echo $total; ?></b></div>
                        
                    </div></div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</div>

<style>
    body{
        padding: 0;
        background:#eee;
    }

    

    .items-box{
        position: relative;
        float: left;  
        
        padding: 4px 5%;
        width: 35%;
        border: 3px solid black;
        margin: 0 12px;

    }
    .prices-delivery{
        position: relative;
        float: left;  
        
        width: 50%;
        
        margin: 0 12px;
    }
    .price-delivery{
        position: relative;
        float: left;  
        font-size: 20px;
        padding: 8px 5%;
        width: 35%;
        border: 3px solid #444;
        margin: 0 auto;
        
    }

    .price-total-container{
        position: relative;
        float: left;
        font-size: 20px;
        padding: 8px 5%;
        font-family: sans-serif;
        background: teal;
        color: white;
        border: 3px solid #444;
        width: 30%;
        border-radius:2%;
        
        margin: 0 12px;
        
    }

    .price-total{
        position: relative;
        float: right;
        
    }
.pt-4{
    position: relative;
                    float: left;
                    font-family: sans-serif;
                    margin: 8px 9%;
}

.thead{
    width:95%;
    height:41px;
    
    margin: 40px auto 8px auto;
}   

.img-cart1{
                    width: 9%;
                    height: 41px;
                    position: relative;
                    float: left;
                    margin-left: 1%;
                }

.shopping-cart{
    background: lightgrey;
    text-align: center;
}

.price-details{
    width: 100%;
	
    padding: 3% 2%;
}

.img{
    background:white;
}



</style>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
