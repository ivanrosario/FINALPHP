<?php
include("header.php");
include("Services/Search.php");

$idOfProduct = $_GET["productId"];
SearchService::getProductById($idOfProduct);

?>





<?php
include("footer.php");

?>