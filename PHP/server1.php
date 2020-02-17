<?php
  session_start();

  // initializing variables
  $city = "";
  $place  = "";
  $desp = "";
  $errors = array(); 

// connect to the database
  $db = mysqli_connect('localhost', 'root', '', 'registration');

  if (isset($_POST['add_place'])) 
   {
      // receive all input values from the form
      $city = mysqli_real_escape_string($db, $_POST['city']);
      $place = mysqli_real_escape_string($db, $_POST['place']);
      $desp = mysqli_real_escape_string($db, $_POST['desp']);
      

      // form validation: ensure that the form is correctly filled ...
      // by adding (array_push()) corresponding error unto $errors array
      if (empty($city)) { array_push($errors, "city is required"); }
      if (empty($place)) { array_push($errors, "place is required"); }
      

      
      if (count($errors) == 0) 
      {
      

    	$query = "INSERT INTO add1 (city, place, desp) 
    			  VALUES('$city', '$place', '$desp')";
    	mysqli_query($db, $query);
    
    	header('location: homepagelog.php');
      }
    }
?>