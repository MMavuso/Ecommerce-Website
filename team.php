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

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Hands-on THREE.js - complete</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./styleSlider.css">
  <link rel="stylesheet" type="text/css" href="./teams.css">
   <link rel="stylesheet" href="./footer.css">
 
</head>
<body>

<?php require_once ("php/header.php"); ?>


  <div class="team-area">
  	<div class="container">
  		<div class="row">
  			<div class="col-md=12">
  				<div class="section-title text-container">
  					<h2>Our Team</h2>
  					<p>Meet Our talentend Team Members</p>
  				</div>
  			</div>

  			<div class="col">
  				<div class="single-team">
  					<div class="team-img">
  						<img src="4.jpeg">
  					</div>
  					<div class="team-info">
  						<h3>Prof. Ara Monadjem</h3>
  						<p></p>
  					</div>
  					<p class="team-text">Ara is a professor in the department of biological sciences at the University of Eswatini. He is a biodiversity ecologist specializing in the ecology and conservation of birds and mammals. His focus is currently on African small mammals and large birds but works with all terestrial vertabrates. He specializes in field based studies where the objectives are either to obtain biological and taxonomic insights on rare and thretened species, or to understand the ecological roles and ecosystem functions provided by these species in natural and agricultural landscapes.</p>
  				</div>
  			</div>
  		

  		<!-- second member-->

  		<div class="col">
  				<div class="single-team">
  					<div class="team-img">
  						<img src="1.jpeg">
  					</div>
  					<div class="team-info">
  						<h3>Prof. Themba'lilahlwa Mahlaba</h3>
  						<p></p>
  					</div>
  					<p class="team-text">Themba'lilahlwa is the Head of Department of Biological Sciences at the University of Eswatini. He does researchc in ecology, physiology, and zoology. His current research intrest is in managememnt of rodents in rural homesteads and smallholder agricultural plantations.</p>
  				</div>
  			</div>
  		</div>


  		<!-- third menber-->
	<div class="col">
  				<div class="single-team">
  					<div class="team-img">
  						<img src="2.jpeg">
  					</div>
  					<div class="team-info">
  						<h3>Dr. Sara Padidar</h3>
  						<p></p>
  					</div>
  					<p class="team-text">Sara is a molecular biologist with the Department of Biological Sciences at the University of Eswatini. She trained and qualified as a pharmacist in the United Kingdom before specializing in molecular biology and nutrition. Over the past 20 years, Sara's broad background has allowed her to work in a variety of of sectors including researchc and development, academia, international NGOs, and frontline servivce delivery. Her research focuses on using 'omics; technologies to elucidate disease pathogenisis. The broad application of these technologies has had the priviledge of being part of some exciting and diverse scientific teams from toxinology to cancer to wildlife forensics. Sara’s background in health has complimented the EWILD team well with her current research interests focus on One Health and zoonoses; snakes, snake venom and snakebites in collaboration with Eswatini Antivenom Foundation; and ecological determinants of health.</p>
  				</div>
  			</div>
  		

  		<div class="row"><!--forth member-->
	<div class="col">
  				<div class="single-team">
  					<div class="team-img">
  						<img src="3.jpeg">
  					</div>
  					<div class="team-info">
  						<h3>Mr. Mnqobi Lifa Mamba </h3>
  						<p></p>
  					</div>
  					<p class="team-text">Mnqobi is a research fellow and museum curator at the University of Eswatini and a taxonomist. Mnqobi is passionate about field biology, especially conducting biodiversity surveys to discover unknown species on the African continent. Mnqobi is particularly interested in studying small mammals which are a very diverse group of animals, exhibiting high morphological, species, and functional diversity.</p>
  				</div>
  			</div>

  			<div class="col">
  				<div class="single-team">
  					<div class="team-img">
  						<img src="6.jpeg">
  					</div>
  					<div class="team-info">
  						<h3>Zamekile Bhembe</h3>
  						<p></p>
  					</div>
  					<p class="team-text">Zamekileis a PhD student at University of Eswatini. Her research interest is on birds. Zamekile Bhembe is an ecologist whose primary research interests are in bird ecology and conservation. She holds a B.Sc. degree majoring in biology and chemistry and a master’s degree in conservation ecology, both from the University of Eswatini. Ms Bhembe joined the University of Eswatini in August 2022 as a lecturer and Ph.D. student in the department of biological sciences. The Ph.D. is focused on malaria parasites in birds. </p>
  				</div>
  			</div>

  			<div class="col">
  				<div class="single-team">
  					<div class="team-img">
  						<img src="5.jpeg">
  					</div>
  					<div class="team-info">
  						<h3>Siphesihle Magagula </h3>
  						<p></p>
  					</div>
  					<p class="team-text">Siphesihle is a PhD student at University of Eswatini focusing on testing the use of owls to reduce rodent damage to sugarcane plantations. She holds a B.Sc degree majoring in biology and chemistry and master’s degree in conservation ecology. Her research interests are on small mammals, snakes and snake venom.  </p>
  				</div>
  			</div>
  		</div>

</div>
  	</div>
  </div>

  <?php require_once ("php/footer.php"); ?>

</body>
	</html>
