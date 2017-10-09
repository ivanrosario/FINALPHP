<?php
class DisplayImages {    


 Public static function featuredImages(){
		try{
				$db = new PDO("mysql:host=localhost;dbname=Finalphp;port=3306", "root", "root");
		} catch(Exception $e){
				echo "unable to connect oh ";
				exit;
		}
 
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
			$productCategory = $product[Category];
			$productRating = $product[Rating];

			echo  "<figure>
  						<a  href='Product_detail.php?productId=$productId'>
							<img src='$productImage' alt='Product Image''></a>
							<figcaption>$productName </br> $productDescription </br> 	$$productPrice  </figcaption>
						</figure> ";		
		}
	}

	Public static function allProducts(){

		try {
			$db = new PDO("mysql:host=localhost;dbname=Finalphp;port=3306", "root", "root");
		} catch(Exception $e){
  			echo "unable to connect oh ";
		}

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
			$productCategory = $product[Category];
			$productId = $product[ShoeId];

    	echo "<figure>
							<a  href='Product_detail.php?productId=$productId'>
							<img src='$productImage' alt='Product Image''></a>
							<figcaption>$productName 
							</br> $productDescription
						 	</br> $$productPrice  </figcaption>
						</figure> ";
 		}

	}	
} 


?>