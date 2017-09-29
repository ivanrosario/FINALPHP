<?php

try{
$db = new PDO("mysql:host=localhost;dbname=Finalphp;port=3306", "root", "root");
} catch(Exception $e){
  echo "unable to connect oh ";
}

try {
 $results = $db->query("SELECT comment FROM Contact_info  ");
 
} catch (Exception $e){
    echo "Bad query";
    exit;
}



 

if(isset($_POST['Submit'])  == 'Submit') {
    try {
      $query = "INSERT INTO `Contact_info` (fname, lname, email, phone, comment, contactId) ";
      $query .= "VALUES( :fname, :lname, :email, :phone,  :comment, NULL)";
      $stmt = $db->prepare($query);
      $stmt->execute(array(
                ':fname'=>$_POST['fname'],
                ':lname'=>$_POST['lname'],
                ':email'=>$_POST['email'],
                ':phone'=>$_POST['phone'],
                ':comment'=>$_POST['comment'],
      ));
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }

     try {
        $results = $db->query("SELECT comment FROM Contact_info  ");
        } catch (Exception $e){
            echo "Bad query";
            exit;
        } 

    $comments = $results->fetchAll(PDO::FETCH_ASSOC);

}



?>
<?php
include("header.php");

?>
<div class="contact">
  <div id="form">
    <form  id="submit" method="POST" action="#">
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
     <?php
      if(isset($_POST['Submit'])  == 'Submit') {
        foreach( $comments  as $comment){
            $store_comment = $comment[comment];
          echo " <li class='comments'>  $store_comment </li>";
        } 
      }
    ?> 
  </div>
<div>
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/jqueryvalidate.js"></script>
<!-- <script>
$("#submit").validate(); 
</script>   -->

<?php
include("footer.php");

?>