<?php
class DisplayImages {
 	public static function featuredImages(){

		include("Services/Database.php");

		try {
				$results = $db->query("SELECT * FROM Products WHERE Display = 'featured' ");
		} catch (Exception $e){
				echo "Bad query";
				exit;
		}

		$featuredProducts = $results->fetchAll(PDO::FETCH_ASSOC);

		foreach($featuredProducts as $product ){
			$productImage = $product[Image];
			$productDescription = $product[Description];
			$productPrice = $product[Price];
			$productName = $product[Name];
			$productId = $product[ShoeId];

			$homePageImages  = "<div class='featuredProducts'>";
			$homePageImages .= "<figure>";
			$homePageImages .= "<a  href='Product_detail.php?productId=$productId'><img src='$productImage' alt='Product Image'></a>";
			$homePageImages .= 	"<figcaption>	$productName  ";
			$homePageImages .= "</figcaption>	</figure> $$productPrice </div>";

			echo"$homePageImages";
		}
	}

	public static function allProducts(){

		include("Services/Database.php");

		try {
 			$results = $db->query("SELECT * FROM  Products");
		} catch (Exception $e){
    		echo "Bad query";
    		exit;
		}

 		$myProducts = $results->fetchAll(PDO::FETCH_ASSOC);

 		foreach($myProducts as $product ){
			$productImage = $product[Image];
			$productDescription = $product[Description];
			$productPrice = $product[Price];
			$productName = $product[Name];
			$productId = $product[ShoeId];

			$allProductsStock  = "<div class='allProducts'>";
			$allProductsStock .= "<figure>";
			$allProductsStock .= "<a  href='Product_detail.php?productId=$productId'><img src='$productImage' alt='Product Image'></a>";
			$allProductsStock .= "<figcaption>$productName  " ;
			$allProductsStock .= "</figcaption>	</figure>$$productPrice</div>";


			 echo "$allProductsStock";
 		}

	}
}


?>