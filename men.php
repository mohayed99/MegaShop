<?php
session_start();
$pagetitle = "Men";
include "includes/navbar.php";
include "includes/connect.php";

$firstquery = $conn->prepare("SELECT * FROM products");
$firstquery->execute();
$result_per_page = 6;

if(isset($_GET["page"]))
	{
		$current_page = $_GET["page"];
	}
	
else
	{
		$current_page = 1;	
	}

$result_page = (intval($current_page)-1)*$result_per_page;

$query = $conn->prepare("SELECT * FROM products LIMIT ".$result_page.",".$result_per_page);
$query->execute();
$query_result = $firstquery->rowCount();
$number_of_page = ceil($query_result / $result_per_page);


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
									<button class="add-to-cart" data-id="'.$result["ProductID"].'" id="add-to-cart">Add To Cart</button>
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

		<nav aria-label="Page navigation example">
		  <ul class="pagination">
			<?php 
			for($i=1;$i<=$number_of_page;$i++)
			{
			if($i == $current_page)
			{
				echo "<li class='page-item'><a class='page-link active-pagination' href='?page=".$i."'>".$i."</a></li>";
			}

			else
			{
			echo "<li class='page-item'><a class='page-link' href='?page=".$i."'>".$i."</a></li>";	
			}
			}

			?>
		 </ul>
		</nav>

		
		</div>

	</div>
</div>


<?php 
include "includes/footer.php";
?>