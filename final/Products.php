<?php
include("header.php");
?>
<h2 class="browse"> Browse All </h2>
<div class="productImages">
  <?php
    include("Services/Displayphotos.php");
    $productpage =  DisplayImages::allProducts();
  ?>
</div>

<?php
include("footer.php");
?> 