<?php
include("header.php");
include("Views/Search.php");
?>
<div class="arrow">
   <a href="Products.php"><img class="arrow" src="lib/img/backarrow.png" alt="Go back"> </a>   
</div>

<?php
  $idOfProduct = $_GET["productId"];
  SearchService::getProductById($idOfProduct);
?>

<div class="Purchase">
  <a  href="Products.php"><div class="buttonBack">
   <h1 class="ronaldoHeader">Continue Shopping </h1>
  </div></a>
  <figure>
    <img src="lib/img/ronaldo-buy.png" alt="ronaldo happy for the purchase ">
    <figcaption> Thank you for the purchase !</figcaption>
  </figure>
</div>
<script src='lib/js/cartNotification.js'></script>

<?php
include("footer.php");
?>