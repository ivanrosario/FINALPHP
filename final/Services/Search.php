<?php

//still under construction OGOFKGPOK THE QUERY FOR SEARCH
class SearchService {

	public static function getSearchResults($range, $category, $search){

		include("Services/Database.php");
	/*
		select columns
		from table
		where fitler
		order by k
		group by v
	*/

		try {
			$query = "";
			$order = "";

			if($range == 'Max'){
				$order = " ORDER BY Price DESC";
			}else if ($range == 'Min'){
				$order = " ORDER BY Price ASC";
			}else{
				$order = NUll;
			}

			if($category == 'All' ){
		 		$query = $db->prepare("SELECT * FROM  `Products`WHERE  Name LIKE ? OR  Color Like ? OR Description Like ?   $order");

			}else{
				$query = $db->prepare("SELECT * FROM  `Products` WHERE  Category = '{$category}' AND (Color Like ? OR  Name LIKE ? OR Description Like ?) $order ");
			}
			//parensis same as math runs it all together 

      // $query = $db->prepare('SELECT * FROM Products WHERE  Name LIKE ? OR Description LIKE ? OR  Color Like ? ');
      $query->execute(array( "%{$search}%", "%{$search}%", "%{$search}%"));

      $results = $query->fetchAll(PDO::FETCH_ASSOC);

		} catch (Exception $e){
    	  echo "Bad query";
    		exit;
		}

	  foreach($results as $product ){
			$productImage = $product[Image];
			$productDescription = $product[Description];
			$productPrice = $product[Price];
			$productName = $product[Name];
			$productCategory = $product[Category];
			$productRating = $product[Rating];
			$productId = $product[ShoeId];

			$searchResult  =  "<div class='allProducts'>";
			$searchResult .= "<figure>";
			$searchResult .= "<a  href='Product_detail.php?productId=$productId'><img src='$productImage' alt='Product Image''></a>";
			$searchResult .= 	"<figcaption>$productName </br> $$productPrice ";
			$searchResult .= "</figcaption>	</figure></div>";


			echo "$searchResult";

  	}
	}


	public static function getProductById($idOfProduct){
	
		include("Services/Database.php");

 		$results = $db->query("SELECT * FROM  `Products` WHERE  `ShoeId` = '{$idOfProduct}' ");

    $productArray = $results->fetchAll(PDO::FETCH_ASSOC);

		foreach($productArray as $product ){
			$productImage = $product[Image];
			$productDescription = $product[Description];
			$productPrice = $product[Price];
			$productName = $product[Name];
			$productCategory = $product[Category];
			$productRating = $product[Rating];
			$IdOfProduct = $product[ShoeId];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
     // The request is using the POST method
		//  $_SESSION['test'] = $_SESSION['test'] + 1; increments by 1 each time the page refresh
		$_SESSION["cart"] = $_SESSION["cart"] +1;
}
			$productId  = "<div class='idProduct'>";
			$productId .= "<h1>$productName </h1>";		
			$productId .= "<figure>";
			$productId .=	"<img src='$productImage' alt='Product Image'></a>";
			$productId .= "<figcaption>$productDescription </br> $$productPrice ";
			$productId .= "</figcaption>
							</figure> 
    					<form  id='Item' method='POST' action='#'>
							<button type='submit' onClick='purchaseProduct()'>Purchase</button>
							<input type='hidden' name='cart' value=''>
							</form>
							<script src='lib/js/cartNotifcation.js'></script>";
		
			echo "$productId";
		}

	}

}

?>

