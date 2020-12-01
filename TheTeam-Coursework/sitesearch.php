

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
    
        
$usersearch = $_POST['search'];

            //Execute sql query to fetch the time booking was made
            $querystring = "SELECT * FROM Events" ;

            //Server deals with query and if successful the result is evaluated as true
            $result = mysqli_query($connection, $querystring);

            //count number of rows fetched
            $row_count = mysqli_num_rows($result);

            //if no records were found
            if ($row_count == 0)

            {
            echo "No Items found :(";
            }
            //else if there are results
            else
            {
            echo "<div id='display-events'>";
            echo"<div id='events-list'>";

            while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))

            {

             $linkname = $row['eventID'];

            //Display the image, name, likes and price of all items found

            echo"<div id='event-container'>";

             echo "<a name ='$linkname'> </a>";

             echo"<div class='eventname'>";
                        echo  "<h4>". $row['eventName'] ."</h4>";
                    echo"</div>";

                    echo"<div class='date'>";
                        echo"<p> ". $row['eventDate']. "|" . $row['eventTime'] . "</p>";
                    echo"</div>";

                    echo"<div class='eventDescription'>";
                        echo "<p>" .$row['eventDescription'] . "</p>";
                    echo"</div>";
             
                    echo"<div class='eventLocation'>";
                        echo "<p>" .$row['eventLocation'] ."</p>";
                    echo"</div>";


            echo"</div>";

            }
            echo"</div>";
            }
            echo "</div>";

           //Close the connection
           mysqli_close($connection);
 


?>
