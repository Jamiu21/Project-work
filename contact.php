<?php

   $connection = mysqli_connect('localhost','root','','contact_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      
      $request = " insert into contact_GNF(name, email, phone, address, ) values('$name','$email','$phone','$address',) ";
      mysqli_query($connection, $request);

      header('location:contact.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>