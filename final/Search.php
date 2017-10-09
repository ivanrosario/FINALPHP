<?php
include("header.php");

?>

<?php
include("Services/Search.php");

if(isset($_POST['Submit'])  == 'Submit'){
  $search = $_POST['search'];
  $searchBar =  SearchService::getSearchResults($search);
}
?>

<h1>Search</h1>
<form  id="submit" method="POST" action="#">
  <input type="text"  name="search" value=""  required>
  <input type="Submit" value="Submit" name="Submit" /> 
</form>
<?php
include("footer.php");

?>