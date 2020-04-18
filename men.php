<?php
$pagetitle = "Men";
include "includes/navbar.php";
include "includes/connect.php";

$query = $conn->prepare("SELECT * FROM products where ProductCategory = 'Men'");
$query->execute();

?>

<div class="wrapper custom-container text-center">
	<div class="row">
		<div class="col-lg-3">
			<div class="filter-bar text-center">
				<h3 class="filter-title">Filter By</h3>
				<span>Price</span>
				<div class="filter-input">
					<input type="hidden" class="range-slider" value="1000" />
				</div>
				<div class="gray-divider"></div>
				<span>Marque</span>		
				
				<div class="divider">
					<div class="divider-color"></div>
				</div>	
				
				<li><label><input type="checkbox"><span>Nike</span></label></li>
				<li><label><input type="checkbox"><span>Adidas</span></label></li>
				<li><label><input type="checkbox"><span>Puma</span></label></li>
				<li><label><input type="checkbox"><span>Asics</span></label></li>
				<div class="gray-divider"></div>
				<span>Size</span>		
				<div class="divider">
					<div class="divider-color"></div>
				</div>	
				<li><label><input type="checkbox"><span>S</span></label></li>
				<li><label><input type="checkbox"><span>M</span></label></li>
				<li><label><input type="checkbox"><span>L</span></label></li>
				<li><label><input type="checkbox"><span>XL</span></label></li>
				<li><label><input type="checkbox"><span>XXL</span></label></li>
				<div class="gray-divider"></div>
				<span>Color</span>		
				<div class="divider">
					<div class="divider-color"></div>
				</div>	
				<li><label><input type="checkbox"><span>Red</span></label></li>
				<li><label><input type="checkbox"><span>Green</span></label></li>
				<li><label><input type="checkbox"><span>Blue</span></label></li>
				<li><label><input type="checkbox"><span>Black</span></label></li>
				<li><label><input type="checkbox"><span>Yellow</span></label></li>

			</div>
		</div>

		<div class="col-lg-9">
			<div class="bread-crumb"><a href="index.php">Home</a> | Men</div>
			<div class="content text-center">
				<div class="row">

					<?php 
					while($result = $query->fetch())
					{
						echo '<div class="col-lg-4">
						<div class="product-item">
							<div class="product-img">
								<div class="overlay">
									<button class="add-to-cart">Add To Cart</button>
								</div>
								<img src="'.$result["ProductSrc"].'" alt="" draggable="false">	
							</div>
							<div class="product-info">
								<h6>'.$result["ProductName"].'</h6>
								<span class="product-price">'.$result["ProductPrice"].'</span>
							</div>
						</div>
					</div>';
					}

					?>

					
					



				</div>

			</div>
		</div>

	</div>
</div>


<?php 
include "includes/footer.php";
?>