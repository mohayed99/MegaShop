<?php 
session_start();
$pagetitle = "Home";
include "includes/navbar.php";
include "includes/connect.php";

$query = $conn->prepare("SELECT * FROM carousel");
$query->execute();

?>


<!-- Start Slider -->

<?php 

if(!isset($_GET["page"]))
{

?>



<div class="slider">
   <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">

<?php

$i=0;
while($result = $query->fetch())
{
if($i == 0)
{
?>
<div class="carousel-item active" style="background-image:url(<?php echo $result["carousel_src"]; ?>)">
    	<div class='carousel-info'>
    		<h1 class='carousel-title'><?php echo $result["carousel_title"]; ?></h1>
    		<p class='carousel-description'><?php echo $result["carousel_description"]; ?></p>
    		<a href=#>Shop Now</a>
    	</div>
   </div>


<?php

$i++;
}

else
{
?>
<div class="carousel-item" style="background-image:url(<?php echo $result["carousel_src"]; ?>)">
    	<div class='carousel-info'>
    		<h1 class='carousel-title'><?php echo $result["carousel_title"]; ?></h1>
    		<p class='carousel-description'><?php echo $result["carousel_description"]; ?></p>
    		<a href=#>Shop Now</a>
    	</div>
    </div>


<?php

}

}
?>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true">
    	<i class="fas fa-chevron-circle-left"></i>
    </span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true">
    	<i class="fas fa-chevron-circle-right"></i>
    </span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>

<!-- End Slider -->


<!-- Start Last Product -->

<div class="last-product text-center">
	
	<h1>Last Product</h1>

	<div class="row">

		<div class="col-lg-3">
			<div class="product-item">
				<div class="product-img">
					<div class="overlay">
						<button class="add-to-cart">Order Now</button>
					</div>
					<img src="img/products/product1.jpg" alt="" draggable="false">	
				</div>
				<div class="product-info">
					<h6>Jacket</h6>
					<span class="product-price">$29.00</span>
				</div>
			</div>
		</div>


		<div class="col-lg-3">
			<div class="product-item">
				<div class="product-img">
					<div class="overlay">
						<button class="add-to-cart">Order Now</button>
					</div>
					<img src="img/products/product2.jpg" alt="" draggable="false">	
				</div>
				
				
				<div class="product-info">
					<h6>T-Shirt</h6>
					<span class="product-price">$35.00</span>
				</div>
			</div>
		</div>

		<div class="col-lg-3">
			<div class="product-item">
				<div class="product-img">
					<div class="overlay">
						<button class="add-to-cart">Order Now</button>
					</div>
					<img src="img/products/product3.jpg" alt="" draggable="false">	
				</div>
				<div class="product-info">
					<h6>Umbrella</h6>
					<span class="product-price">$55.00</span>
				</div>
			</div>
		</div>

		<div class="col-lg-3">
			<div class="product-item">
				<div class="product-img">
					<div class="overlay">
						<button class="add-to-cart">Order Now</button>
					</div>
					<img src="img/products/product4.jpg" alt="" draggable="false">	
				</div>
				<div class="product-info">
					<h6>Dress</h6>
					<span class="product-price">$60.00</span>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- End Last Product -->




<!-- Start Best Sales -->

<div class="best-sales text-center">
	
	<h1>Best Sales</h1>

	<div class="row">

		<div class="col-lg-3">
			<div class="product-item">

				<div class="product-img">
					<div class="overlay">
						<div class="icons">
							<div class="icon-item"><i class="far fa-heart"></i></div>
							<div class="icon-item"><i class="far fa-eye"></i></div>
						</div>
						<button class="add-to-cart">Add To Cart</button>
					</div>
					<img src="img/products/product5.jpg" alt="" draggable="false">	
				</div>
				<div class="product-info">
					<h6>Jacket</h6>
					<span class="product-price">$29.00</span>
				</div>
			</div>
		</div>


		<div class="col-lg-3">
			<div class="product-item">
				<div class="product-img">
					<div class="overlay">
						<div class="icons">
							<div class="icon-item"><i class="far fa-heart"></i></div>
							<div class="icon-item"><i class="far fa-eye"></i></div>
						</div>
						<button class="add-to-cart">Add To Cart</button>
					</div>
					<img src="img/products/product6.jpg" alt="" draggable="false">	
				</div>
				
				
				<div class="product-info">
					<h6>T-Shirt</h6>
					<span class="product-price">$35.00</span>
				</div>
			</div>
		</div>

		<div class="col-lg-3">
			<div class="product-item">
				<div class="product-img">
					<div class="overlay">
						<div class="icons">
							<div class="icon-item"><i class="far fa-heart"></i></div>
							<div class="icon-item"><i class="far fa-eye"></i></div>
						</div>
						<button class="add-to-cart">Add To Cart</button>
					</div>
					<img src="img/products/product7.jpg" alt="" draggable="false">	
				</div>
				<div class="product-info">
					<h6>Umbrella</h6>
					<span class="product-price">$55.00</span>
				</div>
			</div>
		</div>

		<div class="col-lg-3">
			<div class="product-item">
				<div class="product-img">
					<div class="overlay">
						<div class="icons">
							<div class="icon-item"><i class="far fa-heart"></i></div>
							<div class="icon-item"><i class="far fa-eye"></i></div>
						</div>
						<button class="add-to-cart">Add To Cart</button>
					</div>
					<img src="img/products/product8.jpg" alt="" draggable="false">	
				</div>
				<div class="product-info">
					<h6>Dress</h6>
					<span class="product-price">$60.00</span>
				</div>
			</div>
		</div>

		<div class="col-lg-3">
			<div class="product-item">
				<div class="product-img">
					<div class="overlay">
						<div class="icons">
							<div class="icon-item"><i class="far fa-heart"></i></div>
							<div class="icon-item"><i class="far fa-eye"></i></div>
						</div>
						<button class="add-to-cart">Add To Cart</button>
					</div>
					<img src="img/products/product1.jpg" alt="" draggable="false">	
				</div>
				<div class="product-info">
					<h6>Jacket</h6>
					<span class="product-price">$29.00</span>
				</div>
			</div>
		</div>


		<div class="col-lg-3">
			<div class="product-item">
				<div class="product-img">
					<div class="overlay">
						<div class="icons">
							<div class="icon-item"><i class="far fa-heart"></i></div>
							<div class="icon-item"><i class="far fa-eye"></i></div>
						</div>
						<button class="add-to-cart">Add To Cart</button>
					</div>
					<img src="img/products/product2.jpg" alt="" draggable="false">	
				</div>
				
				
				<div class="product-info">
					<h6>T-Shirt</h6>
					<span class="product-price">$35.00</span>
				</div>
			</div>
		</div>

		<div class="col-lg-3">
			<div class="product-item">
				<div class="product-img">
					<div class="overlay">
						<div class="icons">
							<div class="icon-item"><i class="far fa-heart"></i></div>
							<div class="icon-item"><i class="far fa-eye"></i></div>
						</div>
						<button class="add-to-cart">Add To Cart</button>
					</div>
					<img src="img/products/product3.jpg" alt="" draggable="false">	
				</div>
				<div class="product-info">
					<h6>Umbrella</h6>
					<span class="product-price">$55.00</span>
				</div>
			</div>
		</div>

		<div class="col-lg-3">
			<div class="product-item">
				<div class="product-img">
					<div class="overlay">
						<div class="icons">
							<div class="icon-item"><i class="far fa-heart"></i></div>
							<div class="icon-item"><i class="far fa-eye"></i></div>
						</div>
						<button class="add-to-cart">Add To Cart</button>
					</div>
					<img src="img/products/product4.jpg" alt="" draggable="false">	
				</div>
				<div class="product-info">
					<h6>Dress</h6>
					<span class="product-price">$60.00</span>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- End Last Product -->

<!-- Start Our Collection -->

<div class="our-collection text-center">
	<h1>Our Collection</h1>

	<div class="row">
				
				<div class="col-sm-3">
					<div class="collection-item">
						<img src="img/products/shop1.jpg" alt=""  draggable="false">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="collection-item">
						<img src="img/products/shop2.jpg" alt="" draggable="false">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="collection-item">
						<img src="img/products/shop3.jpg" alt="" draggable="false">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="collection-item">
						<img src="img/products/shop4.jpg" alt="" draggable="false">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="collection-item">
						<img src="img/products/shop5.jpg" alt="" draggable="false">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="collection-item">
						<img src="img/products/shop6.jpg" alt="" draggable="false">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="collection-item">
						<img src="img/products/shop7.jpg" alt="" draggable="false">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="collection-item">
						<img src="img/products/shop8.jpg" alt="" draggable="false">
					</div>
				</div>


	</div>
</div>


<!-- End Our Collection -->




<!-- Start Brands -->

<div class="owl-carousel owl-theme text-center brands">

		<div class="brands-item">
			<img src="img/brands/brand1.png">			
		</div>
		<div class="brands-item">
			<img src="img/brands/brand2.png">			
		</div>
		<div class="brands-item">
			<img src="img/brands/brand3.png">			
		</div>
		<div class="brands-item">
			<img src="img/brands/brand4.png">			
		</div>
		<div class="brands-item">
			<img src="img/brands/brand5.png">			
		</div>
		<div class="brands-item">
			<img src="img/brands/brand6.png">			
		</div>

</div>

<!-- End Brands -->

<?php

}

elseif($_GET["page"] === "cart" )
{

if(isset($_SESSION["user"]))
{

$query = $conn->prepare("SELECT ProductID FROM cart WHERE username = ? ");
$query->execute(array($_SESSION["user"]));



?>
<!-- Start Cart Page -->
<div class="cart-item">
   
<!-- -->

<?php 


$query = $conn->prepare("SELECT ProductID FROM cart WHERE username = ? ");
$query->execute(array($_SESSION["user"]));

if($query->rowCount() > 0)
{
?>


<!-- -->
	<table class="table">
    <tr>
      <th scope="col"></th>
      <th scope="col">Product Name</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
    </tr>

  <tbody>
<?php

while($result = $query->fetch())
{
$query1 = $conn->prepare("SELECT * from products where ProductID = ?");
$query1->execute(array($result[0]));
while($result1 = $query1->fetch())
{


?>
		
	<tr>
      <th scope="row"><img src="<?php echo $result1['ProductSrc'];?>"></img></th>
      <td><?php echo $result1["ProductName"]; ?></td>
      <td><?php echo $result1['ProductCategory']; ?></td>
      <td class="product-price"><?php echo $result1['ProductPrice'];?></td>
      <td><button data-id="<?php echo $result[0]; ?>">X</button></td>
    </tr>




<?php
}
}
echo '
<tr>
	<td colspan="3">Total</td>
	<td colspan="2" id=total></td>
</tr>
  </tbody>
</table>'
;
}
else
{
	?>

	<h1>Your card is empty now.</h1>

	<?php
}

?>





<!-- End Cart Page -->


</div>
<?php
}

else
{
?>
<div class="cart-item">
<h1>You must <a href="login.php">login</a> to see your card.</h1>
</div>
<?php
}
}
?>
<?php 
include "includes/footer.php";
?>