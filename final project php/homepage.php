<?php
include("header.php");

?>
<div class="slideShow">
  <div>
    <figure>
      <img src="img/champions.jpg" alt="champions league">
        <figcaption class="Caption">
         Play Just like in the Champions league with the 2017/2018 Season ball now in stock !
        </figcaption>
    </figure>
  </div>
  <div>
    <figure>
      <img src="img/messi.jpg" alt="messi in action">
        <figcaption class="Caption">
          Play Like the best with the best cleats.
        </figcaption>
    </figure>
  </div>
  <div class="hello">
    <figure>
      <img src="img/player3.jpg" alt="ronaldo in action">
       <figcaption class="Caption">
          Support The Champions with the all new 2017/2018 jeresey in stock.
       </figcaption>
    </figure>
  </div>
  <div>
    <figure>
      <img src="img/blackout.jpg" alt="blackout pack from nike">
        <figcaption class="Caption">
         Stand out this season with the new Blackout pack
       </figcaption>
    </figure>
  </div>
</div>



  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

  <script type="text/javascript">
   $("document").ready(function(){
      $('.slideShow').slick({
      dots: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      });
    });
  </script>


<?php
include("footer.php");

?>