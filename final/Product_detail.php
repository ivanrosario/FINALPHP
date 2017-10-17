<?php
include("header.php");
include("Services/Search.php");
?>
<div class="arrow">
   <a href="Products.php"><img class="arrow" src="lib/img/backarrow.png" alt="Go back"> </a>   
</div>

<?php
  $idOfProduct = $_GET["productId"];
  SearchService::getProductById($idOfProduct);
?>

<div class="Purchase">
  <figure>
    <img src="lib/img/ronaldo-buy.png" alt="ronaldo happy for the purchase ">
    <figcaption> Thank you for the purchase !</figcaption>
  </figure>
</div>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src='lib/js/cartNotification.js'></script>


<?php
include("footer.php");
?>