	<!-- Header file with HTML boiler plate -->
<?php include "includes/header.php" ?>

	<!-- NavBar -->
<section id="NavBar">
	<?php include "includes/navbar.php" ?>	
</section>


	<!-- Title with Carousel -->
<section id="title">
	<div class="container-fluid">
		<div class="row title-container">
			<div class="col-lg-3 title-text">
				<div class="title-inner-text">
					<center>
						<h5>Welcome to</h5><br>
						<h1 class="title-heading">€ASE BANK</h1><br>
						<p>BANKING BECAME EASY & EFFICIENT</p>
					</center>
				</div>
			</div>
			<div class="col-lg-9">
              	<img class="title-img pt-3 pb-2" src="images/title-img.jpg" alt="customer-trust" height="550" width="100%">
    		</div>
		</div>
	</div>
</section>


	<!-- Features -->
<section id="features">
    <div class="row">
    	<div class="col-lg-4">
        	<i class="fas fa-check-circle features-icon"></i>
        	<h3 class="features-heading">Easy to use.</h3>
        	<p class="features-para">So easy to use, anyone could use it.</p>
      	</div>

      	<div class="col-lg-4">
        	<i class="fas fa-bullseye features-icon"></i>
        	<h3 class="features-heading">Customer Trust</h3>
        	<p class="features-para">Customer trust is important to us.</p>
      	</div>

      	<div class="col-lg-4">
        	<i class="fas fa-heart features-icon"></i>
        	<h3 class="features-heading">Guaranteed to work.</h3>
        	<p class="features-para">Find most easiest and efficient way of transactions here.</p>
      	</div>
    </div>
</section>


	<!-- Testimonials -->
<section id="testimonials">
	<div id="testimonials-slide" class="carousel slide carousel-fade" data-bs-ride="carousel">
  		<div class="carousel-inner">
    		<div class="carousel-item testimonials-item active">
      			<h2>This organization will deliver nothing less than the best from expertise and professionalism to top-notch communication. You’re sure to be impressed!</h2>
            	<img class="testimonials-img" src="images/man-img.jpg" alt="man-profile">
            	<em>John, Goa</em>
    		</div>
    		<div class="carousel-item testimonials-item">
      			<h2>I travel the world, this bank has always had my back as well as personal welfare at heart.
				You could never find a better bank to deal with period!.</h2>
            	<img class="testimonials-img" src="images/lady-img.jpg" alt="lady-profile">
            	<em>Angela, Mumbai</em>
    		</div>
  		</div>
  		
  		<button class="carousel-control-prev" type="button" data-bs-target="#testimonials-slide" data-bs-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="visually-hidden">Previous</span>
  		</button>
  
  		<button class="carousel-control-next" type="button" data-bs-target="#testimonials-slide" data-bs-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="visually-hidden">Next</span>
  		</button>
	</div>
</section>


	<!-- Services -->
<section id="services">
    <div class="row">
    	<div class="col-lg-4">
        	<img src="images/user.png" class="services-img" alt="user-img"><br><br>
        	<a href="createuser.php"><button class="btn btn-lg btn-secondary services-btn">Create User</button></a>
      	</div>

      	<div class="col-lg-4">
        	<img src="images/transfer.png" class="services-img" alt="money-transfer"><br><br>
        	<a href="customerlist.php"><button class="btn btn-lg btn-secondary services-btn">Make a Transaction</button></a>
      	</div>

      	<div class="col-lg-4">
        	<img src="images/history.png" class="services-img" alt="transaction-himdory"><br><br>
        	<a href="transactionhistory.php"><button class="btn btn-lg btn-secondary services-btn">Transaction History</button></a>
      	</div>
    </div>
</section>


	<!-- Footer -->
<?php include "includes/footer.php" ?>	