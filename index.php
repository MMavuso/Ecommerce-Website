<?php

session_start();

require_once ('php/CreateDb.php');
require_once ('./php/component.php');


// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
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
    <title>Shopping Cart</title>

    <!-- Font Awesome -->
    

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php require_once ("php/header.php"); ?>
<p style="width:100%; background:blue; text-align:center;padding:0 auto;"><form style="margin: 4px 25%;" action="index.php" method="GET">
    <button type="submit" class="category-buttons" name="category" value="">All</button>
    <button type="submit" class="category-buttons" name="category" value="0">Laptops</button>
    <button type="submit"  class="category-buttons" name="category" value="1">Phones</button>
    <button type="submit" class="category-buttons" name="category" value="2">iPad/ Tablets</button>
    <button type="submit" class="category-buttons" name="category" value="3">Headphones</button>
    <button type="submit"  class="category-buttons" name="category" value="4">Smart watches</button>
    <button type="submit" class="category-buttons" name="category" value="5">Accessories</button>


</form>
</p>
<p >
    <div>
    <div class="container" style="   background: #ddd;  height: auto;">
        <div class="row">

            <?php
            echo"<div class=\"store-container\" style=\"   background: #ddd;
            height: auto; width:100%; position:relative; overflow:scroll; margin: auto; padding-bottom:40px;\">"; 
$dbname = "productdb";
$tablename = "producttb";
$servername = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($servername, $username, $password,$dbname);

if ($con->connect_error){
    die("Connection failed : " . mysqli_connect_error());
}
  

                if(!isset($_GET['category'])){
                    $select_query="Select * from producttb";
                    $result_query= mysqli_query($con, $select_query);
                    
                    while ($row = mysqli_fetch_assoc($result_query)){
                        component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                    }
                }

                if(isset($_GET['category'])){
                    $varis=$_GET['category'];
                    $select_query="Select * from producttb where category = '$varis'";
                    $result_query= mysqli_query($con, $select_query);
                    
                    while ($row = mysqli_fetch_assoc($result_query)){
                        component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                    }
                }

 echo"</div>" ;           
                

            ?>
        </div>
</div>


            </div></p>



<?php require_once ("php/footer.php"); ?>
            

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
