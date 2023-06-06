

<footer class="footer">
	<div class="fcontainer">
		<div class="frow">
			<div class="footer-col">
				<h4>Company</h4>
				<ul>
					<li><a href="#">about us</a></li>
					<li><a href="#">our servives</a></li>
				</ul>
			</div>

			<div class="footer-col">
				<h4>Get help</h4>
				<ul>
					<li><a href="#">FAQ</a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
				</ul>
			</div>

			<div class="footer-col">
				<h4>Contact us</h4>
				<ul>
					<li><a href="#">Telephone</a></li>
					<li><a href="#">Email</a></li>
					<li><a href="#"></a></li>
				</ul>
			</div>

			
		</div>
	</div>
</footer>


<style>
  .footer{
	font-family: Verdana, sans-serif;
	background: #2a2a31;
    padding: 0px 0;
    position: relative;
	width:100%;
	bottom:0px;
	height: 300px;
	margin-top: auto;
}

.fcontainer{
	max-width: 1170px;
	
	margin: auto;
}

.frow{
	display: flex;
	flex-wrap: wrap;
}

ul{
	list-style: none;
}

.footer-col{
	width: 25%;
	padding: 0 5px;
}

.footer-col h4{
	font-size: 18px;
	color: white;
	text-transform: capitalize;
	margin-bottom: 30px;
	font-weight: 500;
	position: relative;
}

.footer-col h4::before{
	content: '';
	position: absolute;
	left: 0;
	bottom: -10px;
	background: #fff;
	height: 2px;
	box-sizing: border-box;
	width: 50px;

}

.footer-col ul li a:not(:last-child){
 margin-bottom: 10px;
}

.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #fff;
	text-decoration: none;
	font-weight: 300;
	color:#bbb;
	display: block;
	transition: all 0.3s ease;
}

.footer-col ul li a:hover{
	color:teal;
	padding-left: 8px;
}

.footer-col {}

</style>
   