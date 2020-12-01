<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="CSS/theteam.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        
        
        <title>Upcoming movies</title>

    </head>

     <header> 
        
    <?php include 'menu.php';?>

        

    </header>

<body>

    <div class="page-headtext">
        <div class="page-header"> 
        </div>
        
     <h3>Union Recomendations</h3>
        
        <div class="page-header2">
        </div>
    </div>
    
      <div class="pg-header">
    
        <p> As far as the biggest films go, it’s been a year of postponements and delays, but the good news is that means there are still loads of big movies to look forward to in 2021, and with the recent promising vaccine news it hopefully won’t be long till we can get back to normal cinema-going habits.</p>
     
     </div>

      <div class="wholee">
          <div class="um-title">
          
              <h3>Coming soon</h3>
          
          </div>
         <div class="sort">  
         <h4>Sort by:</h4>
         
             <form class="sort-link" action = '' method='POST'>
                        <input type='hidden' name='sortby' value='byname' >
                       <input  type="submit" value="Name " >
                   </form>
             
             
            <form class="sort-link" action = '' method='POST'>
                        <input type='hidden' name='sortby' value='bydate' >
                       <input  type="submit" value="Date" >
                   </form>
     </div>
          
          
          <?php include 'sortupcomingmovies.php';?>
          
        
 </div>

    
    </body>
     
     <?php include 'footer.php';?>

</html>