 



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
if (empty($_POST['search'])){
    
    
            if (isset($_POST['past'])){
                
                //Execute sql query to fetch all the events after current time
            $querystring = "SELECT * FROM Events Order by eventDate asc" ;

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
                        echo"<p> ". $row['eventDate']. " | " . $row['eventTime'] . "</p>";
                    echo"</div>";

                    echo"<div class='eventDescription'>";
                        echo "<p>" .$row['eventDescription'] . "</p>";
                    echo"</div>";
             
                    echo"<div class='eventLocation'>";
                        echo "<p> <i class='material-icons'>&#xe0c8;</i>" .$row['eventLocation'] ."</p>";
                    echo"</div>";

                    echo"</div>";

            }
            echo"</div>";
            }
            echo "</div>";
                
                
            }
    
    
        else{
     
        //Execute sql query to fetch all the events after current time
            $querystring = "SELECT * FROM Events WHERE eventDate > CURRENT_TIMESTAMP;" ;

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
                        echo"<p> ". $row['eventDate']. " | " . $row['eventTime'] . "</p>";
                    echo"</div>";

                    echo"<div class='eventDescription'>";
                        echo "<p>" .$row['eventDescription'] . "</p>";
                    echo"</div>";
             
                    echo"<div class='eventLocation'>";
                        echo "<p> <i class='material-icons'>&#xe0c8;</i>" .$row['eventLocation'] ."</p>";
                    echo"</div>";

                    echo"</div>";

            }
                
                
            echo"</div>";
            }
            

            echo "</div>";
            
        }
  
}


else{
    
    
    echo"<form action = '' method='POST'>";
    
    echo '<input class="icon-search" type="submit" value="&#10005; Clear filters" >';
    
    echo'</form>';
    
   
    $search = $_POST['search'];
    
    
    
    
    if ($search == "searchbar") { 
        
        
        $usersearch = $_POST['usersearch'];

        //Execute sql query to fetch all information from item table about the selected item
        $querystring = "SELECT * FROM Events WHERE eventName LIKE '%$usersearch%'" ;

        //Server deals with query and if successful the result is evaluated as true
        $result = mysqli_query($connection, $querystring);

        $row_count = mysqli_num_rows($result);

        if ($row_count == 0)
        {
          echo "No event under this name was found";
        }
        //else if there are results
        else
        {
            echo"<div id='events-list'>";
            
                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))   {

             $linkname = $row['eventID'];

            //Display the image, name, likes and price of all items found

            echo"<div id='event-container'>";

             echo "<a name ='$linkname'> </a>";

             echo"<div class='eventname'>";
                        echo  "<h4>". $row['eventName'] ."</h4>";
                    echo"</div>";

                    echo"<div class='date'>";
                        echo"<p> ". $row['eventDate']. " | " . $row['eventTime'] . "</p>";
                    echo"</div>";

                    echo"<div class='eventDescription'>";
                        echo "<p>" .$row['eventDescription'] . "</p>";
                    echo"</div>";
             
                    echo"<div class='eventLocation'>";
                        echo "<p> <i class='material-icons'>&#xe0c8;</i>" .$row['eventLocation'] ."</p>";
                    echo"</div>";

                    echo"</div>";

            }
                echo"</div>";
                
            }
            
        }
    
        
    
    
    
    
    
    

    if ($search == "checkbox") { 
            
        

        $select = $_POST['checked'];

        foreach ($_POST['checked'] as $selected) {

            //Execute sql query to fetch all the information which match the selected checkbox types

            $querystring = "SELECT * FROM Events where eventType IN ('$selected')
            " ;

            //Server deals with query and if successful the result is evaluated as true
            $result = mysqli_query($connection, $querystring);

            //count number of rows fetched
            $row_count = mysqli_num_rows($result);

            //if no records were found
            if ($row_count == 0){
                echo "Items could not be displayed";
            }

            else {

                echo"<div id='events-list'>";
                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))   {

             $linkname = $row['eventID'];

            //Display the image, name, likes and price of all items found

            echo"<div id='event-container'>";

             echo "<a name ='$linkname'> </a>";

             echo"<div class='eventname'>";
                        echo  "<h4>". $row['eventName'] ."</h4>";
                    echo"</div>";

                    echo"<div class='date'>";
                        echo"<p> ". $row['eventDate']. " | " . $row['eventTime'] . "</p>";
                    echo"</div>";

                    echo"<div class='eventDescription'>";
                        echo "<p>" .$row['eventDescription'] . "</p>";
                    echo"</div>";
             
                    echo"<div class='eventLocation'>";
                        echo "<p> <i class='material-icons'>&#xe0c8;</i>" .$row['eventLocation'] ."</p>";
                    echo"</div>";

                    echo"</div>";

            }
                echo"</div>";
                
            }
            
        }
        
    }  
    
    
if (isset($_POST['submit'])){
    
    
    if(!empty($_POST['month'])){
        
          $selection = $_POST['month']; 
        
        
        if($selection == "01") {
            $month = "January";
         $query = "SELECT * FROM Events WHERE eventDate LIKE '%-01-%'"; }
        else if($selection == "02") {
            $month = "Feburary";
          $query = "SELECT * FROM Events WHERE eventDate LIKE '%-02-%'"; }
        else if($selection == "03") {
            $month = "March";
          $query = "SELECT * FROM Events WHERE eventDate LIKE '%-03-%'"; }
        else if($selection == "04") {
            $month = "April";
          $query = "SELECT * FROM Events WHERE eventDate LIKE '%-04-%'"; }
        else if($selection == "05") {
            $month = "May";
          $query = "SELECT * FROM Events WHERE eventDate LIKE '%-05-%'"; }
        else if($selection == "06") {
            $month = "June";
          $query = "SELECT * FROM Events WHERE eventDate LIKE '%-06-%'"; }
        else if($selection == "07") {
            $month = "July";
          $query = "SELECT * FROM Events WHERE eventDate LIKE '%-07-%'"; }
        else if($selection == "08") {
            $month = "August";
          $query = "SELECT * FROM Events WHERE eventDate LIKE '%-08-%'"; }
        else if($selection == "09") {
            $month = "September";
          $query = "SELECT * FROM Events WHERE eventDate LIKE '%-09-%'"; }
        else if($selection == "10") {
            $month = "October";
          $query = "SELECT * FROM Events WHERE eventDate LIKE '%-10-%'"; }
        else if($selection == "11") {
            $month = "November";
          $query = "SELECT * FROM Events WHERE eventDate LIKE '%-11-%'"; }
        else {
            $month = "December";
          $query = "SELECT * FROM Events WHERE eventDate LIKE '%-12-%'"; }

        
    }
     

       
}
 
    if (isset($query))
{
      
 
  $result = mysqli_query($connection, $query);    

        $row_count = mysqli_num_rows($result);
        
        
        echo $month; 

            //if no records were found
            if ($row_count == 0){
                echo "<br> There is currently no event in this month";
            }

            else {
                
                

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
                        echo"<p> ". $row['eventDate']. " | " . $row['eventTime'] . "</p>";
                    echo"</div>";

                    echo"<div class='eventDescription'>";
                        echo "<p>" .$row['eventDescription'] . "</p>";
                    echo"</div>";
             
                    echo"<div class='eventLocation'>";
                        echo "<p> <i class='material-icons'>&#xe0c8;</i>" .$row['eventLocation'] ."</p>";
                    echo"</div>";

                    echo"</div>";

            }
            echo"</div>";
            }
            echo "</div>";
 
 
}
    
    

}


//close the connection
        mysqli_close($connection);


?>


            
                
         