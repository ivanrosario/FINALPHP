<?php
  include("header.php");
  include("Services/Comments.php");
?>

  <div>
    <?php
      foreach( $comments  as $comment){
        $store_comment = $comment[comment];
        echo " <li class='comments'> '$store_comment' </li>";
      } 
    ?> 

  </div>
  
<?php
include("footer.php");

?>