
<?php
include("header.php");

?>
<div class="contact">
  <div id="form">
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
        <input type="text" id="email" name="email" value="" placeholder="Email" required>
      <div>
        <label for="phone">Phone Number:</label>
      </div>
        <input type="text" id="phone" name="phone" value=""  required>
      <div>
        <label>Comments/Questions:</label>
      </div>
        <textarea rows="5" cols="45" name="comment" value="" ></textarea required>
      <div>
      <input type="Submit" value="Submit" name="Submit" /> 
      </div>
    </form>
  </div>
<div>
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