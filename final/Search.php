<?php
include("header.php");
?>
<div class="wrapper">
  <div class="search">
  <h1>Search</h1>
  <form  id="submit" method="POST" action="#">
    <input type="text"  name="search" value="" >
    <select name="priceRange">
      <option value="All">No sort</option>
      <option value="Max">Max Price</option>
      <option value="Min">Min Price</option>
    </select>
    <select name="Category">
      <option value="All">All</option>
      <option value="Indoor">Indoor</option>
      <option value="Lifestyle">Lifestyle</option>
      <option value="Turf">Turf</option>
      <option value="Cleat">Cleat</option>
    </select>
    <input class="searchBar" type="Submit" value="Submit" name="Submit" /> 
  </form>
  </div>
  <div class='productImages'>
    <?php
      include("Views/Search.php");

      if(isset($_POST['Submit'])){
        $category = $_POST['Category'];
        $search = $_POST['search'];
        $range = $_POST['priceRange'];

        $productFilter = SearchService::getSearchResults($range, $category, $search);

        echo"$productFilter";
      }
    ?>
  </div>
</div>
<?php
include("footer.php");
?>