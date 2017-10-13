<?php
  include("header.php");
  include("Services/Comments.php");
?>

<h2 class="cheader" > Check out what they said </h2>
<div class="comments-wrapper">
  <?php

    include("Services/Database.php");

    try {
     $results = $db->query("SELECT comment, fname FROM Contact" );
    } catch (Exception $e){
      echo "Bad query";
      exit;
    } 
    //abouve goes into services

  $comments = $results->fetchAll(PDO::FETCH_ASSOC);
  $comments = array_reverse($comments);

    foreach( $comments  as $comment){
      $storeComment = $comment[comment];
      $personComment = $comment[fname];

      $displayComment  = "<div class='comments'> <h3> $personComment</h3>";
      $displayComment .= "<p>$storeComment</p> </div>";

      echo "$displayComment";
      
    } 
  ?> 
</div>
  
<?php
include("footer.php");

?>