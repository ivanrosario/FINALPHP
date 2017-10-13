<?php

	include("Services/Database.php");


  try {
    $query = "INSERT INTO `Contact` (fname, lname, email, phone, comment, contactId) ";
    $query .= "VALUES( :fname, :lname, :email, :phone,  :comment, NULL)";
    $stmt = $db->prepare($query);
    $stmt->execute(array(
            ':fname'=>strip_tags($_POST['fname']),
            ':lname'=>strip_tags($_POST['lname']),
            ':email'=>strip_tags($_POST['email']),
            ':phone'=>strip_tags($_POST['phone']),
            ':comment'=>strip_tags($_POST['comment']),
    ));
    } catch (Exception $e) {
        echo $e->getMessage();
        exit;
    }

  

?>