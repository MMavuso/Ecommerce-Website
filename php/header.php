
<header id="header">
    <nav class="navbar1">
        <a href="home.php" class="">
            <h3 class="">
                <i class="fas fa-shopping-basket"></i> Logo
            </h3>
        </a>

        
       

        <div class="" id="navbarNavAltMarkup">
            <div class=""></div>
            <div class=""><div class="space-x-6">
 	
 		 
 		<a href="index.php" class="links">PRODUCTS</a>
    
 <div class="dropdown">
 		 <button class="dropbtn">ABOUT US</button>
  <div class="dropdown-content">
    <a href="#">Publications</a>
    <a href="#">Projects</a>
  </div>
</div>


 <a href="cart.php" id="cart-link">
                    
                        <i class="fas fa-shopping-cart"></i> CART
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    
                </a>
                <a href="admin.php" class="links">Log in</a>
 	</div>
               
            </div>
        </div>

    </nav>
</header>

<style>
  body{
    padding: 0;
    margin:0;
  }
  #header{
    
  }
    .navbar1{
    padding-right: 6px;
	padding-left: 6px;
	padding-top: 6PX;
	padding-bottom: 6px;
  
	display: flex;
	justify-content: space-between;
	align-items: center;
	font-family:sans-serif;
  
	height: 100px;
color: #fff;
background:  rgba(22,24,24,1);
    }

    #cart-link{
      color:white;
      font-size: 20px;
      font-weight: bolder;
      text-decoration:none;
      margin: 0 16px;
    }

    .dropdown {
  position: relative;
  display: inline-block;
}

#cart_count{
  background: white;
  color: black;
  font-size: 16px;
      font-weight: bolder;
      text-decoration:none;
}
#cart_count{
    text-align: center;
    padding: 0 0.9rem 0.1rem 0.9rem;
    border-radius: 3rem;
}


.dropbtn {
  
  background: black;
  margin-left: 8px;
  margin-right: 16px;
  padding: 0px;
  font-size: 20px;
  border: none;
  color:#fff;
  font-weight: bold;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: teal;}

.logo{
	font-size: xx-large;
	font-weight: bold;
  height: 150px;
}

.links{
	font-size: larger;
	font-weight: bold;
	padding-right: 40px;
	text-decoration: none;
	color: #fff;

}

</style>






