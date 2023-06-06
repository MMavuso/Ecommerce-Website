<html>
    <head>
        <title>Admin Page</title>

    </head>

    <body>
    <?php require_once ("php/header.php"); ?>
        <center>
        <h1>Storing Form data in Database</h1>
        <form class="frm" action="php/insert.php" method="POST">
            <p>
                <label for="id"><b>ID:</b> </label>
                <input type="text" name="id" id="id">
            </p>
            <p>
                <label for="product_name"><b>PRODUCT NAME:</b> </label>
                <input type="text" name="product_name" id="product_name">
            </p>
            <p>
                <label for="product_price"><b>PRODUCT PRICE:</b> </label>
                <input type="text" name="product_price" id="product_price">
            </p>

            <p>
                <label for="product_image"><b>PRODUCT IMAGE:</b> </label>
                <input type="file" name="product_image" id="product_image">
            </p>
            <p>
                <label for="Category"><b>CATEGORY:</b> </label>
                <input type="text" name="category" id="category">
            </p>
        
        <button class="btns" type="submit" >Submit</button>
        </form>
</center>
    </body>

    <style>
body{
    font-family: sans-serif;
}

.frm{
    border: 1px solid #bbb;
    width:60%;
    margin:80px auto;
    padding: 20px;
}

        .btns{
                background: rgba(33,196,239,1);
                margin: 0 4%;
                font-weight: bolder;
                height: 40px;
                width: 30%;
                position: relative;
           
                font-size:100%;
                border-radius: 5%;
                border:0;
            }
    </style>
</html>