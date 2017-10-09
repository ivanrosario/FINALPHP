<?php

//still under construction OGOFKGPOK THE QUERY FOR SEARCH
class SearchService {

	public static function getSearchResults($search){
		try {
			$db = new PDO("mysql:host=localhost;dbname=Finalphp;port=3306", "root", "root");
      
		} catch(Exception $e){
  			echo "unable to connect oh ";
		}

		try {
      $query = $db->prepare('SELECT * FROM Products WHERE  Name LIKE ? OR Description LIKE ? OR  Color Like ? ');
      $query->execute(array( "%{$search}%", "%{$search}%","%{$search}%" ));

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
 
	    echo "<figure>
					   	<a  href='Product_detail.php?productId=$productId'>
							<img src='$productImage' alt='Product Image''></a>
					    <figcaption>$productName </br> $productDescription </br> $productPrice </figcaption>
				    </figure> ";	
  }

	}
	
}

?>

