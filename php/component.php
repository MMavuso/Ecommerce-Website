<?php



function component($productname, $productprice, $productimg, $productid){
    $element = "
    
    
    <div class=\"see\">
                <form action=\"index.php\" method=\"post\">
                    <div class=\"card_container\">
                    <h5 class=\"card-title\">$productname</h5>
                        <div class=\"pic_con\">
                            <img src=\"$productimg\" alt=\"Image1\" class=\"img\">
                        </div>
                        <div class=\"card-body\">
                           
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">
                                Some quick example text to build on the card.
                            </p>
                            <section class=\"sect_price\">
                                
                                <span class=\"price\">E $productprice</span>
                            </section>

                            <button type=\"submit\" class=\"btns btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>

            <style>
            body{
                background: #eee;
            }

            .see{
                
                position:relative;
                float:left;
                margin: 2%;
                
                width:25%
            }

            .card_container{
                
                border-radius: 4%;
                width: 100%;
                position: relative;
                float: left;
                margin: 5px 2%;
                padding: 4px;
                background: white;
                border:2px solid #ccc;
                
            }

            .sect_price{
                font-size: 30px;
                margin: 0 4%;
                width: 50%;
                padding: 4px 8px;
                position: relative;
                float:left;
                font-weight: bolder;
                color:#444;
                font-family:sans-serif;
                height: 40px;
            }

            .card-title{
                font-size: 20px;
                padding: 2px;
                margin: 4px 5%;
                justify-content: center;
                text-align:center;
                font-family: sans-serif;
                font-weight: bolder;
                

            }

            .card-text{
                margin: 0 4px 4px 8px;
            }


            .btns{
                background: rgba(33,196,239,1);
                margin: 0 4%;
                font-weight: bolder;
                height: 40px;
                width: 30%;
                position: relative;
                float: right;
                font-size:100%;
                border-radius: 5%;
                border:0;
            }

            

            img{
                max-width: 100%;
                height: auto;
                background: white;
                margin: 2% 2px;
            }</style>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-cart\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-1\">$productname</h5>
                                
                               
                            </div>
                            <div class=\"pt-2\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"> - </i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"> + </button>
                                    
                                    <button type=\"submit\" class=\"btn1\" name=\"remove\">Remove</button>
                                </div>
                            </div>
                            
                            <section class=\"pt-2\">E $productprice</section>
                        </div>
                    </div>
                </form>

                <style>
                body{
                    background: lightgrey;
                }
                .btn1{
                    margin: 0 200px;
                    padding: 5px;
                    background: maroon;
                    color:white;
                }

                
                .cart-items{
                    padding: 2% 0;
                   width: 95%; 
                   background: white;
                   border-bottom: 1px solid lightgrey;
                   height: 150px;
                   margin: 0 auto;
                }

                .img-cart{
                    width: 9%;
                    height: auto;
                    position: relative;
                    float: left;
                    margin-left: 1%;
                }
                .pt-1{
                    position: relative;
                    float: left;
                    font-family: sans-serif;
                    font-weight: bolder;
                    font-size: 100%;
                    margin: 70px 9%;
                    

                }

                .pt-2{
                    position: relative;
                    float: left;
                    font-family: sans-serif;
                    font-weight: bolder;
                    font-size: 100%;
                    margin:70px 2%;
                    
                }

                </style>
    
    ";
    echo  $element;
}

















