<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=Finalphp;port=3306", "root", "root");
    } catch(Exception $e){
        echo "unable to connect oh "; 
    }

  try {
    $query = "INSERT INTO `Contact` (fname, lname, email, phone, comment, contactId) ";
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
     $results = $db->query("SELECT comment FROM Contact" );
    } catch (Exception $e){
      echo "Bad query";
      exit;
    } 
    //abouve goes into services

  $comments = $results->fetchAll(PDO::FETCH_ASSOC);
?>