 <?php
  //set up the connection variables for connecting to the Database

  $server = '127.0.0.1';
  $user = 'root';
  $password = '';
  $database = 'TheTeam';

  $connection = mysqli_connect($server,$user,$password,$database);
  if (mysqli_connect_errno())
  {
    echo "<h1>Connection Error</h1>";
    echo "Failed to connect to MySQL Database: " . mysqli_connect_error();
    //and kill the script
    die();
  }

  //Recieve and store values from form inputs
  $rating = $_POST['rate']; ;
  $firstname = $_POST['firstname'] ;
  $title = $_POST['title'] ;
  $review = $_POST['review'] ;

  //Execute sql query to insert values into customer table
  $query_string = "INSERT INTO Review (rating, firstname, title, review) VALUES ('$rating', '$firstname', '$title','$review')";

//Server deals with query and if successful the result is evaluated as true
         $result = mysqli_query($connection, $query_string);
  
if($result){
  
    //Success message displayed and user redirected to appropriate page
     echo "<script type='text/javascript'>alert('Review Added');</script>";
        
 echo "<script type='text/javascript'> window.location = 'testimonial.php';</script>";
     
     }

  //If query is unsucessful
  else {
 //Display error message
    echo "<script type='text/javascript'>alert('Error adding your review');</script>";
    echo("Error description: " . mysqli_error($connection)) . "<br>";
  }

  //Close the connection
  mysqli_close($connection);


  ?>
