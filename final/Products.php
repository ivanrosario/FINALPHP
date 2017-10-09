<?php
include("header.php");
?>

<div class="productImages">
  <?php
    include("Services/Displayphotos.php");
    $productpage =  DisplayImages::allProducts();
  ?>
</div>

<?php
include("footer.php");
?> 