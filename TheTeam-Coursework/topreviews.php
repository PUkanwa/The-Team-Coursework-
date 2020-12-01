

<?php

//set up the connection variables to connect to the database
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
    


            //Execute sql query to fetch the time booking was made
            $querystring = "SELECT * FROM Review
                            ORDER BY reviewID DESC
                            LIMIT 3" ;

            //Server deals with query and if successful the result is evaluated as true
            $result = mysqli_query($connection, $querystring);

            //count number of rows fetched
            $row_count = mysqli_num_rows($result);

            //if no records were found
            if ($row_count == 0)

            {
            echo "No reviews yet :(";
            }
            //else if there are results
            else
            {
            echo"<div class='events'>";
                
            echo'<div class="flex-container">';

            while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))

            {

            //Display the image, name, likes and price of all items found


            echo '<div class="flex-item">';
                
                
                echo"<div class='#'>";
                echo  "<h3>". $row['firstname'] ."</h3>";
            echo"</div>";
                
                echo"<div class='#'>";
                echo  "<p>". $row['rating'] ." / 5</p>";
            echo"</div>";
                
                echo"<div class='#'>";
                echo  "<p> <b>". $row['title'] ."</b> </p>";
            echo"</div>";
                
                echo"<div class='db-review'>";
                echo  "<p>". $row['review'] ."</p>";
            echo"</div>";
                
             
            echo '</div>';
                    

            }
            echo"</div>";
            echo"</div>";
            }

           //Close the connection
           mysqli_close($connection);

 
echo "</div>";

?>
