<?php
include("header.php");

?>
<h1 class="Header"> Ivan's Shoe Show</h1>
<div class="slideShow">
  <div class="slide">
    <figure>
      <img src="lib/img/suarez.jpg" alt="Lifestyle">
        <figcaption class="Caption">
          Walk in style.
        </figcaption>
    </figure>
  </div>
  <div class="slide">
    <figure>
      <img src="lib/img/messi.jpg" alt="messi in action">
        <figcaption class="Caption">
          Play Like the best with the best cleats.
        </figcaption>
    </figure>
  </div>
  <div class="slide">
    <figure>
      <img src="lib/img/player3.jpg" alt="ronaldo in action">
       <figcaption class="Caption">
          Support The Champions with the all new 2017/2018 jeresey in stock.
       </figcaption>
    </figure>
  </div>
  <div class="slide">
    <figure>
      <img src="lib/img/blackout.jpg" alt="blackout pack from nike">
        <figcaption class="Caption">
         Stand out this season with the new Blackout pack
       </figcaption>
    </figure>
  </div>
</div>

<h2 class="featured"> Featured Products </h2>
<div class="featuredImages">
  <?php
    include("Views/Displayphotos.php");
    $featuredpage =  DisplayImages::featuredImages();
  ?>
</div>

<?php
include("footer.php");

?>