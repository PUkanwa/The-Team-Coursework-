 



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




//if no check boxes are selected
if (empty($_POST['sortby'])){
    
        //Execute sql query to fetch all the events after current time
            $querystring = "SELECT * FROM `Upcoming Movies` order by upTitle asc" ;

            //Server deals with query and if successful the result is evaluated as true
            $result = mysqli_query($connection, $querystring);

            //count number of rows fetched
            $row_count = mysqli_num_rows($result);

            //if no records were found
            if ($row_count == 0)

            {
            echo "No movies to display at the moment";
            }
            //else if there are results
            else
            {
            echo'<div class="whole">';
            
                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))   {

            
                    
                

                $imagepath = $row['upImage'] ;
                echo '<div class="um-text">';
            
                echo '<div class="movies">';
                     echo '<div>';
                        echo'<img src="Images/'.$imagepath.'">';         
                        echo'</div>';
                echo'</div>';

                

                    echo'<h1>'. $row['upTitle'] .'</h1>';
                    echo'<p>'. $row['upGenre'] .'</p>';
                    echo'<h2>'. $row['upDescription'] .'</h2>';

                    echo'<div title="Release date" class="calendar">';
                        echo'<h5><i style="font-size:24px;"  class="far">&#xf073;</i> '. $row['upDate'] .'</h5>';
                    echo"</div>";

                echo"</div>";
          

            }
            
            echo"</div>";
        
                
            }
            

            echo "</div>";
            
        }
  



else{
    
   
    $sort = $_POST['sortby'];

    
    if ($sort == "byname") { 
        
        
        
        $querystring = "SELECT * FROM `Upcoming Movies` order by upTitle asc" ;

        //Server deals with query and if successful the result is evaluated as true
        $result = mysqli_query($connection, $querystring);

        $row_count = mysqli_num_rows($result);

        if ($row_count == 0)
        {
          echo "No upcoming movies to display";
        }
        
        else 
        {
            echo'<div class="whole">';
            
                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))   {
                    
                    
                $imagepath = $row['upImage'] ;
                echo '<div class="um-text">';
            
                echo '<div class="movies">';
                     echo '<div>';
                        echo'<img src="Images/'.$imagepath.'">';         
                        echo'</div>';
                echo'</div>';

                

                    echo'<h1>'. $row['upTitle'] .'</h1>';
                    echo'<p>'. $row['upGenre'] .'</p>';
                    echo'<h2>'. $row['upDescription'] .'</h2>';

                    echo'<div title="Release date" class="calendar">';
                        echo'<h5><i style="font-size:24px;"  class="far">&#xf073;</i> '. $row['upDate'] .'</h5>';
                    echo"</div>";

                echo"</div>";
          

            }
            
            echo"</div>";
                
                
            }
        
    
    }
    
        
    
    
    
    
    
    

    else { 
            
    
        $querystring = "SELECT * FROM `Upcoming Movies` ORDER BY `upDate` ASC" ;

        //Server deals with query and if successful the result is evaluated as true
        $result = mysqli_query($connection, $querystring);

        $row_count = mysqli_num_rows($result);

        if ($row_count == 0)
        {
          echo "No upcoming movies to display";
        }
        
        else 
        {
            echo'<div class="whole">';
            
                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))   {

            
                   
                $imagepath = $row['upImage'] ;
                echo '<div class="um-text">';
            
                echo '<div class="movies">';
                     echo '<div>';
                        echo'<img src="Images/'.$imagepath.'">';         
                        echo'</div>';
                echo'</div>';

                

                    echo'<h1>'. $row['upTitle'] .'</h1>';
                    echo'<p>'. $row['upGenre'] .'</p>';
                    echo'<h2>'. $row['upDescription'] .'</h2>';

                    echo'<div title="Release date" class="calendar">';
                        echo'<h5><i style="font-size:24px;"  class="far">&#xf073;</i> '. $row['upDate'] .'</h5>';
                    echo"</div>";

                echo"</div>";
          

            }
            
            echo"</div>";
                
                
            }
    }

    
}


//close the connection
        mysqli_close($connection);


?>




            
                
         