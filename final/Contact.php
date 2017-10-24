
<?php
include("header.php");

?>
<div class="contact">
  <h2 class="contactheader"> Contact Us </h2>
    <form  id="submit" method="POST" action="comments.php">
      <div>
        <label class="label" for="firstName">First Name:</label>
      </div>
        <input type="text" id="firstName" name="fname"  value=""  required>
      <div>
        <label  class="label" for="lastName">Last Name:</label>
      </div>
        <input type="text" id="lastName" name="lname" value=""  required>
      <div>
        <label  class="label" for="email">Email:</label>
      </div>
        <input type="email" id="email" name="email" value=""  required>
      <div>
        <label  class="label" for="phone">Phone Number:</label>
      </div>
        <input type="tel" id="phone" name="phone" pattern=“^\d{3}-\d{3}-\d{4}$” value=""  required>
      <div>
        <label  class="label">Comments/Questions:</label>
      </div>
        <textarea rows="5" cols="45" name="comment" required></textarea >
      <div>
      <input id="putIn" type="Submit" value="Submit" name="Submit" />
      </div>
    </form>
</div>
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