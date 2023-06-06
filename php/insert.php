<!DOCTYPE html>
<html>
<head>
    <title>Insrt Page</title>
</head>

<body>
    <center>
        <?php 
        $dbname = "productdb";
        $tablename = "producttb";
        $servername = "localhost";
        $username = "root";
        $password = "";
        $con = mysqli_connect($servername, $username, $password,$dbname);
        

        //Check connection
        if ($con->connect_error){
            die("Connection failed : " . mysqli_connect_error());
        }
        
        //Storing all values from the form data
        $id = $_REQUEST['id'];
        $product_name = $_REQUEST['product_name'];
        $product_price = $_REQUEST['product_price'];
        $product_image = $_REQUEST['product_image'];
        $category = $_REQUEST['category'];

        //Inserting data into database
        $sql= "INSERT INTO producttb VALUES ('$id','$product_name','$product_price','$product_image','$category')";
        if(mysqli_query($con,$sql)){
            echo"<h3>Data stored successfully</h3>";
        } else{
            echo"ERROR";
        }
        
        //Close connection
        mysqli_close($con);

        ?>
    </center>
</body>

</html>