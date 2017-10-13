
<?php
include("header.php");

?>
<div class="contact">
  <h2 class="contactheader"> Contact Us </h2>
    <form  id="submit" method="POST" action="comments.php">
      <div>
        <label for="firstName">First Name:</label> 
      </div>
        <input type="text" id="firstName" name="fname"  value="" placeholder="First Name" required>
      <div>
        <label for="lastName">Last Name:</label>
      </div>
        <input type="text" id="lastName" name="lname" value="" placeholder="Last Name" required>
      <div>
        <label for="email">Email:</label>
      </div>
        <input type="email" id="email" name="email" value="" placeholder="Email" required>
      <div>
        <label for="phone">Phone Number:</label>
      </div>
        <input type="tel" id="phone" name="phone" pattern=“^\d{3}-\d{3}-\d{4}$” value=""  required>
      <div>
        <label>Comments/Questions:</label>
      </div>
        <textarea rows="5" cols="45" name="comment" required></textarea >
      <div>
      <input type="Submit" value="Submit" name="Submit" /> 
      </div>
    </form>
</div>
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="lib/js/jqueryvalidate.js"></script>
<script>
 $("#submit").validate();
//   submitHandler: function() {
//     $("#submit").toggle(2000);
//   }
// });
</script>   

<?php
include("footer.php");

?>